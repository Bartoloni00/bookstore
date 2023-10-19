@extends('layouts.main')

@section('title', $book->title)

@section('contenido')
<h1 class="mb-3">Detalles</h1>
<div class="card m-auto mt-3 mb-4" style="max-width: 800px;">
  <div class="row g-0">
    <div class="col-md-4">
      {{-- <img src="{{ $images->name }}" class="img-fluid rounded-start" alt="{{ $images->alt }}" loading="lazy"> --}}
    @if ($book->image)
    <img src="{{ asset('storage/' . $book->image->name)}}" alt="{{$book->image->alt}}" loading="lazy">
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
@endsection
