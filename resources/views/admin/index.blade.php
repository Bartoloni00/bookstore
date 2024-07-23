@extends('layouts.admin')
@section('title', 'Admin Dashboard')

@section('contenido')
<!--Titulo de la sección-->
<h2 class="custom-subtitle text-center my-5">Admin Dashboard</h2>

    <!--Contenedor de la sección-->
    <div class="container">
        <div class="row dashboard">

            <!--Contenedor de un item-->
            <div class="col-lg-6 col-md-6 mb-4 ">
                <a class="card position-static text-decoration-none" href="{{ route('admin.books') }}">
                    <div class="card-body">
                        <h3 class="custom-subtitle-medium">Libros</h3>
                        <i class="fa-solid fa-book fa-2xl"></i>
                    </div>
                </a>
            </div>

            <!--Contenedor de un item-->
            <div class="col-lg-6 col-md-6 mb-4">
                <a class="card position-static text-decoration-none" href="{{ route('admin.blogs') }}">
                    <div class="card-body">
                        <h3 class="custom-subtitle-medium">Blogs</h3>
                        <i class="fa-solid fa-align-justify fa-2xl"></i>
                    </div>
                </a>
            </div>

            <!--Contenedor de un item-->
            <div class="col-lg-6 col-md-6 mb-4">
                <a class="card position-static text-decoration-none" href="{{ route('admin.authors') }}">
                    <div class="card-body">
                        <h3 class="custom-subtitle-medium">Autores</h3>
                        <!--Icono de un item-->
                        <i class="fa-solid fa-person-rays fa-2xl"></i>
                    </div>
                </a>
            </div>

            <!--Contenedor de un item-->
            <div class="col-lg-6 col-md-6 mb-4">
                <a class="card position-static text-decoration-none" href="{{ route('admin.categories') }}">
                    <div class="card-body">
                        <h3 class="custom-subtitle-medium">Categorías</h3>
                        <i class="fa-solid fa-filter fa-2xl"></i>
                    </div>
                </a>
            </div>

            <!--Contenedor de un item-->
            <div class="col-lg-6 col-md-6 mb-4">
                <a class="card position-static text-decoration-none" href="{{ route('admin.users') }}">
                    <div class="card-body">
                        <h3 class="custom-subtitle-medium">Usuarios</h3>
                        <i class="fa-solid fa-users-gear fa-2xl"></i>
                    </div>
                </a>
            </div>

            <div class="col-lg-6 col-md-6 mb-4">
                <a class="card position-static text-decoration-none" href="{{ route('admin.purchases.index') }}">
                    <div class="card-body">
                        <h3 class="custom-subtitle-medium">ventas</h3>
                        <i class="fa-solid fa-users-gear fa-2xl"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection()
