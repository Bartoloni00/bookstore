<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function createView()
    {
        return view('auth/create');
    }

    public function createProcess(Request $request)
    {
        $data = $request->only(['name','email','password']);
        $request->validate(User::CREATE_RULES,User::ERROR_MESSAGES);

        $data['rol_id'] = 2;
        $data['password'] = Hash::make($data['password']);
        $data['created_at'] = now();
        $data['updated_at'] = now();

        User::create($data);

        return redirect()
            ->route('home')
            ->with('status.message','El usuario: '. e($data['name']) . ' fue registrado exitosamente.');

    }
}
