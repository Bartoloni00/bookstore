@extends('layouts.admin')
@section('title', 'Admin Dashboard')

@section('contenido')
<h1>Admin Dashboard</h1>
    <div class="container">
        <div class="row dashboard">
            <div class="col-lg-4 col-md-6 mb-4">
                <a class="card" href="{{ route('admin.books') }}">
                    <div class="card-body">
                        <h2 class="card-title">Libros</h2>
                        <i class="fa-solid fa-book fa-2xl"></i>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <a class="card" href="{{ route('admin.blogs') }}">
                    <div class="card-body">
                        <h2 class="card-title">Blogs</h2>
                        <i class="fa-solid fa-align-justify fa-2xl"></i>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <a class="card" href="{{ route('admin.authors') }}">
                    <div class="card-body">
                        <h2 class="card-title">Autores</h2>
                        <i class="fa-solid fa-person-rays fa-2xl"></i>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <a class="card" href="{{ route('admin.categories') }}">
                    <div class="card-body">
                        <h2 class="card-title">Categorías</h2>
                        <i class="fa-solid fa-filter fa-2xl"></i>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <a class="card" href="{{ route('admin.users') }}">
                    <div class="card-body">
                        <h2 class="card-title">Usuarios</h2>
                        <i class="fa-solid fa-users-gear fa-2xl"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection()