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
<h2 class="custom-subtitle text-center my-5">Nuestros libros</h2>

<!--Contenedor de la sección-->
<div class="container" id="tienda">
    <div class="book-container">
        @foreach ($books as $book)
        <div class="book-card">
            <a href="{{ url('books',['id' => $book->id]) }}" class="text-decoration-none d-block mx-auto">
                <div class="custom-card">
                    <!-- <img src="{{$book->image->name}}" alt="{{$book->image->alt}}" class="custom-card-img img-fluid"> -->
                    <div class="custom-card-img img-fluid">
                        @if ($book->image)
                                <img src="{{ asset('storage/' . $book->image->name)}}" class="img-fluid book-image" alt="{{$book->image->alt}}" loading="lazy">
                        @else
                            <img src="{{ asset('storage/bookDefault.jpg')}}" class="img-fluid book-image" alt="{{$book->title}}" loading="lazy">
                        @endif
                    </div>
                    <div class="card-body-books p-2">
                        <h3 class="custom-subtitle-medium fix-color">{{ $book->title }}</h3>
                        <p class="custom-text fix-color">{{ $book->author->name }} {{ $book->author->lastname }}</p>
                        <p class="custom-text fix-color">{{ $book->synopsis }}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

{{$books->links()}}
@endsection
