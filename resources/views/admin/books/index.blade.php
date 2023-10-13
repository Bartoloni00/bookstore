@extends('layouts.admin')
@section('title', 'Books Dashboard')

@section('contenido')
<h1>Dashboard de libros</h1>
<a href="{{ url('/admin/books/add') }}" class="btn btn-success">Agregar nuevo libro</a>
@endsection()