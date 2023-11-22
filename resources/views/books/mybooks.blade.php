@extends('layouts.main')

@section('title',' Mis libros')

@section('contenido')
<h1>Mis libros:</h1>
<x-books-list :user="$user"/>
@endsection