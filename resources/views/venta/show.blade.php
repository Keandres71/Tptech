@extends('layouts.app-reportes')

@section('Reporte de ventas')

@section('content')
    @include('layouts.cabezote-reporte')
    <table class="reportes-table">

        <thead class="reportes-table-head">
            <tr>
                <th>No</th>
                
                <th>Codigo</th>
                <th>Cliente</th>
                <th>Total</th>
                <th>Metodo pago</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody class="reportes-table-body">
            @foreach ($ventas as $venta)
                <tr>
                    <td>{{ ++$i }}</td>
                    
                    <td>{{ $venta->codigo }}</td>
                    <td>{{ $venta->user->name }}</td>
                    <td>{{ $venta->total }}</td>
                    <td>{{ $venta->metodo_pago }}</td>
                    <td>{{ $venta->fecha_venta }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection