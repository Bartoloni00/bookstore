<?php 
use Illuminate\Support\ViewErrorBag;

/** @var Book[]|Collection $book */
/** @var ViewErrorBag; $errors*/
?>

@extends('layouts.admin')

@section('title','Confirmacion para eliminar el libro:' . $book->title)

@section('contenido')
    <h2 class="custom-subtitle text-center my-5">Deseas eliminar el libro: {{ $book->title }}</h2>

    <x-book-details :book="$book" :buy="false"/>
    
    <p class="text-danger text-center custom-text">¿Realmente estas seguro de querer eliminar el libro : {{$book->title}}</p>
    
    <form method="POST" action="{{url('/admin/books/'. $book->id .'/delete')}}" class="custom-forms">
      @csrf 
      <div class="mx-auto mb-3">
        <button type="submit" class="btn btn-danger mt-2 w-100 block m-auto">Eliminar Libro</button>
      </div>
    </form>
@endsection