<?php 
use Illuminate\Database\Eloquent\Collections;
use Illuminate\Support\ViewErrorBag;

/** @var ViewErrorBag; $errors*/
?>

@extends('layouts.admin')
@section('title', 'Añadir Author')
{{-- @csrf es para protegernos de ataques CSRF si no lo tenemos laravel tira un error 419 --}}
@section('contenido')
    <h1>Agregar Nuevo author</h1>

    @if ($errors->any())
        <p class="text-danger mb-3">
            Existen errores en el formulario.
        </p>
    @endif

    <form method="POST" action="{{ route('author.create.process')}}">
        @csrf 

        <div class="form-group mb-3">
            <label for="name">Nombre</label>
            <input 
                type="text" 
                class="form-control" 
                id="name" 
                name="name"
                value="{{ old('name')}}"
                @error('name')
                    aria-describedby="error-name"
                @enderror>
            @error('name')
                <p class="text-danger" id="error-name">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="lastname">Apellido</label>
            <input 
                type="text" 
                class="form-control" 
                id="lastname" 
                name="lastname"
                value="{{ old('lastname')}}"
                @error('lastname')
                    aria-describedby="error-lastname"
                @enderror>
            @error('lastname')
                <p class="text-danger" id="error-lastname">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="btn-max-width mx-auto mb-3">
            <button type="submit" class="btn btn-success mt-3 w-100 block m-auto">Agregar Author</button>
        </div>
    </form>
@endsection()