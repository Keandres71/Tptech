@extends('layouts.plantilla')

@section('content')
<div class="bg-login">
    <div class="wrapper-proyect">
        <main class="form-section">
            <div class="login-logo">
                <img src="{{asset('img/iphone_morado.png')}}" alt="">
            </div>
        
            <div class="form-container">
                <h2 class="saludo">Recuperar contraseña</h2>
                <form action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="input-field">
                        <input class="input-input" type="email" name="email" placeholder=" " autocomplete="off" id="correo" value="{{ old('email') }}">
                        <label class="input-label" for="email">Direccion de correo</la>
                    </div>

                    @error('email')
                        <p>
                            * {{ $message }}
                        </p>                   
                    @enderror
                    
                    <button class="login-btn" type="submit">Recuperar</button>
                </form>
            </div>
        </main>
    </div>
</div>
@endsection
 
 
 
 
 
 
 

