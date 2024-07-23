<?php 
use Illuminate\Database\Eloquent\Collections;
use Illuminate\Support\ViewErrorBag;

/** @var ViewErrorBag; $errors*/
/** @var Category[]|Collection $categories */

?>

@extends('layouts.admin')
@section('title', 'Autores')
@section('contenido')

  <div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
      <h2 class="custom-subtitle my-5">Categorias cargadas</h2>
      <a href="{{ route('category.create.form') }}" class="btn btn-success">
          <i class="bi bi-plus-circle"></i>
          <span>Agregar categoria</span>
      </a>
    </div>
    <div class="row">
    @foreach ($categories as $category)
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="card-body">
              <p class="custom-text">Nombre: {{ $category->name }}</p>
            </div>
            <div class="card-footer d-flex">
              <a href="{{ url('/admin/category/'. $category->id .'/edit') }}" class="btn btn-primary w-100 mx-2"><i class="bi bi-pencil"></i> Editar</a>
              <a href="{{ url('/admin/category/'. $category->id .'/delete') }}" class="btn btn-danger w-100 mx-2"><i class="bi bi-trash3"></i> Eliminar</a>
            </div>
          </div>
        </div>
    @endforeach
    </div>
  </div>
  {{ $categories->links()}}
@endsection