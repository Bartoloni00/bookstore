<?php 
use Illuminate\Support\ViewErrorBag;

/** @var Book[]|Collection $book */
/** @var ViewErrorBag; $errors*/
?>

@extends('layouts.admin')

@section('title','Confirmacion para eliminar el libro:' . $book->title)

@section('contenido')
    <h1 class="mb-3">Deseas eliminar el libro: {{ $book->title }}</h1>

    <div class="form-group mb-3">
      <span>Título</span>
      <p class="form-control bg-body-secondary">{{ $book->title }}</p>
    </div>

    <div class="form-group mb-3">
      <span>Descripción</span>
      <p class="form-control bg-body-secondary" >{{ $book->description}}</p>
    </div>
    
    <div class="form-group mb-3">
      <span>Sinopsis</span>
      <p class="form-control bg-body-secondary" >{{ $book->synopsis}}</p>
    </div>

    <div class="form-group mb-3">
      <span>Author</span>
      <p class="form-control bg-body-secondary">{{$book->author->name}}  {{$book->author->lastname}}</p>
    </div>
    
    <div class="form-group mb-3">
      <span>Fecha de Lanzamiento</span>
      <p class="form-control bg-body-secondary">{{ $book->release_date }}</p>
    </div>
    
    <div class="form-group mb-3">
      <span>Categoría</span>
      <p class="form-control bg-body-secondary">{{ $book->category->name }}</p>
    </div>
    
    <p class="text-danger text-center">¿Realmente estas seguro de querer eliminar el libro : {{$book->title}}</p>
    
    <form method="POST" action="{{url('/admin/books/'. $book->id .'/delete')}}">
      @csrf 
      <div class="btn-max-width mx-auto mb-3">
        <button type="submit" class="btn btn-danger mt-2 w-100 block m-auto">Eliminar Libro</button>
      </div>
    </form>
@endsection