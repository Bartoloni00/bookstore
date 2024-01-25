<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Preference\PreferenceClient;

class CartController extends Controller
{
    /**
     * muestra el carrito
     */
    public function cart()
    {
        $user = User::findOrFail(auth()->user()->id);

        $cart = $user->processCartItems();

        if (empty($cart['items'])) {
            // Manejar el caso de carrito vacío, por ejemplo
            return view('books/cart',['user' => $user]);
        }
        MercadoPagoConfig::setAccessToken(config('mercadopago.accessToken'));

        $client = new PreferenceClient();

        $preference = $client->create([
            "items"=> $cart['items'],
            "back_urls" => [
                'success' => route('mp.success'),
                'pending' => route('mp.pending'),
                'failture' => route('mp.failture'),
            ],
          ]);

        return view('books/cart',[
            'user'=> $user,
            'totalPrice' => $cart['totalPrice'],
            'preference' => $preference,
            'mpPublicKey' => config('mercadopago.publicKey'),
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
                    ->route('book.cart')
                    ->with('status.type','danger')
                    ->with('status.message', $message);
            }
        }
    
        return redirect()
            ->route('book.cart')
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
            ->route('book.cart')
            ->with('status.message','Cantidad actualizada.');
    }

    public function removeFromCart(int $bookId)
    {
    $user = User::findOrFail(auth()->user()->id);
    $book = Book::findOrFail($bookId);

    // Deshacer la relación
    $user->books()->detach($book->id);

    return redirect()
        ->route('book.cart')
        ->with('status.message', 'Libro eliminado del carrito exitosamente');
    }

}
