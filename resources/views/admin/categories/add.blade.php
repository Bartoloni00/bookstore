<?php 
use Illuminate\Database\Eloquent\Collections;
use Illuminate\Support\ViewErrorBag;

/** @var ViewErrorBag; $errors*/
?>

@extends('layouts.admin')
@section('title', 'Añadir categoria')
{{-- @csrf es para protegernos de ataques CSRF si no lo tenemos laravel tira un error 419 --}}
@section('contenido')
    <h1>Agregar Nueva categoria</h1>

    @if ($errors->any())
        <p class="text-danger mb-3">
            Existen errores en el formulario.
        </p>
    @endif

    <form method="POST" action="{{ route('category.create.process')}}">
        @csrf 

        <div class="form-group">
            <label for="name">Nombre de la categoria</label>
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

        <button type="submit" class="btn btn-primary">Agregar nueva categoria</button>
    </form>
@endsection()