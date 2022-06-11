@extends('Adminlte.layouts')
@section('content')
@section('css')
<link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop

<h1 class="reportes-titulo">Carrito de compras</h1>

    <table class="reportes-table">
        <thead class="reportes-table-head">
            <th>Producto</th>
            <th>Precio</th>
        </thead>

        <tbody class="reportes-table-body">
            <tr>
                <td>Xiaomi</td>
                <td>5000</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>5000</td>
            </tr>
        </tbody>
    </table>

@endsection