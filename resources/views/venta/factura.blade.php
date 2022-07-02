@extends('layouts.app-reportes')

@section('Reporte de ventas')

@section('content')
    @include('layouts.cabezote-reporte')
    <table class="reportes-table">
        <tbody class="reportes-table-body">
            <tr>
                <th>Productos</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>
            <?php

                $listaProductos = json_decode($venta->productos, true);
                foreach ($listaProductos as $producto) {?>

                <tr>
                    <th>{{ $producto['name'] }}</th>
                    <th>{{ $producto['quantity'] }}</th>
                    <th>{{ $producto['price'] }}</th>
                </tr>
                   
            <?php } ?>
                
            
            <tr>
                <td class="producto" colspan="2">
                    <strong>TOTAL</strong>
                </td>
                <td class="precio">
                    $<?php echo number_format($venta->total, 2) ?>
                </td>
            </tr>
        </tbody>
    </table>
@endsection