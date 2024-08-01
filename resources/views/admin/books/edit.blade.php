<?php 
use Illuminate\Support\ViewErrorBag;

/** @var Book[]|Collection $book */
/** @var ViewErrorBag; $errors*/
/** @var Category|Collections; $categories*/
/** @var Author|Collections; $authors*/
?>

@extends('layouts.admin')
@section('title', 'Editar el libro: '. e($book->title))
{{-- @csrf es para protegernos de ataques CSRF si no lo tenemos laravel tira un error 419 --}}
@section('contenido')
    <h2 class="custom-subtitle text-center my-5">Editar el libro: {{$book->title}}</h2>

    @if ($errors->any())
        <p class="text-danger mb-3 custom-text">
            Existen errores en el formulario.
        </p>
    @endif

    <form method="POST" action="{{ url('/admin/books/' . $book->id . '/edit')}}" enctype="multipart/form-data" class="custom-forms">
        @csrf 

        <div class="form-group mb-3">
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
                <p class="text-danger custom-text" id="error-title">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="form-group mb-3">
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
                <p class="text-danger custom-text" id="error-description">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="form-group mb-3">
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
                <p class="text-danger custom-text" id="error-price">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="form-group mb-3">
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
                <p class="text-danger custom-text" id="error-synopsis">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="release_date">Fecha de lanzamiento</label>
            <input 
                type="date" 
                class="form-control" 
                id="release_date" 
                name="release_date"
                value="{{ old('release_date', $book->release_date ?: \Carbon\Carbon::now()->toDateString()) }}"
                @error('release_date')
                    aria-describedby="error-release_date"
                @enderror>
            @error('release_date')
                <p class="text-danger custom-text" id="error-release_date">
                    {{$message}}
                </p>
            @enderror
        </div>        

        <div class="form-group mb-3">
            <label for="categorie_id">Categoría</label>
            <select class="form-control" id="categorie_id" name="categorie_id">
                <option value="">--Selecciona una categoría--</option>
                @foreach ($categories as $category)
                    <option 
                        value="{{$category->id}}"
                        @selected($category->id == old('categorie_id', $book->category->id))
                        >{{ $category->name }}</option>
                @endforeach
            </select>
            @error('categorie_id')
                <p class="text-danger custom-text">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="author_id">Autor</label>
            <select class="form-control" id="author_id" name="author_id">
                <option value="">--Selecciona un autor--</option>
                @foreach ($authors as $author)
                <option 
                    value="{{$author->id}}"
                    @selected($author->id == old('author_id', $book->author->id))
                    >{{ $author->name }} {{ $author->lastname }}</option>
            @endforeach
        </select>
            @error('author_id')
                <p class="text-danger custom-text">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="form-group mb-3">
            @if ($book->image)
                @if(substr($book->image->name, 0, 8) !== 'https://')
                    <img src="{{ asset('storage/' . $book->image->name)}}" alt="{{$book->image->alt}}" loading="lazy">
                @else
                    <img src="{{$book->image->name}}" alt="{{$book->image->alt}}" loading="lazy">
                @endif
            @endif
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
                <p class="text-danger custom-text" id="error-image">
                    {{$message}}
                </p>
            @enderror
        </div>
        
        <div class="form-group mb-3">
            <label for="alt">Texto alternativo (Alt)</label>
            <input 
                type="text" 
                class="form-control" 
                id="alt" 
                name="alt"
                value="{{ $book->image->alt }}"
                @error('alt')
                    aria-describedby="error-alt"
                @enderror>
            @error('alt')
                <p class="text-danger custom-text" id="error-alt">
                    {{$message}}
                </p>
            @enderror
        </div>

        <div class="btn-max-width mx-auto mb-3">
            <button type="submit" class="btn btn-warning mt-3 w-100 block m-auto">Editar Libro</button>
        </div>
    </form>
@endsection()