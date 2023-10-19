@extends('layouts.main')

@section('title', $blogs->title)

@section('contenido')
<h1 class="mb-3">Información del Blog:</h1>
<div class="card text-center">
  <div class="card-header">
    Release date: {{ $blogs->release_date }} | Category: {{ $blogs-> categorie_id}} 
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$blogs->title}}</h5>
    <p class="card-text">{{ $blogs->description }}</p>
  </div>
  <div class="card-footer text-body-secondary">
   Author: {{$blogs->user_id}}
  </div>
</div>
@endsection

