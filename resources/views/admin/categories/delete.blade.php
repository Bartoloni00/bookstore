<?php 
use Illuminate\Database\Eloquent\Collections;
use Illuminate\Support\ViewErrorBag;

/** @var ViewErrorBag; $errors*/
/** @var Category; $category*/
?>

@extends('layouts.admin')
@section('title', 'Eliminar categoria')
@section('contenido')

    <h2 class="custom-subtitle text-center my-5">Estás seguro de querer eliminar la categoría: {{ $category->name }}?</h2>

    
    <form method="POST" action="{{ url('/admin/category/'. $category->id .'/delete')}}" class="custom-forms">
        @csrf 
        
        <div class="form-group mb-3">
            <span>Nombre:</span>
            <p class="form-control bg-body-secondary custom-text">{{ $category->name }}</p>
        </div>
    
        <p class="text-danger text-center custom-text">¿Realmente estás seguro de querer eliminar la categoría: {{$category->name}}?</p>

        <div class="mx-auto mb-3">
            <button type="submit" class="btn btn-danger mt-3 w-100 block m-auto">Si, quiero eliminar la categoria</button>
        </div>
    </form>

@endsection()