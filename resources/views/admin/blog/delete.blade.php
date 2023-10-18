<?php 
use Illuminate\Support\ViewErrorBag;

/** @var Blog[]|Collection $blog */
/** @var ViewErrorBag; $errors*/
?>

@extends('layouts.admin')
@section('title', 'Eliminar el blog: '. e($blog->title))

@section('contenido')
    <section>
        <h1 class="mb-3">{{ $blog->title }}</h1>
    <ul>
        <li><b>Title</b>: {{ $blog->title }}</li>
        <li><b>Categoria</b>: {{ $blog->category->name }}</li>
        <li><b>Fecha de estreno</b>: {{ $blog->release_date }}</li>
    </ul>
    <h2>Descripcion</h2>
    <p>{{ $blog->description }}</p>
    </section>

        <p class="text-danger">¿Realmente estas seguro de querer eliminar el libro : {{$blog->title}}</p>
    <form action="{{url('/admin/blog/'. $blog->id .'/delete')}}" method="post">
    @csrf
    <button type="submit" class="btn btn-danger"><b>Eliminar</b> el libro: {{$blog->title}}</button>
    </form>
@endsection()