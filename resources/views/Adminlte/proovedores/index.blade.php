@extends('Adminlte.layouts')

@section('content')
@section('css')
<link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop
    Vista para ver los proovedores

    <h1 >Proveedores</h1>

    <button class="boton agregar"><a href="{{route('proovedores.create')}}">Crear proovedor</a></button>
    
    <table class="reportes-table">
        <thead class="reportes-table-head">
            <th>Nombre</th>
            <th>NIT</th>
            <th>Dirección</th>
            <th>Correo electrónico</th>
            <th>Teléfono</th>
            <th>Acción</th>
            <th>Estado</th>
        </thead>

        <tbody class="reportes-table-body">
            <tr>
                <td>Xiaomi</td>
                <td>123456</td>
                <td>calle siempre viva</td>
                <td>tptech@gmail.com</td>
                <td>987654</td>
                <td>
                    <button class="boton editar">Editar</button>
                    <button class="boton eliminar">Eliminar</button>
                </td>
                <td>
                    <button>Activo</button>
                </td>
            </tr>
        </tbody>
    </table>

@endsection