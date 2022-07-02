@extends('layouts.app-reportes')

@section('Reporte de ventas')

@section('content')
    @include('layouts.cabezote-reporte')
    <table class="reportes-table">
        <tbody class="reportes-table-body">
            <?php
                // logica desde la vista no del controlador por jsondecode
                // estilos al la factura pdf
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
                    <strong>Iva</strong>
                </td>
                <td class="iva">
                    $<?php echo number_format($venta->iva, 2) ?>
                </td>
            </tr>
            <tr>
                <td class="producto">
                    <strong>TOTAL</strong>
                </td>
                <td class="precio"> 
                    
                    $<?php 
                     $totaliva = $venta->total;
                     $iva = 0.19;
                     echo number_format($totaliva+$iva, 2) 
                     ?>
                </td>
            </tr>
          
        </tbody>
    </table>
@endsection