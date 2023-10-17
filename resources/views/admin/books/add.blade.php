<?php 
use Illuminate\Database\Eloquent\Collections;
use Illuminate\Support\ViewErrorBag;

/** @var ViewErrorBag; $errors*/
/** @var Category|Collections; $categories*/
/** @var Author|Collections; $authors*/
?>

@extends('layouts.admin')
@section('title', 'Añadir libro')
{{-- @csrf es para protegernos de ataques CSRF si no lo tenemos laravel tira un error 419 --}}
@section('contenido')
    <h1>Agregar Nuevo Libro</h1>

    @if ($errors->any)
        <p class="text-danger mb-3">
            Existen errores en el formulario.
        </p>
    @endif

    <form method="POST" action="{{ route('create.book.process')}}" enctype="multipart/form-data">
        @csrf 

        <div class="form-group">
            <label for="title">Título</label>
            <input 
                type="text" 
                class="form-control" 
                id="title" 
                name="title"
                value="{{ old('title')}}"
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
                >{{old('description')}}</textarea>
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
                value="{{ old('price')}}"
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
                >{{old('synopsis')}}</textarea>
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
                value="{{ old('release_date' ?: \Carbon\Carbon::now()->toDateString()) }}"
                @error('release_date')
                    aria-describedby="error-release_date"
                @enderror>
            @error('release_date')
                <p class="text-danger" id="error-release_date">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="categorie_id">Categoría</label>
            <select class="form-control" id="categorie_id" name="categorie_id">
                <option value="">--Selecciona una categoria--</option>
                @foreach ($categories as $category)
                    <option 
                        value="{{$category->id}}"
                        @selected($category->id == old('categorie_id'))
                        >{{ $category->name }}</option>
                @endforeach
            </select>
            @error('categorie_id')
                <p class="text-danger">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="form-group">
            <div>
                <label for="author_id">Autor</label>
            <select class="form-control" id="author_id" name="author_id">
            <option value="">--Selecciona un author--</option>
                @foreach ($authors as $author)
                    <option 
                        value="{{$author->id}}"
                        @selected($author->id == old('author_id'))
                        >{{ $author->name }} {{ $author->lastname }}</option>
                @endforeach
            </select>
            @error('author_id')
                <p class="text-danger">
                    {{$message}}
                </p>
            @enderror
            </div>
            <div>
               <p>
                ¿No encuentras el author que deseas? <a href="{{ route('author.create.form') }}">Agregalo</a>
               </p>
            </div>
        </div>

        {{-- <div class="form-group">
            <label for="image">Imagen</label>
            <input 
                type="file" 
                class="form-control-file" 
                id="image" 
                name="image"
                @error('image')
                    aria-describedby="error-image"
                @enderror>
            @error('image')
                <p class="text-danger" id="error-image">
                    {{$message}}
                </p>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="alt">Texto Alternativo (Alt)</label>
            <input 
                type="text" 
                class="form-control" 
                id="alt" 
                name="alt"
                value="{{ old('alt') }}"
                @error('alt')
                    aria-describedby="error-alt"
                @enderror>
            @error('alt')
                <p class="text-danger" id="error-alt">
                    {{$message}}
                </p>
            @enderror
        </div> --}}

        <button type="submit" class="btn btn-primary">Agregar Libro</button>
    </form>
@endsection()