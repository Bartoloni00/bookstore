<?php 
use Illuminate\Support\ViewErrorBag;

/** @var Book[]|Collection $movies */
/* @var ViewErrorBag; $errors*/
?>

@extends('layouts.admin')
@section('title', 'Editar el libro: '. e($book->title))
{{-- @csrf es para protegernos de ataques CSRF si no lo tenemos laravel tira un error 419 --}}
@section('contenido')
    <h1>Agregar Nuevo Libro</h1>

    @if ($errors->any)
        <p class="text-danger mb-3">
            Existen errores en el formulario.
        </p>
    @endif

    <form method="POST" action="{{ url('/admin/books/' . $book->id . '/edit')}}">
        @csrf 

        <div class="form-group">
            <label for="title">Título</label>
            <input 
                type="text" 
                class="form-control" 
                id="title" 
                name="title"
                value="{{ old('title', $book->title)}}"
                @error('title')
                    aria-describedby="error-title"
                @enderror>
            @error('title')
                <p class="text-danger" id="error-title">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea 
                class="form-control" 
                id="description" 
                name="description" 
                rows="5"
                @error('description')
                  aria-describedby="error-description"
                @enderror
                >{{old('description', $book->description)}}</textarea>
            @error('description')
                <p class="text-danger" id="error-description">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="price">Precio</label>
            <input 
                type="number" 
                class="form-control" 
                id="price" 
                name="price"
                value="{{ old('price', $book->price)}}"
                @error('price')
                    aria-describedby="error-price"
                @enderror>
            @error('price')
                <p class="text-danger" id="error-price">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="synopsis">Sinopsis</label>
            <textarea 
                class="form-control" 
                id="synopsis" 
                name="synopsis" 
                rows="3"
                @error('synopsis')
                    aria-describedby="error-synopsis"
                @enderror
                >{{old('synopsis', $book->synopsis)}}</textarea>
            @error('synopsis')
                <p class="text-danger" id="error-synopsis">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="release_date">Fecha de Lanzamiento</label>
            <input 
                type="date" 
                class="form-control" 
                id="release_date" 
                name="release_date"
                value="{{ old('date', $book->date)}}"
                @error('date')
                    aria-describedby="error-date"
                @enderror>
            @error('date')
                <p class="text-danger" id="error-date">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="categorie_id">Categoría</label>
            <select class="form-control" id="categorie_id" name="categorie_id">
                <option value="1">Ficción</option>
                <option value="2">Fantasía</option>
                <!-- Agrega más opciones según tus necesidades -->
            </select>
            @error('categorie_id')
                <p class="text-danger">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="author_id">Autor</label>
            <select class="form-control" id="author_id" name="author_id">
                <option value="1">J.R.R. Tolkien</option>
                <option value="2">Otro Autor</option>
                <!-- Agrega más opciones según tus necesidades -->
            </select>
            @error('author_id')
                <p class="text-danger">
                    {{$message}}
                </p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Agregar Libro</button>
    </form>
@endsection()