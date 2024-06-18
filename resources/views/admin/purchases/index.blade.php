<?php
use App\Models\Purchase;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Paginator\LengthAwarePaginator;

/** @var Purchase[]|Collection|LengthAwarePaginator $purchases */
?>

@extends('layouts.admin')
@section('title', 'Ventas')

@section('contenido')
<h1 class="text-center mb-3">Todas las ventas</h1>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">Usuario</th>
                <th scope="col">id de pago</th>
                <th scope="col">Estado</th>
                <th scope="col">Precio total de la compra</th>
                <th scope="col">Detalles</th>
                </tr>
        </thead>
        <tbody>
            @foreach ($purchases as $purchase)
            <tr>
                <td><a href="{{ route('admin.users') }}">{{ $purchase->user->name}}</a></td>
                <td>{{ $purchase->payment_id }}</td>
                <td class="text-white <?= ($purchase->state == 'success') ? 'bg-success' : (($purchase->state == 'pending') ? 'bg-info' : 'bg-danger'); ?>">{{ $purchase->state }}</td>
                <td>$ {{ $purchase->total_price / 100 }}</td>
                <td><a href="{{ route('admin.purchases.details', $purchase->id); }}">Ver detalles</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{$purchases->links()}}
@endsection