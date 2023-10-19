<?php 
use Illuminate\Support\ViewErrorBag;

/** @var Blog[]|Collection $movies */
/** @var ViewErrorBag; $errors*/
/** @var Category|Collections; $categories*/
?>

@extends('layouts.admin')
@section('title', 'Editar el Blog: '. e($blog->title))
{{-- @csrf es para protegernos de ataques CSRF si no lo tenemos laravel tira un error 419 --}}
@section('contenido')
    <h1>Editar Categoria: {{$blog->title}}</h1>

    @if ($errors->any())
        <p class="text-danger mb-3">
            Existen errores en el formulario.
        </p>
    @endif

    <form method="POST" action="{{ url('/admin/blog/' . $blog->id . '/edit')}}">
        @csrf 

        <div class="form-group mb-3">
            <label for="title">Título</label>
            <input 
                type="text" 
                class="form-control" 
                id="title" 
                name="title"
                value="{{ old('title', $blog->title)}}"
                @error('title')
                    aria-describedby="error-title"
                @enderror>
            @error('title')
                <p class="text-danger" id="error-title">
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
                >{{old('description', $blog->description)}}</textarea>
            @error('description')
                <p class="text-danger" id="error-description">
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
                >{{old('synopsis', $blog->synopsis)}}</textarea>
            @error('synopsis')
                <p class="text-danger" id="error-synopsis">
                    {{$message}}
                </p>
            @enderror
        </div>       

        <div class="form-group mb-3">
            <div>
                <label for="categorie_id">Categoría</label>
                <select class="form-control" id="categorie_id" name="categorie_id">
                    <option value="">--Selecciona una categoria--</option>
                    @foreach ($categories as $category)
                        <option 
                            value="{{$category->id}}"
                            @selected($category->id == old('categorie_id', $blog->category->id))
                            >{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('categorie_id')
                    <p class="text-danger">
                        {{$message}}
                    </p>
                @enderror
            </div>
            <div class="mt-2">
                <p>
                 ¿No encuentras la categoria que deseas? <a href="{{ route('category.create.form') }}">Agregala</a>
                </p>
             </div>
        </div>

        {{-- <div class="form-group mb-3">
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
        
        <div class="form-group mb-3">
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

        <div class="btn-max-width mx-auto mb-3">
            <button type="submit" class="btn btn-warning mt-3 w-100 block m-auto">Editar Blog</button>
        </div>
    </form>
@endsection()