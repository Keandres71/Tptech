@extends('Adminlte.layouts')
@section('content')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
@stop

<h1 class="reportes-titulo">Productos</h1>

<button class="boton agregar"><a href="{{route('productos.create')}}">Agregar producto</a></button>

<div class="reportes-data">
    <table class="reportes-table">
        <thead class="reportes-table-head">
            <th>Nombre</th>
            <th>Código</th>
            <th>Descripción</th>
            <th>Valor unitario</th>
            <th>Liner</th>
            <th>Sublinea</th>
            <th>Activar</th>
            <th>Acción</th>
        </thead>
        <tbody class="reportes-table-body">
            <tr>
                <td>data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>
                    <div class="toggle">
                        <input type="checkbox">
                    </div>
                </td>
                <td>
                    <div class="botones">
                        <button class="boton editar">Editar</button>
                        <button class="boton eliminar">Eliminar</button>
                    </div>
                </td>
            </tr>
            
            
        </tbody>
    </table>
</div>

@endsection