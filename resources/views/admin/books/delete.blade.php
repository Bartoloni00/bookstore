<?php 
use Illuminate\Support\ViewErrorBag;

/** @var Book[]|Collection $book */
/** @var ViewErrorBag; $errors*/
?>

@extends('layouts.admin')

@section('title','Confirmacion para eliminar el libro:' . $book->title)

@section('contenido')
    <h1 class="mb-3">Deseas eliminar el libro: {{ $book->title }}</h1>

    <div class="card m-auto mt-3 mb-4" style="max-width: 800px;">
  <div class="row g-0">
    <div class="col-md-4">
    @if ($book->image)
      <img src="{{ asset('storage/' . $book->image->name)}}" alt="{{$book->image->alt}}" loading="lazy">
    @else
    <img src="{{ asset('storage/' .'bookDefault.jpg')}}" alt="{{$book->title}}" loading="lazy">
    @endif
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h2 class="card-title">{{$book->title}}</h2>
        <p class="card-text">{{$book->description}}</p>
        <p class="card-text"><b>Author:</b><small class="text-body-secondary"> {{$book->author->name}}  {{$book->author->lastname}}</small></p>
        <p class="card-text"><b>Release date:</b><small class="text-body-secondary"> {{$book->release_date}}</small></p>
        <p class="card-text"><b>Price:</b><small class="text-body-secondary"> ${{$book->price}}</small></p>
        <p class="card-text"><b>Category:</b><small class="text-body-secondary"> {{$book->category->name}}</small></p>
      </div>
    </div>
  </div>
</div>
    
    <p class="text-danger text-center">¿Realmente estas seguro de querer eliminar el libro : {{$book->title}}</p>
    
    <form method="POST" action="{{url('/admin/books/'. $book->id .'/delete')}}">
      @csrf 
      <div class="btn-max-width mx-auto mb-3">
        <button type="submit" class="btn btn-danger mt-2 w-100 block m-auto">Eliminar Libro</button>
      </div>
    </form>
@endsection