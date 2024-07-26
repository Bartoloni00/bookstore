<?php 
use Illuminate\Support\ViewErrorBag;

/** @var Blog[]|Collection $blog */
/** @var ViewErrorBag; $errors*/
?>

@extends('layouts.admin')
@section('title', 'Eliminar el blog: '. e($blog->title))

@section('contenido')
    <h2 class="custom-subtitle text-center my-5">¿Deseas eliminar el blog: {{ $blog->title }}?</h2>
    
    <x-blog-details :blog="$blog"/>
    
    <p class="text-danger text-center custom-text">¿Realmente estás seguro de querer eliminar el blog: {{$blog->title}}?</p>

    <form method="POST" action="{{url('/admin/blog/'. $blog->id .'/delete')}}" class="custom-forms">
    @csrf 
        <div class="mx-auto mb-3">
            <button type="submit" class="btn btn-danger mt-2 w-100 block m-auto">Sí, eliminar Blog</button>
        </div>
    </form>
    
@endsection()