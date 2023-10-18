@extends('layouts.main')

@section('title','Login')

@section('contenido')

<section class="container">
    <h1>Login</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="{{ route('login.process') }}" class="my-5">
                @csrf

                <div class="form-group">
                    <label for="email">Correo Electrónico'</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Iniciar session</button>
                    <p>¿No tienes cuenta? <a href="{{ route('user.create.view') }}" class="text-danger">!! Registrate ¡¡</a></p>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
