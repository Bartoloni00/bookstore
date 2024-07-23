<?php 
use Illuminate\Database\Eloquent\Collections;
use Illuminate\Support\ViewErrorBag;

/** @var ViewErrorBag; $errors*/
?>

@extends('layouts.admin')
@section('title', 'Añadir categoria')
{{-- @csrf es para protegernos de ataques CSRF si no lo tenemos laravel tira un error 419 --}}
@section('contenido')
    <h2 class="custom-subtitle text-center my-5">Editando la categoria: <b>{{$category->name}}</b></h2>

    @if ($errors->any())
        <p class="text-danger mb-3 custom-text">
            Existen errores en el formulario.
        </p>
    @endif

    <form method="POST" action="{{ url('/admin/category/'. $category->id .'/edit')}}" class="custom-forms">
        @csrf 

        <div class="form-group mb-3">
            <label for="name">Nombre de la categoria</label>
            <input 
                type="text" 
                class="form-control" 
                id="name" 
                name="name"
                value="{{ old('name', $category->name)}}"
                @error('name')
                    aria-describedby="error-name"
                @enderror>
            @error('name')
                <p class="text-danger custom-text" id="error-name">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="mx-auto mb-3">
            <button type="submit" class="btn btn-primary mt-3 w-100 block m-auto">Editar al categoria</button>
        </div>
    </form>
@endsection()