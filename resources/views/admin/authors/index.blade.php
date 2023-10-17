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
<a href="{{ route('author.create.form') }}" class="btn btn-success">Agregar nuevo author</a>

<div class="card-group">
    @foreach ($authors as $author)
        <div class="card">
            <div class="card-body">
            <span class="text-center">{{$author->name}} {{$author->lastname}}</span>
            </div>
            <div class="card-footer d-flex">
                <a href="{{ url('/admin/author/'. $author->id .'/edit') }}" class="btn btn-warning">Editar</a>
                <a href="{{ url('/admin/author/'. $author->id .'/delete') }}" class="btn btn-danger">Eliminar</a>
              </div>
        </div>
    @endforeach
  </div>   
@endsection