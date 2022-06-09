@extends('Adminlte.layouts')
@section('content')
@section('css')
<link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop

<h1 class="reportes-titulo">Listado de productos</h1>

<button class="boton agregar"><a href="{{ route('Adminlte/productos.create') }}">Crear producto</a></button>

@if (Session::has('mensaje'))
<div class="alert.alert-info.my-5">
    {{ Session::get('mensaje') }}
</div>
@endif

<div class="reportes-data">
<table class='reportes-table'>

    <thead class="reportes-table-head">
        <th>ID Producto</th>
        <th>ID Categoria</th>
        <th>ID Proveedor</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Valor unidad</th>
        <th>Acciones</th>
        <th>Estado</th>
    </thead>
    <tbody class="reportes-table-body">

        @forelse ($productos as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->idcag}}</td>
            <td>{{$item->idpro}}</td>
            <td>{{$item->nombre}}</td>
            <td>{{$item->descripcion}}</td>
            <td>{{$item->val_unit}}</td>

            <td>
                <div class="botones">
                    <a href="{{ route('Adminlte/productos.edit', $item) }}" class="boton editar">Editar</a>
                    <form action="{{ route('Adminlte/productos.destroy', $item) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type=" submit" class="boton eliminar">Eliminar</button>
                </div>
                </form>
            </td>
            <td>
                @if ($item->active == 1)
                <form action="{{ route('Adminlte/productos.update', $item) }}" method="post" class="d-inline">
                    <input type="hidden" name="active" value="0">
                    @else
                    <form action="{{ route('Adminlte/productos.update', $item) }}" method="post" class="d-inline">
                        <input type="hidden" name="active" value="1">
                        @endif
                        @method('PUT')
                        @csrf

                        @if ($item->active == 1)
                        <button type="submit" class="btn btn-dark">Desactivar</button>
                        @else
                        <button type="submit" class="btn btn-success">Activar</button>
                        @endif
                    </form>

            </td>
        </tr>
        @empty

        <tr>
            <td colspan="3"> No tenemos productos en el momento</td>
        </tr>
        @endforelse

    </tbody>
</table>
@if ($productos->count())
{{$productos->links()}}

@endif
</div>
</div>
@endsection
