<?php 
use Illuminate\Database\Eloquent\Collections;
use Illuminate\Support\ViewErrorBag;

/** @var ViewErrorBag; $errors*/
/** @var Category; $category*/
?>

@extends('layouts.admin')
@section('title', 'Eliminar categoria')
@section('contenido')

    <h1>¿Estas seguro de querer eliminar la categoria: {{ $category->name }}?</h1>

    <div class="form-group mb-3">
        <span>Nombre:</span>
        <p class="form-control bg-body-secondary">{{ $category->name }}</p>
    </div>

    <p class="text-danger text-center">¿Estas seguro de querer eliminar la categoria: {{$category->name}}?</p>
    
    <form method="POST" action="{{ url('/admin/category/'. $category->id .'/delete')}}">
        @csrf 
        <div class="btn-max-width mx-auto mb-3">
            <button type="submit" class="btn btn-danger mt-3 w-100 block m-auto">Si, quiero eliminar la categoria</button>
        </div>
    </form>

@endsection()