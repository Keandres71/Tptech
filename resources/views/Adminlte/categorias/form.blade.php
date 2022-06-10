@extends('Adminlte.layouts')
@section('content')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
@stop

<div class="container py-5 text-center">
    @if (isset($categoria))
        <h1 class="reportes-titulo">Editar Categoria </h1>
    @else
        <h1 class="reportes-titulo">Crear Categoria </h1>
    @endif
    @if (isset($categoria))
        <form action="{{ route('AdminLte/categorias.update',$categoria)}}" method="post"> 
            @method('PUT')
    @else
        <form action="{{ route('AdminLte/categorias.store')}}" method="post"> 
    @endif

    @csrf

<div class="productos-form-container ">
    <label for="id" class="reportes-label"> Codigo</label>
 <input type="number" name="id" class="form-control" placeholder="Escriba el Codigo" value="{{old('id')??@$categoria->id}}">
 @error('id')
 <p class="form-text text-danger">{{$message}} </p>
     
 @enderror
</div>
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

</form>
</div>



@endsection