<?php
namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        // traemos todos los registros de las peliculas usando el modelo Book
        // usamos el metodo all() que retorna una Collection (clase que representa un array de objetos)
        
        // $books = Book::all()->paginate(4);
        $books = Book::paginate(4);
        // echo '<pre>';
        // print_r($books);
        // echo '</pre>';
        // por defecto las vista no heredan ninguna variable que este definida en el controller.
        // tenemos que proveerselo expresamente, utilizando el segundo parametro de view()
        return view('books/index', [
            'books' => $books,
        ]);
    }
    public function details(int $id)
    {
        // si find() no encuentra nada retorna null
        // eso puede generarnos problemas y como es muy comun laravel provee:
        // findOrFail la cual redirecciona a un 404
        return view('books/details',[
            'book' => Book::findOrFail($id)
        ]);
    }

    /**
     * muestra el carrito
     */
    public function myBooks()
    {
        $user = User::findOrFail(auth()->user()->id);
        return view('books/mybooks',[
            'user'=> $user
        ]);
    }

    /**
     * Agrega en el carrito
     */
    public function addToCart(int $id)
    {
        $user = User::findOrFail(auth()->user()->id);
        $book = Book::findOrFail($id);
    
        $message = 'El libro: '. $book->title . 'fue añadido al carrito';
        try {
            $user->books()->attach($book->id);
        } catch (\Throwable $th) {
            if ($th instanceof \Illuminate\Database\QueryException && $th->getCode() == 23000) {
                // El libro ya existe en el carrito
                $user->books()->where('book_id', $book->id)->increment('amount');
                $message = 'Haz incrementado en 1 al libro: '. $book->title . 'en tu carrito';
            } else {
                $message = 'Ocurrio un error: El libro no pudo ser agregado al carrito, intenta mas tarde';
                return redirect()
                    ->route('books.my')
                    ->with('status.type','danger')
                    ->with('status.message', $message);
            }
        }
    
        return redirect()
            ->route('books.my')
            ->with('status.message', $message);
    }
    
    
    /**
     * Edita la cantidad(amount) de un libro en el carrito
     */
    public function updateCart(Request $request)
    {  
        $data = $request->only(['amount','book_id']);
        $user = User::findOrFail(auth()->user()->id);

        $request->validate([
            'amount' => ['required', 'numeric', 'gte:1'],
        ], [
            'amount.required' => 'Debes indicar la cantidad para editarla',
            'amount.numeric' => 'La cantidad debe ser un número',
            'amount.gte' => 'La cantidad no puede ser un número negativo',
        ]);

        $user->books()->updateExistingPivot($data['book_id'], [
            'amount' => $data['amount'],
        ]);

        return redirect()
            ->route('books.my')
            ->with('status.message','Cantidad actualizada.');
    }

    public function removeFromCart(int $bookId)
{
    $user = User::findOrFail(auth()->user()->id);
    $book = Book::findOrFail($bookId);

    // Deshacer la relación
    $user->books()->detach($book->id);

    return redirect()
        ->route('books.my')
        ->with('status.message', 'Libro eliminado del carrito exitosamente');
}
}