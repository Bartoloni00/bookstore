<?php 
use Illuminate\Database\Eloquent\Collections;
use Illuminate\Support\ViewErrorBag;

/** @var ViewErrorBag; $errors*/
/** @var User; $user*/
?>

@extends('layouts.admin')
@section('title', 'Eliminar usuario')
{{-- @csrf es para protegernos de ataques CSRF si no lo tenemos laravel tira un error 419 --}}
@section('contenido')
    <h1 class="text-danger text-center">¿Estas seguro de querer eliminar al usuario: {{$user->name}}?</h1>
    <ul>
        <li><b>Username: </b>{{ $user->name }}</li>
        <li><b>Email: </b>{{ $user->email }}</li>
        <li><b>Username: </b>{{ $user->role->name }}</li>
    </ul>
    <form method="POST" action="{{ url('/admin/users/'. $user->id .'/delete')}}">
        @csrf 
        <button type="submit" class="btn btn-danger">Si, quiero eliminar al usuario: <b>{{$user->name}}
@endsection()