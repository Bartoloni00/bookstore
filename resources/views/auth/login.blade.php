@extends('layouts.main')

@section('title', 'Login')

@section('contenido')

<h2 class="custom-subtitle text-center my-5">Login</h2>

<!--Inicio del formulario-->
<form method="POST" action="{{ route('login.process') }}" class="custom-forms">
    @csrf

    <!--Correo Electronico del usuario-->
    <div class="form-group mb-4">
        <label for="email" class="custom-forms-label">Correo Electrónico</label>
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
        <label for="password" class="custom-forms-label">Contraseña</label>
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
    <div class="d-flex justify-content-center border-0">
      <button type="submit" class="custom-forms-submit">Iniciar Sesión</button>
    </div>

    <!--Boton de Registrarse-->
    <div class="text-center">
        <p>¿No tienes cuenta?
            <a href="{{ route('user.create.view') }}" class="text-blue">¡Regístrate!</a>
        </p>
    </div>
</form>
@endsection
