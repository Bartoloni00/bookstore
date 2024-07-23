<?php 
use Illuminate\Database\Eloquent\Collections;
use Illuminate\Support\ViewErrorBag;

/** @var ViewErrorBag; $errors*/
/** @var Author; $author*/
?>

@extends('layouts.admin')

@section('title','Editar usuario')

@section('contenido')

<section class="container">
    <h2 class="custom-title text-center my-5">Editar el usuario: {{$user->name}}</h2>
    <div class="row justify-content-center">
        @if ($errors->any())
        <p class="text-danger mb-3 custom-text">
            Existen errores en el formulario.
        </p>
        @endif
        <div class="col-md-6">
            <form method="POST" action="{{ url('admin/users/' . $user->id . '/edit') }}" class="custom-forms">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Nombre de usuario</label>
                    <input 
                        id="name" 
                        type="text" 
                        class="form-control"
                        @error('name') is-invalid @enderror name="name" value="{{old('name', $user->name)}}" required autofocus>
                    
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="email">Correo Electrónico</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email', $user->email)}}" required >
                    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <span>Rol:</span>
                    <p class="form-control custom-text">{{$user->role->name}}</p>
                </div>

                <div class="btn-max-width mx-auto mb-3">
                    <button type="submit" class="btn btn-primary mt-3 w-100 block m-auto">Editar al usuario</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection