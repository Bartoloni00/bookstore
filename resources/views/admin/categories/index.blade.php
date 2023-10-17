<?php 
use Illuminate\Database\Eloquent\Collections;
use Illuminate\Support\ViewErrorBag;

/** @var ViewErrorBag; $errors*/
/** @var Category[]|Collection $categories */

?>

@extends('layouts.admin')
@section('title', 'Autores')
@section('contenido')
<h1 class="text-center">Categorias cargadas</h1>
<a href="{{ route('category.create.form') }}" class="btn btn-success">Agregar categoria</a>

<div class="card-group">
    @foreach ($categories as $category)
        <div class="card">
            <div class="card-body">
            <span class="text-center">{{$category->name}}</span>
            </div>
            <div class="card-footer d-flex">
                <a href="{{ url('/admin/category/'. $category->id .'/edit') }}" class="btn btn-warning">Editar</a>
                <a href="{{ url('/admin/category/'. $category->id .'/delete') }}" class="btn btn-danger">Eliminar</a>
              </div>
        </div>
    @endforeach
  </div>   
@endsection