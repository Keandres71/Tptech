@extends('Adminlte.layouts')

@section('content')

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
            <tr style="text-align: center">
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody class="reportes-table-body">

            @forelse ($usuarios as $usuario)
            <tr>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->apellido}}</td>
                <td>{{$usuario->email}}</td>
            <td>

                <div class="botones">
                    <a class="btn btn-sm btn-warning" href="{{ route('usuarios.edit',$usuario) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                    @can('usuarios.destroy')
                        <form action="{{route('usuarios.destroy', $usuario)}}" method="POST" class="d-inline form-delete">
                            <a class="btn btn-sm btn-primary" href="{{ route('usuarios.asignar',$usuario) }}"><i class="fa fa-id-card"></i> Asignar rol</a>
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="boton eliminar"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                        </form>
                    @endcan
                </div>
            </td>


        </tr>
        @empty

            <tr>
                <p style="text-align: center"> No hay usuarios disponibles</p>
            </tr>

        @endforelse
        </tbody>
    </table>
    @if ($usuarios->count())
    {{$usuarios->links()}}

    @endif
</div>

@endsection

@section('js')
    <script src="{{ asset('js/plugins/sweetalert.js') }}"></script>
@endsection
