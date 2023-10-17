<?php 
use Illuminate\Database\Eloquent\Collections;
use Illuminate\Support\ViewErrorBag;

/** @var ViewErrorBag; $errors*/
/** @var Author; $author*/
?>

@extends('layouts.admin')
@section('title', 'Añadir Author')
{{-- @csrf es para protegernos de ataques CSRF si no lo tenemos laravel tira un error 419 --}}
@section('contenido')
    <h1>Editar al author: {{$author->name}} {{$author->lastname}}</h1>

    @if ($errors->any())
        <p class="text-danger mb-3">
            Existen errores en el formulario.
        </p>
    @endif

    <form method="POST" action="{{ url('/admin/author/'. $author->id .'/edit')}}">
        @csrf 

        <div class="form-group">
            <label for="name">Nombre</label>
            <input 
                type="text" 
                class="form-control" 
                id="name" 
                name="name"
                value="{{old('name', $author->name)}}"
                @error('name')
                    aria-describedby="error-name"
                @enderror>
            @error('name')
                <p class="text-danger" id="error-name">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="lastname">Apellido</label>
            <input 
                type="text" 
                class="form-control" 
                id="lastname" 
                name="lastname"
                value="{{old('lastname', $author->lastname)}}"
                @error('lastname')
                    aria-describedby="error-lastname"
                @enderror>
            @error('lastname')
                <p class="text-danger" id="error-lastname">
                    {{$message}}
                </p>
            @enderror
        </div>

        <button type="submit" class="btn btn-warning">Editar al Author: <b>{{$author->name}} {{$author->lastname}}</b></button>
    </form>
@endsection()