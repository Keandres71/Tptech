@extends('layouts.plantilla')
@section('content')


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

        <a href="" class="card__tienda">
            <div class="card__img">
                <img src="{{ asset('img/iphone_morado.png') }}" alt="">z
            </div>
            <div class="card__description">
                <p>{{ $producto->descripcion }}</p>
            </div>
            <div class="card__precio">
                ${{ $producto->val_unit }}
            </div>
        </a>

    @empty
        <p style="text-align: center">No hay productos en stock</p>
    @endforelse
    {{-- <a href="" class="card__tienda">
        <div class="card__img">
            <img src="https://www.alkosto.com/medias/6934177754043-001-1400Wx1400H?context=bWFzdGVyfGltYWdlc3wxNzk5MDh8aW1hZ2UvanBlZ3xpbWFnZXMvaDUyL2hkYy8xMjQxNjAyMDYxMTEwMi5qcGd8NThhNjYzNjkyZGM5Y2I4ZGMzNTAwZWFmYjFlZDQ2NDU1ZGJkMjRmZmRlOWRkNzMzODVmNzJhZWVlMWVkY2FiNQ" alt="">
        </div>
        <div class="card__description">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad, sequi.</p>
        </div>
        <div class="card__precio">
            $5'000.000
        </div>
    </a>
    <a href="" class="card__tienda">
        <div class="card__img">
            <img src="https://www.alkosto.com/medias/6934177754043-001-1400Wx1400H?context=bWFzdGVyfGltYWdlc3wxNzk5MDh8aW1hZ2UvanBlZ3xpbWFnZXMvaDUyL2hkYy8xMjQxNjAyMDYxMTEwMi5qcGd8NThhNjYzNjkyZGM5Y2I4ZGMzNTAwZWFmYjFlZDQ2NDU1ZGJkMjRmZmRlOWRkNzMzODVmNzJhZWVlMWVkY2FiNQ" alt="">
        </div>
        <div class="card__description">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad, sequi.</p>
        </div>
        <div class="card__precio">
            $5'000.000
        </div>
    </a>
    <a href="" class="card__tienda">
        <div class="card__img">
            <img src="https://www.alkosto.com/medias/6934177754043-001-1400Wx1400H?context=bWFzdGVyfGltYWdlc3wxNzk5MDh8aW1hZ2UvanBlZ3xpbWFnZXMvaDUyL2hkYy8xMjQxNjAyMDYxMTEwMi5qcGd8NThhNjYzNjkyZGM5Y2I4ZGMzNTAwZWFmYjFlZDQ2NDU1ZGJkMjRmZmRlOWRkNzMzODVmNzJhZWVlMWVkY2FiNQ" alt="">
        </div>
        <div class="card__description">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad, sequi.</p>
        </div>
        <div class="card__precio">
            $5'000.000
        </div>
    </a>
    <a href="" class="card__tienda">
        <div class="card__img">
            <img src="https://www.alkosto.com/medias/6934177754043-001-1400Wx1400H?context=bWFzdGVyfGltYWdlc3wxNzk5MDh8aW1hZ2UvanBlZ3xpbWFnZXMvaDUyL2hkYy8xMjQxNjAyMDYxMTEwMi5qcGd8NThhNjYzNjkyZGM5Y2I4ZGMzNTAwZWFmYjFlZDQ2NDU1ZGJkMjRmZmRlOWRkNzMzODVmNzJhZWVlMWVkY2FiNQ" alt="">
        </div>
        <div class="card__description">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad, sequi.</p>
        </div>
        <div class="card__precio">
            $5'000.000
        </div>
    </a>
    <a href="" class="card__tienda">
        <div class="card__img">
            <img src="https://www.alkosto.com/medias/6934177754043-001-1400Wx1400H?context=bWFzdGVyfGltYWdlc3wxNzk5MDh8aW1hZ2UvanBlZ3xpbWFnZXMvaDUyL2hkYy8xMjQxNjAyMDYxMTEwMi5qcGd8NThhNjYzNjkyZGM5Y2I4ZGMzNTAwZWFmYjFlZDQ2NDU1ZGJkMjRmZmRlOWRkNzMzODVmNzJhZWVlMWVkY2FiNQ" alt="">
        </div>
        <div class="card__description">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad, sequi.</p>
        </div>
        <div class="card__precio">
            $5'000.000
        </div>
    </a>
    <a href="" class="card__tienda">
        <div class="card__img">
            <img src="https://www.alkosto.com/medias/6934177754043-001-1400Wx1400H?context=bWFzdGVyfGltYWdlc3wxNzk5MDh8aW1hZ2UvanBlZ3xpbWFnZXMvaDUyL2hkYy8xMjQxNjAyMDYxMTEwMi5qcGd8NThhNjYzNjkyZGM5Y2I4ZGMzNTAwZWFmYjFlZDQ2NDU1ZGJkMjRmZmRlOWRkNzMzODVmNzJhZWVlMWVkY2FiNQ" alt="">
        </div>
        <div class="card__description">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad, sequi.</p>
        </div>
        <div class="card__precio">
            $5'000.000
        </div>
    </a>
    <a href="" class="card__tienda">
        <div class="card__img">
            <img src="https://www.alkosto.com/medias/6934177754043-001-1400Wx1400H?context=bWFzdGVyfGltYWdlc3wxNzk5MDh8aW1hZ2UvanBlZ3xpbWFnZXMvaDUyL2hkYy8xMjQxNjAyMDYxMTEwMi5qcGd8NThhNjYzNjkyZGM5Y2I4ZGMzNTAwZWFmYjFlZDQ2NDU1ZGJkMjRmZmRlOWRkNzMzODVmNzJhZWVlMWVkY2FiNQ" alt="">
        </div>
        <div class="card__description">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad, sequi.</p>
        </div>
        <div class="card__precio">
            $5'000.000
        </div>
    </a>
    <a href="" class="card__tienda">
        <div class="card__img">
            <img src="https://www.alkosto.com/medias/6934177754043-001-1400Wx1400H?context=bWFzdGVyfGltYWdlc3wxNzk5MDh8aW1hZ2UvanBlZ3xpbWFnZXMvaDUyL2hkYy8xMjQxNjAyMDYxMTEwMi5qcGd8NThhNjYzNjkyZGM5Y2I4ZGMzNTAwZWFmYjFlZDQ2NDU1ZGJkMjRmZmRlOWRkNzMzODVmNzJhZWVlMWVkY2FiNQ" alt="">
        </div>
        <div class="card__description">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad, sequi.</p>
        </div>
        <div class="card__precio">
            $5'000.000
        </div>
    </a>
    <a href="" class="card__tienda">
        <div class="card__img">
            <img src="https://www.alkosto.com/medias/6934177754043-001-1400Wx1400H?context=bWFzdGVyfGltYWdlc3wxNzk5MDh8aW1hZ2UvanBlZ3xpbWFnZXMvaDUyL2hkYy8xMjQxNjAyMDYxMTEwMi5qcGd8NThhNjYzNjkyZGM5Y2I4ZGMzNTAwZWFmYjFlZDQ2NDU1ZGJkMjRmZmRlOWRkNzMzODVmNzJhZWVlMWVkY2FiNQ" alt="">
        </div>
        <div class="card__description">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad, sequi.</p>
        </div>
        <div class="card__precio">
            $5'000.000
        </div>
    </a>--}}
</section>

<div class="pages">
    {!! $productos->links() !!}
</div>

@endsection

