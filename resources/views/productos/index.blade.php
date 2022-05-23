@extends('adminlte::page')
@section('content')

<div class="card card-primary card-outline">
    <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
        <div class="card-header">
            <h4 class="card-title w-100">
                1. Vista para ver todos los productos
            </h4>
        </div>
    </a>
    <div id="collapseOne" class="collapse show" data-parent="#accordion">

        
        <a href="{{route('productos.create')}}"><strong>Crear producto</strong></a>



@endsection