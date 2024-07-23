<?php
use App\Models\Purchase;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Paginator\LengthAwarePaginator;

/** @var Purchase[]|Collection|LengthAwarePaginator $purchase */
?>

@extends('layouts.main')
@section('title', 'Detalles de mi compra')

@section('contenido')

<div class="custom-table">
    <h2 class="custom-subtitle mt-5">Compra del usuario: {{$purchase->user->name}}</h2>
    <table class="table custom-table-striped">
        <thead>
            <tr>
                <th scope="col">id de compra</th>
                <th scope="col">id de pago</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $purchase->id }}</td>
                <td>{{ $purchase->payment_id }}</td>
                <td class="text-white <?= ($purchase->state == 'success') ? 'bg-success' : (($purchase->state == 'info') ? 'bg-info' : 'bg-error'); ?>">{{ $purchase->state }}</td>
            </tr>
        </tbody>
    </table>

    <h2 class="custom-subtitle mt-5">Libros en la orden de compra</h2>
    <table class="table custom-table-striped">
        <thead>
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio unitario</th>
                <th scope="col">Precio total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($purchase->books as $book)
            <tr>
                <td><a href="{{route('books.details', $book->id);}}">{{ $book->title }}</a></td>
                <td>{{ $book->pivot->amount }}</td>
                <td>$ {{ $book->pivot->price / 100}}</td>
                <td>$ {{ $book->pivot->price * $book->pivot->amount / 100}}</td>
            </tr>
            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>$ {{ $purchase->total_price / 100}}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection