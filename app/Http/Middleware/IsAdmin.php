<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!(auth()->user()->rol_id == 1)) {
            return redirect()
                ->route('home')
                ->with('status.type','danger')
                ->with('status.message','Este contenido esta disponible solo para los administradores del sitio');
        }
        return $next($request);
    }
}
