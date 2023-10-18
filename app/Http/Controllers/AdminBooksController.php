<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Images;
use App\Models\Category;
use Database\Seeders\Image;
use Illuminate\Http\Request;

class AdminBooksController extends Controller
{
    

    public function index()
    {
        //asi evitamos el lazyloading y tenemos menos consultas hacia la BD
        $books = Book::with(['category','author','user','image'])->get();

        return view('admin/books/index', [
            'books' => $books
        ]);
    }

    public function createView()
    {
        return view('admin/books/add',[
            'categories' => Category::all(),
            'authors' => Author::all()
        ]);
    }

    public function createProcess(Request $request)
    {
        // $dataImage = [];

        $dataBook = $request->only(['title','description','price','synopsis','release_date','categorie_id','author_id']);
        // $dataBook['user_id'] = auth()->user()->id;
        // // dd($dataBook);
        // if ($request->hasFile('image')) {
        //     $dataImage = $request->only(['alt','image']);
        //     $dataImage['image'] = $request->file('image')->store('images');

        //     $request->validate(Images::CREATE_RULES,Images::ERROR_MESSAGES);
        //     Images::create($dataImage);
        // }
        $request->validate(Book::CREATE_RULES,Book::ERROR_MESSAGES);

        $dataBook['user_id'] = auth()->user()->id;
        Book::create($dataBook);
        return redirect('/admin/books')
            ->with('status.message','El Libro: '. e($dataBook['title']) . 'fue agregado exitosamente.');
    }

    public function editView(int $id)
    {
        return view('admin/books/edit',[
            'book' => Book::findOrFail($id),
            'categories' => Category::all(),
            'authors' => Author::all()
        ]);
    }

    public function editProcess(int $id, Request $request)
    {
        $book = Book::findOrFail($id);
        $request->validate(Book::CREATE_RULES,Book::ERROR_MESSAGES);
        $data = $request->except('_token');

        $book->update($data);

        return redirect('admin/books')
        ->with('status.message','El Libro: '. e($data['title']) . 'fue editado exitosamente.');
    }

    public function deleteView(int $id)
    {
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
        ->with('status.message','El Libro: '. e($book->title) . ' fue eliminado exitosamente.');
    }
}
