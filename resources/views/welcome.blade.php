@extends('layouts.plantilla')
@section('content')

@include('layouts.mensaje-error')

<section class="home-banner">
    <div class="wrapper-proyect">
        <picture>
            <img src="img/home-banner.png" alt="">
        </picture>
    </div>
</section>


<section class="distribuidores">
    <div class="wrapper-proyect">
        <h2>Distribuidores oficiales</h2>
        <ul class="marcas grid">
            <li>
                <a href="#"><img src="https://w7.pngwing.com/pngs/924/257/png-transparent-apple-electric-car-project-cupertino-apple-iphone-electronics-heart-logo.png" alt="iphone"></a>
            </li>
            <li><a href="#"><img src="https://seeklogo.com/images/H/huawei-logo-B8D40C4904-seeklogo.com.png" alt="huawei"></a></li>
            <li><a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8f/Motorola_M_symbol_blue.svg/2048px-Motorola_M_symbol_blue.svg.png" alt=""></a></li>
            <li><a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsS8cLe-3bM6776rA658ZTPzn7zJJmhPMzHMNPgeFkUg5q0jzArvFuSU-xDKhfToIoIJ0&usqp=CAU" alt=""></a></li>
            <li><a href="#"><img src="https://logodownload.org/wp-content/uploads/2015/02/xiaomi-logo-1.png" alt=""></a></li>
            {{-- <li><a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Xiaomi_logo_%282021-%29.svg/2048px-Xiaomi_logo_%282021-%29.svg.png" alt=""></a></li> --}}
        </ul>
    </div>
</section>

<div class="wrapper-proyect">
    <h2>Nuestros productos</h2>
</div>

<section class="tienda grid wrapper-proyect">

    @forelse ($productos as $producto)

        <div class="card__tienda">
            <form action="{{ route('add.carrito') }}"  method="POST">
                @csrf
                <input type="hidden" name="i" value="{{ $producto->id }}">
                <div class="card__img">
                    <img src="{{ asset('img/iphone_morado.png') }}" alt="">
                </div>
                <div class="card__nombre">
                    <p><b>{{ $producto->nombre }}</b></p>
                </div>
                <div class="card__description">
                    <p>{{ $producto->descripcion }}</p>
                </div>
                <div class="card__precio">
                    ${{ $producto->val_unit }}
                </div>
                <button class="card__agregar" type="submit">Agregar <i class="fa-solid fa-cart-shopping"></i></button>
            </form>
        </div>

    @empty
        <p style="text-align: center">No hay productos en stock</p>
    @endforelse
</section>

<div class="pages">
    {!! $productos->links() !!}
</div>

@endsection

