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
<a href="{{ route('category.create.form') }}" class="btn btn-success mb-4"><i class="bi bi-plus-circle"></i> Agregar categoria</a>

  <div class="container">
    <div class="row">
    @foreach ($categories as $category)
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Nombre: {{ $category->name }}</p>
            </div>
            <div class="card-footer d-flex">
              <a href="{{ url('/admin/category/'. $category->id .'/edit') }}" class="btn btn-warning w-100 mx-2"><i class="bi bi-pencil"></i> Editar</a>
              <a href="{{ url('/admin/category/'. $category->id .'/delete') }}" class="btn btn-danger w-100 mx-2"><i class="bi bi-trash3"></i> Eliminar</a>
            </div>
          </div>
        </div>
    @endforeach
    </div>
  </div>
  {{ $categories->links()}}
@endsection