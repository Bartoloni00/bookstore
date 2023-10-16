<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginProcess(Request $request)
    {
        //Validar

        $credenciales = $request->only(['email','password']);
        if (!Auth::attempt($credenciales)) {
            return redirect()
                ->route('login')
                ->withInput()
                ->with('status.type','danger')
                ->with('status.message','Las credenciales de ingreso no coinciden con nuestros datos');
        }

        return redirect()
            ->route('home')
            ->with('status.message', 'Buen dia ' .auth()->user()->name);
    }

    public function logoutProcess(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();// vacia la sesion y genera un nuevo id.
        $request->session()->regenerateToken();// genera un nuevo token CSRF

        return redirect()
            ->route('home')
            ->with('status.message','La session se cerro exitosamente');
    }
}
