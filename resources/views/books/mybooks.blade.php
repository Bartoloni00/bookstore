@extends('layouts.main')

@section('title',' Mis libros')

@section('contenido')
<h1 class="text-center">Carrito de compras</h1>
<x-books-list :user="$user"/>
@endsection