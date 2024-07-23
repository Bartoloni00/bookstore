<?php 
use Illuminate\Database\Eloquent\Collections;
use Illuminate\Support\ViewErrorBag;

/** @var ViewErrorBag; $errors*/
/** @var Author; $author*/
?>

@extends('layouts.admin')
@section('title', 'Eliminar Author')
{{-- @csrf es para protegernos de ataques CSRF si no lo tenemos laravel tira un error 419 --}}
@section('contenido')
    <h2 class="custom-subtitle text-center my-5">¿Estas seguro de querer eliminar al author: {{$author->name}} {{$author->lastname}}?</h2>

    <form method="POST" action="{{ url('/admin/author/'. $author->id .'/delete')}}" class="custom-forms">
    @csrf 
        <div class="form-group mb-3">
            <span>Nombre</span>
            <p class="form-control bg-body-secondary custom-text">{{ $author->name }}</p>
        </div>
    
        <div class="form-group mb-3">
            <span>Apellido</span>
            <p class="form-control bg-body-secondary custom-text" >{{ $author->lastname}}</p>
        </div>

        <div class="mx-auto mb-3">
            <button type="submit" class="btn btn-danger mt-2 w-100 block m-auto">Si, quiero eliminar al Author</button>
        </div>
    </form>
@endsection()