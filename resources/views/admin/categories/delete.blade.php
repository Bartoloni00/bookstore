<?php 
use Illuminate\Database\Eloquent\Collections;
use Illuminate\Support\ViewErrorBag;

/** @var ViewErrorBag; $errors*/
/** @var Category; $category*/
?>

@extends('layouts.admin')
@section('title', 'Eliminar categoria')
@section('contenido')
    <h1 class="text-danger text-center">¿Estas seguro de querer eliminar la categoria: {{$category->name}}?</h1>

    <form method="POST" action="{{ url('/admin/category/'. $category->id .'/delete')}}">
        @csrf 
        <button type="submit" class="btn btn-danger">Si, quiero eliminar la categoria: <b>{{$category->name}}</b></button>
    </form>
@endsection()