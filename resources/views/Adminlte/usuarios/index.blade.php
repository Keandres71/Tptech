@extends('Adminlte.layouts')
@section('content')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
@stop

<h1 class="reportes-titulo">Usuarios</h1>

<button class="boton agregar"><a href="{{route('adminlte.create2')}}">Crear usuario</a></button>

<div class="reportes-data">
    <table class="reportes-table">
        <thead class="reportes-table-head">
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo</th>
    
        </thead>
        <tbody class="reportes-table-body">

            @forelse ($usuarios as $usuario)
            <tr>
                <td>{{$usuario->nombre}}</td>
                <td>{{$usuario->apellido}}</td>
                <td>{{$usuario->email}}</td>
                
            @empty
                
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
        
        
        @endforelse
        </tbody>
    </table>
</div>

@endsection