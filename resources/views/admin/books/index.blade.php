<?php 
/** @var Book[]|Collection $books */
?>

@extends('layouts.admin')
@section('title', 'Books Dashboard')

@section('contenido')

<div class="custom-table">
    <div class="d-flex justify-content-between align-items-center my-5">
        <h2 class="custom-subtitle my-5">Dashboard de libros</h2>
        <a href="{{ route('book.create.view') }}" class="btn btn-success">
            <i class="fa fa-plus-circle" aria-hidden="true"></i>
            <span>Agregar nuevo libro</span>
        </a>
    </div>
    <table class="table custom-table-striped">
        <thead>
            <tr>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Categoría</th>
                <th scope="col">Fecha de estreno</th>
                <th scope="col">Precio del libro</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author->name }} {{ $book->author->lastname }}</td>
                <td>{{ $book->category->name }}</td>
                <td>{{ $book->release_date }}</td>
                <td>$ {{ $book->price }}</td>
                <td class="action-buttons">
                    <a href="{{ url('/admin/books/' . $book->id . '/edit') }}" class="btn btn-primary block mb-2">
                        <i class="fa-solid fa-pencil"></i>
                        <span>Editar</span>
                    </a>
                    <a href="{{ url('/admin/books/' . $book->id . '/delete') }}" class="btn btn-danger block">
                        <i class="fa-solid fa-trash"></i>
                        <span>Eliminar</span>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{$books->links()}}
@endsection()