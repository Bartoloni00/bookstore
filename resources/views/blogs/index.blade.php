<?php

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Paginator\LengthAwarePaginator;

/** @var Blog[]|Collection|LengthAwarePaginator $blogs */
?>

@extends('layouts.main')

@section('title','Nuestros blogs')

@section('contenido')

<!--Titulo de la sección-->
<h1 class="text-center py-4">Nuestros blogs</h1>

<!--Contenedor de la sección-->
<div class="row mb-2">
    @foreach ($blogs as $blog)
    <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250">
            <div class="col p-4 d-flex flex-column position-static">
                <!--ID del Blog-->
                <strong class="d-inline-block mb-2 text-primary-emphasis">#{{ $blog->id }}</strong>

                <!--Portada del Blog-->
                @if ($blog->image)
                    @if(substr($blog->image->name, 0, 8) !== 'https://')
                        <img src="{{ asset('storage/' . $blog->image->name)}}" alt="{{$blog->image->alt}}" loading="lazy">
                    @else
                        <img src="{{$blog->image->name}}" alt="{{$blog->image->alt}}" loading="lazy">
                    @endif
                @else
                    <img src="{{ asset('storage/' .'blogDefault.jpg')}}" alt="{{$blog->title}}" loading="lazy">
                @endif

                <!--Titulo del Blog-->
                <h2 class="mb-0">{{ $blog->title }}</h2>

                <!--Fecha de publicación del Blog-->
                <p class="mb-1 text-body-secondary">{{ $blog->release_date }}</p>

                <!--Synopsis del Blog-->
                <p class="card-text mb-auto">{{ $blog->synopsis }}</p>

                <!--Boton información adicional del blog-->
                <a href="{{ url('/blogs/' . $blog->id) }}" class="icon-link gap-1 icon-link-hover">
                    Ver mas
                    <svg class="bi">
                        <use xlink:href="#chevron-right"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>

{{$blogs->links()}}
@endsection
