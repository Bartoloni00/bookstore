<?php 
use Illuminate\Database\Eloquent\Collections;
use Illuminate\Support\ViewErrorBag;

/** @var ViewErrorBag; $errors*/
/** @var Author[]|Collection $authors */

?>

@extends('layouts.admin')
@section('title', 'Autores')
@section('contenido')
<h1 class="text-center">Authores registrados</h1>
<a href="{{ route('author.create.form') }}" class="btn btn-success mb-3"><i class="bi bi-plus-circle"></i> Agregar nuevo author</a>

  <div class="container">
    <div class="row">
    @foreach ($authors as $author)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card" style="min-height: 180px;">
              <div class="card-body">
                  <h2 class="card-title">{{$author->name}} {{$author->lastname}}</h2>
                </div>
                <div class="card-footer d-flex">
                  <a href="{{ url('/admin/author/'. $author->id .'/edit') }}" class="btn btn-primary w-100 mx-2"><i class="bi bi-pencil"></i> Editar</a>
                  <a href="{{ url('/admin/author/'. $author->id .'/delete') }}" class="btn btn-danger w-100 mx-2"><i class="bi bi-trash3"></i> Eliminar</a>
                </div>
              </div>
        </div>
    @endforeach
    </div>
  </div>
{{$authors->links()}}
@endsection