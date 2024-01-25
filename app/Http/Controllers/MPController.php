<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\User;
use Illuminate\Http\Request;

class MPController extends Controller
{
    /*
        La configuracion de mercado pago esta en el metodo cart de CartController
    */
 
    public function mpSuccess(Request $request)
    {
        // Guardamos la compra en la tabla purchases de la base de datos
        $dataPurchase;
        $user = User::findOrFail(auth()->user()->id);
        $cart = $user->processCartItems();


        $dataPurchase['user_id'] = $user->id;
        $dataPurchase['payment_id'] = $request->payment_id;
        $dataPurchase['preference_id'] = $request->preference_id;
        $dataPurchase['total_price'] = $cart['totalPrice'] * 100;
        $dataPurchase['state'] ='success';
        $dataPurchase['created_at'] = now();
        $dataPurchase['updated_at'] = now();
        $purchase = Purchase::create($dataPurchase);
        $purchaseId = $purchase->id;
        // dd($dataPurchase);
        // establecer las relaciones de muchos a muchos entre purchases y books
        $purchase = Purchase::findOrFail($purchaseId);
        foreach ($user->books as $book) {

            // dd($book);
            $bookData = [
                'book_id' => $book->id,
                'amount' => $book->pivot->amount,
                'price' => $book->price
            ];
            $purchase->Books()->attach($book->id);
            $purchase->Books()->updateExistingPivot($bookData['book_id'], [
                'amount' => $bookData['amount'],
                'price' => $bookData['price'] * 100,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        // $purchase->Books()->attach();
        // vaciar carrito
        foreach ($user->books as $book) {
            $user->books()->detach($book->id);
        }
        // redireccionar
        return redirect()
        ->route('book.cart')
        ->with('status.message', 'Compra realizada exitosamente');
    }

    public function mpPending(Request $request)
    {
        // Guardamos la compra en la tabla purchases de la base de datos
        $dataPurchase;
        $user = User::findOrFail(auth()->user()->id);
        $cart = $user->processCartItems();


        $dataPurchase['user_id'] = $user->id;
        $dataPurchase['payment_id'] = $request->payment_id;
        $dataPurchase['preference_id'] = $request->preference_id;
        $dataPurchase['total_price'] = $cart['totalPrice'] * 100;
        $dataPurchase['state'] ='pending';
        $dataPurchase['created_at'] = now();
        $dataPurchase['updated_at'] = now();
        $purchase = Purchase::create($dataPurchase);
        $purchaseId = $purchase->id;
        // dd($dataPurchase);
        // establecer las relaciones de muchos a muchos entre purchases y books
        $purchase = Purchase::findOrFail($purchaseId);
        foreach ($user->books as $book) {

            // dd($book);
            $bookData = [
                'book_id' => $book->id,
                'amount' => $book->pivot->amount,
                'price' => $book->price
            ];
            $purchase->Books()->attach($book->id);
            $purchase->Books()->updateExistingPivot($bookData['book_id'], [
                'amount' => $bookData['amount'],
                'price' => $bookData['price'] * 100,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        // $purchase->Books()->attach();
        // vaciar carrito
        foreach ($user->books as $book) {
            $user->books()->detach($book->id);
        }
        // redireccionar
        return redirect()
        ->route('book.cart')
        ->with('status.message', 'Compra pendiente de pago');
    }

    public function mpFailture(Request $request)
    {
        // redireccionar
        return redirect()
        ->route('book.cart')
        ->with('status.type','danger')
        ->with('status.message', 'Ocurrio un error al realizar la compra');
    }
}