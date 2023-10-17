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
    <h1>Editar el usuario: {{$user->name}}</h1>
    <div class="row justify-content-center">
        @if ($errors->any())
        <p class="text-danger mb-3">
            Existen errores en el formulario.
        </p>
        @endif
        <div class="col-md-6">
            <form method="POST" action="{{ url('admin/users/' . $user->id . '/edit') }}" class="my-5">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre de usuario</label>
                    <input 
                        id="name" 
                        type="name" 
                        class="form-control"
                        @error('name') is-invalid @enderror name="name" value="{{old('name', $user->name)}}" required autofocus>
                    
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email', $user->email)}}" required >
                    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <span class="form-control">{{$user->role->name}}</span>
                </div>

                <button type="submit" class="btn btn-warning">Editar usuario</button>
            </form>
        </div>
    </div>
</section>
@endsection