<?php 
/** @var Book[]|Collection $movies */
?>
@extends('layouts.main')

@section('title','Listado de libros')

@section('contenido')

<h1>Listado de libros</h1>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Fecha de estreno</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // esta es la sintaxis de blade para el foreach
        // podemos utilizar <?=?< paramostrar los elementos
        // pero tambien podemos mostrarlos con {!! $book->book_id !!}
        // esta nos sirve cuando queremos utilizar etiquetas html...
        // en todos los otros casos por temas de seguridad conviene:
        //{{ $book->book_id }}
        ?>
        <a href=""></a>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->book_id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->release_date }}</td>
            <td>$ {{ $book->price }}</td>
            <td>
                <a href="{{ url('/books/' . $book->book_id) }}" class="btn btn-primary">ver</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
