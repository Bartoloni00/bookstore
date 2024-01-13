<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MPController extends Controller
{
    /*
        La configuracion de mercado pago esta en el metodo cart de CartController
    */
 
    public function mpSuccess(Request $request)
    {
        //TODO: Crear una tabla en la que guardamos todos los datos de la compra realizada por el usuario 
        // posterior mente vaciar el carrito
        /*
        del query de $request puedo sacar el status,payment_id,preference_id
        ¿como acceder a los items que compro el usuario?
        ¿una vez que la compra esta realizada, como vacio el carrito
        */
        echo 'exito';
        dd($request);
    }

    public function mpPending(Request $request)
    {
        // TODO: vaciar el carrito
        echo 'pendiente';
        dd($request);
    }

    public function mpFailture(Request $request)
    {
        //TODO: mensaje de error del fallo
        echo 'fallo';
        dd($request);
    }
}