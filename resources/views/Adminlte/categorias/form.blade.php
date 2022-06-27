@extends('Adminlte.layouts')
@section('content')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
@stop

<div class="container py-5 text-center">
    @if (isset($categoria))
        <h1 class="reportes-titulo">Editar Categoria </h1>
        <form action="{{ route('AdminLte.categorias.update',$categoria)}}" method="post">
            @method('PUT')
    @else
        <h1 class="reportes-titulo">Crear Categoria </h1>
        <form action="{{ route('AdminLte.categorias.store')}}" method="post">
    @endif

    @csrf

    <div class="productos-form-container">
        <label for="tipo" class="reportes-label"> Marca</label>
        <input type="text" name="tipo" class="form-control" placeholder="Tipo" value="{{old('tipo')??@$categoria->tipo}}">
        @error('tipo')
            <p class="form-text text-danger">{{$message}} </p>
        @enderror
        @if (isset($categoria))
            <button type="submit" class="boton agregar"> Editar Categoria</button>
        @else
            <button type="submit" class="boton agregar"> Guardar Categoria</button>
        @endif
    </div>

</form>
</div>

@endsection
