<?php
namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Images;
use App\Models\Category;

class BooksController extends Controller
{
    public function index()
    {
        // traemos todos los registros de las peliculas usando el modelo Book
        // usamos el metodo all() que retorna una Collection (clase que representa un array de objetos)
        
        $books = Book::all();
        $author = Author::All();
        $images = Images::All();
        $category = Category::All();
        // echo '<pre>';
        // print_r($books);
        // echo '</pre>';
        // por defecto las vista no heredan ninguna variable que este definida en el controller.
        // tenemos que proveerselo expresamente, utilizando el segundo parametro de view()
        return view('books/index', [
            'books' => $books,
            'author' => $author,
            'images' => $images,
            'category' => $category,
        ]);
    }
    public function details(int $id)
    {
        // si find() no encuentra nada retorna null
        // eso puede generarnos problemas y como es muy comun laravel provee:
        // findOrFail la cual redirecciona a un 404
        return view('books/details',[
            'book' => Book::findOrFail($id),
            'author' => Author::findOrFail($id),
            'images' => Images::findOrFail($id),
            'category' => Category::findOrFail($id),
        ]);
    }
}