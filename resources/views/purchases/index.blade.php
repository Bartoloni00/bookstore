<?php
use App\Models\Purchase;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Paginator\LengthAwarePaginator;

/** @var Purchase[]|Collection|LengthAwarePaginator $purchases */
//success, pending, failture
?>

@extends('layouts.main')
@section('title', 'Mis Compras')

@section('contenido')
<h2 class="text-center mb-3">Todas mis compras</h2>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">id de pago</th>
                <th scope="col">Estado</th>
                <th scope="col">Precio total de la compra</th>
                <th scope="col">Detalles</th>
                </tr>
        </thead>
        <tbody>
            @foreach ($purchases as $purchase)
            <tr>
                <td>{{ $purchase->payment_id }}</td>
                <td class="text-white <?= ($purchase->state == 'success') ? 'bg-success' : (($purchase->state == 'info') ? 'bg-info' : 'bg-error'); ?>">{{ $purchase->state }}</td>
                <td>{{ $purchase->total_price }}</td>
                <td><a href="{{ route('purchase.details', $purchase->id) }}">Ver detalles</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{$purchases->links()}}
@endsection