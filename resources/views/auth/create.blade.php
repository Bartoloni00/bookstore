@extends('layouts.main')

@section('title', 'Crear usuario')

@section('contenido')

<section class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card position-static my-5">

                <!--Titulo de la sección-->
                <div class="card-header">
                    <h1 class="text-center">Creación de usuario</h1>
                </div>

                <!--Contenido Principal-->
                <div class="card-body">

                    <!--Inicio del formulario-->
                    <form method="POST" action="{{ route('user.create.process') }}">
                        @csrf

                        <!--Nombre del usuario-->
                        <div class="form-group mb-4">
                            <label for="name">Nombre de usuario</label>
                            <input
                              id="name"
                              type="text"
                              class="form-control @error('name') is-invalid @enderror"
                              name="name"
                              value="{{ old('name') }}"
                              required
                              autofocus>

                             <!--Mensaje de Error-->
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!--Correo Electronico del usuario-->
                        <div class="form-group mb-4">
                            <label for="email">Correo Electrónico</label>
                            <input
                              id="email"
                              type="email"
                              class="form-control @error('email') is-invalid @enderror"
                              name="email"
                              value="{{ old('email') }}"
                              required>

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

                        <!--Boton de registrarse-->
                        <div class="form-group text-center">
                            <button type="submit" class="btn-custom btn-block mb-2 px-5">Crear usuario</button>
                        </div>

                        <!--Boton de iniciar sesión-->
                        <div class="text-center">
                            <p>¿Tienes cuenta? <a href="{{ route('login') }}" class="text-blue">¡Logueate!</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
