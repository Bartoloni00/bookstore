@extends('layouts.admin')
@section('title', 'Admin Dashboard')

@section('contenido')
<h1>Admin Dashboard</h1>
<div class="card-group">
    <a class="card" href="{{ route('admin.books') }}">
      <div class="card-body">
        <h2 class="card-title">Libros</h2>
      </div>
    </a>
    <a class="card" href="{{ route('admin.blogs') }}">
        <div class="card-body">
          <h2 class="card-title">Blogs</h2>
        </div>
    </a>
    <a class="card" href="{{ route('admin.authors') }}">
        <div class="card-body">
          <h2 class="card-title">Autores</h2>
        </div>
    </a>
    <a class="card" href="{{ route('admin.categories') }}">
        <div class="card-body">
          <h2 class="card-title">Categorias</h2>
        </div>
    </a>
    <a class="card" href="{{ route('admin.users') }}">
        <div class="card-body">
          <h2 class="card-title">Usuarios</h2>
        </div>
    </a>
  </div> 
@endsection()