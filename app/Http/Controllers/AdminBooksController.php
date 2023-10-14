<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Images;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminBooksController extends Controller
{
    

    public function index()
    {
        $books = Book::all();
        $author = Author::All();
        $images = Images::All();
        $category = Category::All();

        return view('admin/books/index', [
            'books' => $books,
            'author' => $author,
            'images' => $images,
            'category' => $category,
        ]);
    }

    public function createView()
    {
        return view('admin/books/add');
    }

    public function createProcess(Request $request)
    {
        // echo '<pre>';
        // dd($request);// igual a print_r pero evita bucles infinitos
        // echo '</pre>';
        $data = $request->only(['title','description','price','synopsis','release_date','categorie_id','author_id']);
        // // $data['user_id'] = 1;
        // // dd($data);
        // Book::create($data);
        $request->validate(Book::CREATE_RULES,Book::ERROR_MESSAGES);

        return redirect('admin/books/index')
            ->with('status.message','El Libro: '. e($data['title']) . 'fue agregado exitosamente.');
    }

    public function editView(int $id)
    {
        return view('admin/books/edit',[
            'book' => Book::findOrFail($id),
        ]);
    }

    public function editProcess(int $id, Request $request)
    {
        $book = Book::findOrFail($id);
        $request->validate(Book::CREATE_RULES,Book::ERROR_MESSAGES);
        $data = $request->except('_token');

        $book->update($data);

        return redirect('admin/books/index')
        ->with('status.message','El Libro: '. e($data['title']) . 'fue editado exitosamente.');
    }

    public function deleteView(int $id)
    {
        $books = Book::all();
        $author = Author::All();
        $images = Images::All();
        $category = Category::All();
        return view('admin/books/delete',[
            'book' => Book::findOrFail($id),
            'author' => Author::All(),
            'image' => Images::All(),
            'category' => Category::All()
        ]);
    }

    public function deleteProcess(int $id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect('admin/books')
        ->with('status.message','El Libro: '. e($book->title) . ' fue eliminada exitosamente.');
    }
}
