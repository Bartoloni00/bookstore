<?php

use App\Models\Book;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Paginator\LengthAwarePaginator;

/** @var Book[]|Collection|LengthAwarePaginator $books */
?>
@extends('layouts.main')

@section('title','Listado de libros')

@section('contenido')

<!--Titulo de la sección-->
<h1 class="text-center py-4">Nuestros libros</h1>

<!--Contenedor de la sección-->
<div class="container">
    <div class="row">
        @foreach ($books as $book)
        <div class="col-lg-4 mb-4 col-md-6 my-5">
            <!--Contenedor del libro-->
            <div class="card position-static">
                <!--Portada del libro-->
                <img src="{{$book->image->name}}" alt="{{$book->image->alt}}" class="card-img-top img-fluid">

                <!--Contenido del libro-->
                <div class="card-body-books p-2">
                    <!--Titulo del libro-->
                    <h5 class="card-title">{{ $book->title }}</h5>

                    <!--Author del libro-->
                    <p>{{ $book->author->name }} {{ $book->author->lastname }}</p>

                    <!--Synopsis del libro-->
                    <p class="card-text">{{ $book->synopsis }}</p>
                </div>
                <div class="card-footer">
                    <!--Boton información adicional del libro-->
                    <a href="{{ url('books',['id' => $book->id]) }}" class="btn-custom d-block text-center w-10 icon-link icon-link-hover text-decoration-none">
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
</div>

{{$books->links()}}
@endsection
