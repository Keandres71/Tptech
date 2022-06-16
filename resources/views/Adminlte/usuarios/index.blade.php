@extends('Adminlte.layouts')
@section('content')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
@stop

@if (Session::has('mensaje'))
<div class="alert.alert-info.my-5">
    {{ Session::get('mensaje') }}
</div>

@endif

<h1 class="reportes-titulo">Usuarios</h1>
<button class="boton agregar"><a href="{{route('usuarios.create')}}">Crear usuario</a></button>


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
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->apellido}}</td>
                <td>{{$usuario->email}}</td>
            <td>

                <div class="botones">
                    <a href="{{route('usuarios.edit',$usuario)}}" class="boton editar">Editar</a>
                    <form action="{{route('usuarios.destroy', $usuario)}}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf                       
                        <button type="submit" class="boton eliminar">Eliminar</button>
                    </form>
                </div>
            </td>


        </tr>
        @empty
        
            <tr>
                <p>No hay usuarios</p>
            </tr>
        
        @endforelse
        </tbody>
    </table>
    @if ($usuarios->count())
    {{$usuarios->links()}}
        
    @endif
</div>

@endsection