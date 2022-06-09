@extends('Adminlte.layouts')
@section('content')
@section('css')
<link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop



    @if (isset($producto))
     <h1 class="reportes-titulo">Editar producto</h1>
    @else
     <h1 class="reportes-titulo">Crear producto</h1>
    @endif

    @if (isset($producto))
        <form action="{{ route('Adminlte/productos.update',$producto)}}" method="post">
            @method('PUT')
    @else
        <form action="{{ route('Adminlte/productos.store')}}" method="post">
    @endif

            @csrf
            <div class="productos-form-container">
                <form action="">
                <div class="form-group">
                <label for="idcag" class="reportes-label">ID Categoria</label>
                <input type="number" name="idcag" class="form-comtrol" placeholder="ID categoria"
                value="{{old('idcag')??@$producto->idcag}}">
                @error('idcag')
                <p class="form-text text-danger">{{ $message }}</p>
                @enderror

            </div>



            <div class="form-group">
                <label for="idpro" class="reportes-label">ID Proveedor</label>
                <input type="number" name="idpro" class="form-comtrol" placeholder="Ingrese el ID proveedor"
                value="{{old('idpro')??@$producto->idpro}}">
                @error('idpro')
                <p class="form-text text-danger">{{ $message }}</p>
                @enderror

            </div>

            <div class="form-group">

                <label for="nombre" class="reportes-label">Nombre</label>
                <input type="text" name="nombre" class="form-comtrol" placeholder="Nombre de producto"
                value="{{old('nombre')??@$producto->nombre}}">
                @error('nombre')
                <p class="form-text text-danger">{{ $message }}</p>
                @enderror

            </div>

            <div class="form-group">
                <label for="descripcion" class="reportes-label">Descripcion del producto</label>
                <textarea name="descripcion" cols="30" rows="10" class="form-control">{{ old('descripcion') ?? @$producto->descripcion }}</textarea>
                @error('descripcion')
                    <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>


            <div class="split">
                <div class="form-group">
                <label for="val_unit" class="reportes-label">Valor Unitario</label>
                <input type="number" name="val_unit" class="form-comtrol" placeholder="Valor por unidad"
                value="{{old('val_unit')??@$producto->val_unit}}">
                @error('val_unit')
                <p class="form-text text-danger">{{ $message }}</p>
                @enderror

            </div>
            <div class="form-group">
                <label for="" class="reportes-label">Proveedor</label>
                <select name="" id="">
                    <option value="">Elija una opción</option>
                    <option value="Samnsung">Samnsung</option>
                    <option value="Apple">Apple</option>
                    <option value="Xiaomi">Xiaomi</option>
                    <option value="Motorola">Motorola</option>
                    <option value="Huawei">Huawei</option>
                    <option value="Algo">Oppo</option>
                </select>
            </div>
        </div>
    </div>
            <div class="botones">
            @if (isset($producto))
            <button type="summit" class="boton agregar">Editar producto</button>
            <button class="boton cancelar"><a href="{{route('Adminlte/productos.index')}}">Cancelar</a></button>
            @else
            <button type="summit" class="boton agregar">Guardar producto</button>
            <button class="boton cancelar"><a href="{{route('Adminlte/productos.index')}}">Cancelar</a></button>
            @endif
            </div>
        </form>

</div>
@endsection
