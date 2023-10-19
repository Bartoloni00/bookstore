<?php 
/** @var Book[]|Collection $books */
?>
@extends('layouts.main')

@section('title','Listado de libros')

@section('contenido')

<h1>Listado de libros</h1>
    <div class="row mb-2">
        @foreach ($books as $book)
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="min-height: 250px;">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary-emphasis">#{{ $book->id }}</strong>
                    <h3 class="mb-0">{{ $book->title }}</h3>
                    <div class="mb-1 text-body-secondary">{{ $book->author->name }} {{ $book->author->lastname }}</div>
                    <p class="card-text mb-auto">{{ $book->synopsis }}</p>
                    <a href="{{ url('books',['id' => $book->id]) }}" class="icon-link gap-1 icon-link-hover stretched-link">
                        Ver mas
                        <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
  </div>
@endsection
