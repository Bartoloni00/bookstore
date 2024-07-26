<?php 
use Illuminate\Database\Eloquent\Collections;
use Illuminate\Support\ViewErrorBag;

/** @var ViewErrorBag; $errors*/
/** @var Author[]|Collection $authors */

?>

@extends('layouts.admin')
@section('title', 'Autores')
@section('contenido')


<div class="container">
  <div class="d-flex justify-content-between align-items-center my-5">
    <h2 class="text-center custom-subtitle my-5">Autores registrados</h2>
    <a href="{{ route('author.create.form') }}" class="btn btn-success">
      <i class="fa fa-plus-circle" aria-hidden="true"></i>
      <span>Agregar un nuevo autor</span>
    </a>
  </div>
  <div class="row">
    @foreach ($authors as $author)
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card" style="min-height: 180px;">
        <div class="card-body">
          <h3 class="custom-subtitle">{{$author->name}} {{$author->lastname}}</h3>
        </div>
        <div class="card-footer d-flex">
          <a href="{{ url('/admin/author/' . $author->id . '/edit') }}" class="btn btn-primary w-100 mx-2">
            <i class="bi bi-pencil"></i>
            <span>Editar</span>
          </a>
          <a href="{{ url('/admin/author/' . $author->id . '/delete') }}" class="btn btn-danger w-100 mx-2">
            <i class="bi bi-trash3"></i>
            <span>Eliminar</span>
          </a>
        </div>
      </div>
    </div>
  @endforeach
  </div>
</div>
{{$authors->links()}}
@endsection