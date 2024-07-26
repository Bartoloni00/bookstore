<?php 
/** @var Blog[]|Collection $blogs */
?>
@extends('layouts.admin')
@section('title', 'Blogs Dashboard')

@section('contenido')

<div class="custom-table">
    <div class="d-flex justify-content-between align-items-center my-5">
        <h2 class="custom-subtitle my-5">Dashboard del blog</h2>
        <a href="{{ route('blog.create.view') }}" class="btn btn-success">
            <i class="fa fa-plus-circle" aria-hidden="true"></i>
            <span>Agregar nuevo blog</span>
        </a>
    </div>
    <table class="table custom-table-striped">
        <thead>
            <tr>
                <th scope="col">Título</th>
                <th scope="col">Categoría</th>
                <th scope="col">Fecha de estreno</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
            <tr>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->category->name }}</td>
                <td>{{ $blog->release_date }}</td>
                <td class="action-buttons">
                    <a href="{{ url('/admin/blog/' . $blog->id . '/edit') }}" class="btn btn-primary block mb-2">
                        <i class="fa-solid fa-pencil"></i>
                        <span>Editar</span>
                    </a>
                    <a href="{{ url('/admin/blog/' . $blog->id . '/delete') }}" class="btn btn-danger block">
                        <i class="fa-solid fa-trash"></i>
                        <span>Eliminar</span>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{$blogs->links()}}
@endsection()