<?php 
use Illuminate\Database\Eloquent\Collections;
use Illuminate\Support\ViewErrorBag;

/** @var ViewErrorBag; $errors*/
/** @var Author; $author*/
?>

@extends('layouts.admin')
@section('title', 'Añadir Author')
{{-- @csrf es para protegernos de ataques CSRF si no lo tenemos laravel tira un error 419 --}}
@section('contenido')
    <h1 class="text-danger text-center">¿Estas seguro de querer eliminar al author: {{$author->name}} {{$author->lastname}}?</h1>

    <form method="POST" action="{{ url('/admin/author/'. $author->id .'/delete')}}">
        @csrf 
        <button type="submit" class="btn btn-danger">Si, quiero eliminar al Author: <b>{{$author->name}} {{$author->lastname}}</b></button>
    </form>
@endsection()