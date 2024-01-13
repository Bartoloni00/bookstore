@extends('layouts.admin')
@section('title', 'Admin Dashboard')

@section('contenido')
<!--Titulo de la sección-->
<h1 class="text-center pb-3">Admin Dashboard</h1>

    <!--Contenedor de la sección-->
    <div class="container">
        <div class="row dashboard">

            <!--Contenedor de un item-->
            <div class="col-lg-6 col-md-6 mb-4 ">
                <a class="card text-decoration-none" href="{{ route('admin.books') }}">
                    <div class="card-body">
                        <!--Titulo de un item-->
                        <h2 class="card-title">Libros</h2>
                        <!--Icono de un item-->
                        <i class="fa-solid fa-book fa-2xl"></i>
                    </div>
                </a>
            </div>

            <!--Contenedor de un item-->
            <div class="col-lg-6 col-md-6 mb-4">
                <a class="card text-decoration-none" href="{{ route('admin.blogs') }}">
                    <div class="card-body">
                        <!--Titulo de un item-->
                        <h2 class="card-title">Blogs</h2>
                        <!--Icono de un item-->
                        <i class="fa-solid fa-align-justify fa-2xl"></i>
                    </div>
                </a>
            </div>

            <!--Contenedor de un item-->
            <div class="col-lg-6 col-md-6 mb-4">
                <a class="card text-decoration-none" href="{{ route('admin.authors') }}">
                    <div class="card-body">
                        <!--Titulo de un item-->
                        <h2 class="card-title">Autores</h2>
                        <!--Icono de un item-->
                        <i class="fa-solid fa-person-rays fa-2xl"></i>
                    </div>
                </a>
            </div>

            <!--Contenedor de un item-->
            <div class="col-lg-6 col-md-6 mb-4">
                <a class="card text-decoration-none" href="{{ route('admin.categories') }}">
                    <div class="card-body">
                        <!--Titulo de un item-->
                        <h2 class="card-title">Categorías</h2>
                        <!--Icono de un item-->
                        <i class="fa-solid fa-filter fa-2xl"></i>
                    </div>
                </a>
            </div>

            <!--Contenedor de un item-->
            <div class="col-lg-6 col-md-6 mb-4">
                <a class="card text-decoration-none" href="{{ route('admin.users') }}">
                    <div class="card-body">
                        <!--Titulo de un item-->
                        <h2 class="card-title">Usuarios</h2>
                        <!--Icono de un item-->
                        <i class="fa-solid fa-users-gear fa-2xl"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection()
