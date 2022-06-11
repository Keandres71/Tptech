@extends('Adminlte::page')

@section('content')
@section('css')
<link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop

<h1 class="reportes-titulo">Agregar proveedor</h1>

    <div class="productos-form-container">
        <form action="">
            <div class="form-group">
                <label for="" class="reportes-label">Nombre</label>
                <input type="text">
            </div>

            <div class="form-group">
                <label for="" class="reportes-label">NIT</label>
                <input type="text">
            </div>

            <div class="form-group">
                <label for="" class="reportes-label">Dirección</label>
                <input type="text">
            </div>

            <div class="form-group">
                <label for="" class="reportes-label">Correo</label>
                <input type="email">
            </div>
            <div class="form-group">
                <label for="" class="reportes-label">Teléfono</label>
                <input type="number">
            </div>

            <div class="botones">
                <button class="boton agregar">Guardar</button>
                <button class="boton agregar">Editar</button>
                <button class="boton cancelar">Cancelar</button>
            </div>
        </form>
    </div>

@endsection