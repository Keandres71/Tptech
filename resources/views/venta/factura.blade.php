@extends('layouts.app-reportes')

@section('Reporte de ventas')

@section('content')
    @include('layouts.cabezote-reporte')
    <table class="reportes-table">
        <tbody class="reportes-table-body">
            <?php

                $listaProductos = json_decode($venta->productos, true);
                foreach ($listaProductos as $producto) {?>

                <tr>
                    <th>Productos</th>
                    <th>{{ $producto['name'] }}</th>
                </tr>
                <tr>
                    <th>Cantidad</th>
                    <th>{{ $producto['quantity'] }}</th>
                </tr>
                <tr>
                    <th>Precio</th>
                    <th>{{ $producto['price'] }}</th>
                </tr>
                   
            <?php } ?>
                
            
            <tr>
                <td class="producto">
                    <strong>TOTAL</strong>
                </td>
                <td class="precio">
                    $<?php echo number_format($venta->total, 2) ?>
                </td>
            </tr>
        </tbody>
    </table>
@endsection