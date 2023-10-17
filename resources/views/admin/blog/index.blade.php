<?php 
/** @var Blog[]|Collection $blogs */
?>
@extends('layouts.admin')
@section('title', 'Blogs Dashboard')

@section('contenido')
<h1>Dashboard del blog</h1>
<a href="{{ route('create.blog.view') }}" class="btn btn-success">Agregar nuevo blog</a>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Description</th>
            <th>Synopsis</th>
            <th>Fecha de estreno</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($blogs as $blog)
        <tr>
            <td>{{ $blog->id }}</td>
            <td>{{ $blog->description }}</td>
            <td>{{ $blog->synopsis }}</td>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->release_date }}</td>
            <td>
                <a href="{{ url('/admin/blogs/' . $blog->id . '/edit') }}" class="btn btn-warning">Editar</a>
                <a href="{{ url('/admin/blogs/' . $blog->id . '/delete') }}" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection()