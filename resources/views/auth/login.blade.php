@extends('layouts.main')

@section('title', 'Login')

@section('contenido')

<section class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card position-static my-5">
                <!--Titulo de la sección-->
                <div class="card-header">
                    <h1 class="text-center">Login</h1>
                </div>

                <!--Contenido Principal-->
                <div class="card-body">

                    <!--Inicio del formulario-->
                    <form method="POST" action="{{ route('login.process') }}">
                        @csrf

                        <!--Correo Electronico del usuario-->
                        <div class="form-group mb-4">
                            <label for="email">Correo Electrónico</label>
                            <input
                              id="email"
                              type="email"
                              class="form-control @error('email') is-invalid @enderror"
                              name="email"
                              value="{{ old('email') }}"
                              required
                              autocomplete="email"
                              autofocus>

                             <!--Mensaje de Error-->
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!--Contraseña del usuario-->
                        <div class="form-group mb-4">
                            <label for="password">Contraseña</label>
                            <div class="password-div">
                                <input
                                  id="password"
                                  type="password"
                                  class="form-control @error('password') is-invalid @enderror"
                                  name="password"
                                  required
                                  autocomplete="current-password">

                                <i class="fa-solid fa-eye-low-vision" id="ojo"></i>
                            </div>

                            <!--Mensaje de Error-->
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!--Boton de iniciar sesión-->
                        <div class="form-group m-auto text-center">
                            <button type="submit" class="btn-custom btn-block mt-3 mb-3 px-5">Iniciar sesión</button>
                        </div>

                        <!--Boton de Registrarse-->
                        <div class="text-center">
                            <p>¿No tienes cuenta?
                                <a href="{{ route('user.create.view') }}" class="text-blue">¡Regístrate!</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
