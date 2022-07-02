@extends('layouts.plantilla')

@section('content')
<div class="bg-login">
    <div class="wrapper-proyect">
        <main class="form-section">
            <div class="login-logo">
                <img src="{{asset('img/iphone_morado.png')}}" alt="">
            </div>
        
            <div class="form-container">
                <h2 class="saludo">Restablecer contraseña</h2>
                <form action="{{ route('password.update') }}" method="POST">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="input-field">
                        <input class="input-input" type="email" name="email" placeholder=" " autocomplete="off" id="correo" value="{{ $email ?? old('email') }}"">
                        <label class="input-label" for="email">Direccion de correo</la>
                    </div>

                    @error('email')
                        <p>
                            * {{ $message }}
                        </p>                   
                    @enderror

                    <div class="input-field">
                        <input class="input-input" type="password" name="password" placeholder=" " id="password">
                        <label class="input-label" for="password">Contraseña</label>
                    </div>

                    @error('password')
                    <p>
                        * {{ $message }}
                    </p>                   
                    @enderror

                    <div class="input-field">
                        <input class="input-input" type="password" name="password_confirmation" placeholder=" " id="password-confirm">
                        <label class="input-label" for="password-confirm">Confirmar contraseña</label>
                    </div>

                    <button class="login-btn" type="submit">Guardar</button>
                </form>
        </main>
    </div>
</div>
@endsection
  
  
  
  
  
  
  
  




