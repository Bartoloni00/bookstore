<?php 
use Illuminate\Support\ViewErrorBag;

/** @var Blog[]|Collection $blog */
/** @var ViewErrorBag; $errors*/
?>

@extends('layouts.admin')
@section('title', 'Eliminar el blog: '. e($blog->title))

@section('contenido')
    <h1 class="mb-3">Deseas eliminar el blog: {{ $blog->title }}</h1>
    
    <x-blog-details :blog="$blog"/>
    
    <p class="text-danger text-center">¿Realmente estas seguro de querer eliminar el libro : {{$blog->title}}</p>

    <form method="POST" action="{{url('/admin/blog/'. $blog->id .'/delete')}}">
    @csrf 
        <div class="btn-max-width mx-auto mb-3">
            <button type="submit" class="btn btn-danger mt-2 w-100 block m-auto">Eliminar Blog</button>
        </div>
    </form>
    
@endsection()