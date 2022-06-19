@extends('layouts.plantilla')

@section('content')


<div class="bg-login">
    <div class="wrapper-proyect">
        <main class="form-section">
            <div class="login-logo">
                <img src="{{asset('img/xiaomi_12.png')}}" alt="">
            </div>
            
        
            <div class="form-container">
                <h2 class="saludo">Registrarse</h2>
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="input-field">
                        <input class="input-input" type="text" name="name" placeholder=" " autocomplete="off" id="name" value="{{ old('name') }}">
                        <label class="input-label" for="name">Nombre</la>
                    </div>
                    @error('name')
                    <p>
                        * {{ $message }}
                    </p>                   
                    @enderror

                    <div class="input-field">
                        <input class="input-input" type="text" name="apellido" placeholder=" " autocomplete="off" id="apellido" value="{{ old('apellido') }}">
                        <label class="input-label" for="apellido">Apellido</la>
                    </div>

                    @error('apellido')
                    <p>
                        * {{ $message }}
                    </p>                   
                    @enderror

                    <div class="input-field">
                        <input class="input-input" type="email" name="email" placeholder=" " autocomplete="off" id="email" value="{{ old('email') }}">
                        <label class="input-label" for="email">correo</la>
                    </div>

                    @error('email')
                    <p>
                        * {{ $message }}
                    </p>                   
                    @enderror

                    <div class="input-field">
                        <input class="input-input" type="date" name="fecha_nac" placeholder=" " autocomplete="off" id="fecha_nac" value="{{ old('fecha_nac') }}">
                        <label class="input-label" for="fecha_nac">Fecha de nacimiento</la>
                    </div>

                    @error('fecha_nac')
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

                    <div class="input-field">
                        <input class="input-input" type="password" name="password_confirmation" placeholder=" " id="password_confirmation">
                        <label class="input-label" for="password_confirmation">confirmar contraseña</label>
                    </div>

                    @error('password_confirmation')
                    <p>
                        * {{ $message }}
                    </p>                   
                    @enderror
                    
                    <button type="submit"  class="login-btn">
                        {{ __('Register') }}
                    </button>
                </form>

{{--                 <div class="login-options">
                    <a href="loginrecuperar.html">Recuperar contraseña</a>
                    <a href="login.html">Iniciar sesión</a>
                </div> --}}
            </div>
        </main>
    </div>
</div>

@endsection