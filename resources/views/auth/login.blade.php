@extends('layouts.plantilla')

@section('content')
<div class="bg-login">
    <div class="wrapper">
        <main class="form-section">
            <div class="login-logo">
                
            </div>
        
            <div class="form-container">
                <h2 class="saludo">Bienvenido</h2>
                <form action="{{route('login.auth')}}" method="POST">
                    @csrf
                    <div class="input-field">
                        <input class="input-input" type="email" name="email" placeholder=" " autocomplete="off" id="correo">
                        <label class="input-label" for="email">correo</la>
                    </div>

                    <div class="input-field">
                        <input class="input-input" type="password" name="password" placeholder=" " id="password">
                        <label class="input-label" for="password">contraseña</label>
                    </div>
                    
                    <button class="login-btn">Login</button>
                </form>

                <div class="login-options">
                    <a href="loginrecuperar.html">Recuperar contraseña</a>
                    <a href="loginregister.html">Registrarse</a>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection