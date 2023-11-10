<?php 
/** @var Blog[]|Collection $blogs */
?>
@extends('layouts.admin')
@section('title', 'Blogs Dashboard')

@section('contenido')
<h1>Dashboard del blog</h1>
<a href="{{ route('blog.create.view') }}" class="btn btn-success mb-3"><i class="bi bi-plus-circle"></i> Agregar nuevo blog</a>

<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Synopsis</th>
                <th scope="col">Categoria</th>
                <th scope="col">Fecha de estreno</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
            <tr>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->synopsis }}</td>
                <td>{{ $blog->category->name }}</td>
                <td>{{ $blog->release_date }}</td>
                <td>
                    <a href="{{ url('/admin/blog/' . $blog->id . '/edit') }}" class="btn btn-warning w-100 block mb-2"><i class="bi bi-pencil"></i> Editar</a>
                    <a href="{{ url('/admin/blog/' . $blog->id . '/delete') }}" class="btn btn-danger w-100 block"><i class="bi bi-trash3"></i> Eliminar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection()