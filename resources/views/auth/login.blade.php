@extends('layouts.plantilla')

@section('content')
<div class="bg-login">
    <div class="wrapper-proyect">
        <main class="form-section">
            <div class="login-logo">
                <img src="{{asset('img/iphone_morado.png')}}" alt="">
            </div>
        
            <div class="form-container">
                <h2 class="saludo">Bienvenido</h2>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="input-field">
                        <input class="input-input" type="email" name="email" placeholder=" " autocomplete="off" id="correo" value="{{ old('email') }}">
                        <label class="input-label" for="email">correo</la>
                    </div>

                    @error('email')
                        <p>
                            * {{ $message }}
                        </p>                   
                    @enderror

                    <div class="input-field">
                        <input class="input-input" type="password" name="password" placeholder=" " id="password">
                        <label class="input-label" for="password">contraseña</label>
                    </div>

                    @error('password')
                    <p>
                        * {{ $message }}
                    </p>                   
                    @enderror
                    
                    <button class="login-btn" type="submit">Login</button>
                </form>

                <div class="login-options">
                    <a href="loginrecuperar.html">Recuperar contraseña</a>
                    <a href="{{ route('register') }}">Registrarse</a>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection