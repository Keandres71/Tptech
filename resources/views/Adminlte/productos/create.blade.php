@extends('Adminlte.layouts')
@section('content')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
@stop

<h1 class="reportes-titulo">Agregar producto</h1>

    <div class="productos-form-container">
        <form action="">
            <div class="form-group">
                <label for="" class="reportes-label">Nombre del producto</label>
                <input type="text">
            </div>
            <div class="form-group">
                <label for="" class="reportes-label">Código</label>
                <input type="number">
            </div>
            <div class="form-group">
                <label for="" class="reportes-label">Descripción</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="split">
                <div class="form-group">
                    <label for="" class="reportes-label">Valor unitario</label>
                    <input type="number">
                </div>
                <div class="form-group">
                    <label for="" class="reportes-label">Linea</label>
                    <input type="text">
                </div>
                <div class="form-group">
                    <label for="" class="reportes-label">Sublinea</label>
                    <input type="text">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="reportes-label">Proveedor</label>
                <select name="" id="">
                    <option value="">Elija una opción</option>
                    <option value="Apple">Apple</option>
                    <option value="Huawei">Huawei</option>
                    <option value="Motorola">Motorola</option>
                    <option value="Samnsung">Samnsung</option>
                    <option value="Xiaomi">Xiaomi</option>
                    <option value="Algo">Oppo</option>
                </select>
            </div>
            
            <div class="botones">
                <button class="boton agregar"><a href="{{route('categorias.index')}}">Guardar</a></button>
                {{-- <button class="boton agregar"><a href="inventory.html">Guardar</a></button> --}}
                <button class="boton agregar"><a href="inventory.html">editar</a></button>
                {{-- <button class="boton cancelar"><a href="inventory.html">Cancelar</a></button> --}}
                <button class="boton cancelar"><a href="{{route('categorias.index')}}">Cancelar</a></button>
            </div>
        </form>
    </div>

@endsection