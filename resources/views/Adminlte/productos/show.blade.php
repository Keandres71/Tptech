@extends('Adminlte.layouts')
@section('content')
@section('css')
<link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop

<h1 class="reportes-titulo">Show</h1>

    <div class="show-product-card">
        <img src="img/celular.jpg" alt="">
        <div class="show-right">
            <p>
                <strong>Descripción</strong>
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores rerum omnis veniam quae possimus non fuga recusandae repellat repellendus placeat enim consectetur accusamus, nesciunt impedit aspernatur atque officiis earum inventore? Voluptatibus voluptatum ab quia eius aut architecto atque, nostrum iure blanditiis optio culpa illum ratione dolores. Temporibus quod eos odio!</p>
            <button class="boton show-agregar-carrito">Agregar al carrito</button>
        </div>
    </div>

@endsection