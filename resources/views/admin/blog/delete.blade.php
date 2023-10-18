<?php 
use Illuminate\Support\ViewErrorBag;

/** @var Blog[]|Collection $blog */
/** @var ViewErrorBag; $errors*/
?>

@extends('layouts.admin')
@section('title', 'Eliminar el blog: '. e($blog->title))

@section('contenido')
    <h1 class="mb-3">Deseas eliminar el blog: {{ $blog->title }}</h1>
    
    <div class="form-group mb-3">
        <span>Título</span>
        <p class="form-control bg-body-secondary">{{ old('title', $blog->title) }}</p>
    </div>

    <div class="form-group mb-3">
        <span>Descripción</span>
        <p class="form-control bg-body-secondary" >{{old('description', $blog->description)}}</p>
    </div>

    <div class="form-group mb-3">
        <span>Sinopsis</span>
        <p class="form-control bg-body-secondary" >{{old('synopsis', $blog->synopsis)}}</p>
    </div>

    <div class="form-group mb-3">
        <span>Fecha de Lanzamiento</span>
        <p class="form-control bg-body-secondary">{{ old('release_date', $blog->release_date ?: \Carbon\Carbon::now()->toDateString()) }}</p>
    </div>

    <div class="form-group mb-3">
        <span>Categoría</span>
        <p class="form-control bg-body-secondary">{{ $blog->category->name }}</p>
    </div>
    
    <p class="text-danger text-center">¿Realmente estas seguro de querer eliminar el libro : {{$blog->title}}</p>

    <form method="POST" action="{{url('/admin/blog/'. $blog->id .'/delete')}}">
    @csrf 
        <div class="btn-max-width mx-auto mb-3">
            <button type="submit" class="btn btn-danger mt-2 w-100 block m-auto">Eliminar Blog</button>
        </div>
    </form>
    
@endsection()