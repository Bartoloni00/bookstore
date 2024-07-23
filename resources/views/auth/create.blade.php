@extends('layouts.main')

@section('title', 'Crear usuario')

@section('contenido')

<h2 class="custom-subtitle text-center my-5">Creación de usuario</h2>

<!--Inicio del formulario-->
<form method="POST" action="{{ route('user.create.process') }}" class="custom-forms">
    @csrf

    <!--Nombre del usuario-->
    <div class="form-group mb-4">
        <label for="name" class="custom-forms-label">Nombre de usuario</label>
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
        <label for="email" class="custom-forms-label">Correo Electrónico</label>
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

    <!--Boton de registrarse-->
    <div class="d-flex justify-content-center border-0">
      <button type="submit" class="custom-forms-submit">Crear Usuario</button>
    </div>

    <!--Boton de iniciar sesión-->
    <div class="text-center">
        <p>¿Tienes cuenta? <a href="{{ route('login') }}" class="text-blue">¡Logueate!</a></p>
    </div>
</form>
@endsection
