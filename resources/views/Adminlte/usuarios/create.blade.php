@extends('Adminlte.layouts')
@section('content')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
@stop

<h1 class="reportes-titulo">Crear Usuario</h1>

    <div class="productos-form-container">
        <form action="{{route('adminlte.store2')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="" class="reportes-label">Nombre</label>
                <input type="text" name="nombre">
            </div>

            <div class="form-group">
                <label for="" class="reportes-label">Apellido</label>
                <input type="text" name="apellido">
            </div>

            <div class="form-group">
                <label for="" class="reportes-label">Email</label>
                <input type="email" name="email"></input>
            </div>

            <div class="form-group">
                <label for="" class="reportes-label">Tipo documento</label>
                <select   id="documento" name="tipo_doc">
                    <option value="Cedula">Cc</option>
                    <option value="tarjeta">Ti</option>
                </select>
            </div>

            <div class="form-group">
                <label for="" class="reportes-label">Numero documento</label>
                <input type="number" name="num_doc"></input>
            </div>

            <div class="form-group">
                <label for="" class="reportes-label">Fecha de nacimiento</label>
                <input type="date" name="fecha_nac"></input>
            </div>

            <div class="form-group">
                <label for="" class="reportes-label">Contraseña</label>
                <input type="password" name="contraseña" id=""></input>
            </div>


                <div class="form-group">
                    <label for="" class="reportes-label">Celular</label>
                    <input type="text">
                </div>
                <div class="form-group">
                    <label for="" class="reportes-label">Ciudad</label>
                    <input type="text">
                </div>
            </div>

            
            <div class="botones">
                <button type="submit" class="boton agregar">Crear</button>

            </div>
        </form>
    </div>

@endsection