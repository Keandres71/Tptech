@extends('layouts.plantilla')

@section('content')


<div class="bg-login">
    <div class="wrapper">
        <main class="form-section">
            <div class="login-logo">
                
                
            </div>
            
        
            <div class="form-container">
                <h2 class="saludo">Registrarse</h2>
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="input-field">
                        <input class="input-input" type="text" name="name" placeholder=" " autocomplete="off" id="name">
                        <label class="input-label" for="name">Nombre</la>
                    </div>

                    <div class="input-field">
                        <input class="input-input" type="text" name="apellido" placeholder=" " autocomplete="off" id="apellido">
                        <label class="input-label" for="apellido">Apellido</la>
                    </div>

                    <div class="input-field">
                        <input class="input-input" type="email" name="email" placeholder=" " autocomplete="off" id="email">
                        <label class="input-label" for="email">correo</la>
                    </div>

                    <div class="input-field">
                        <input class="input-input" type="date" name="fecha_nac" placeholder=" " autocomplete="off" id="fecha_nac">
                        <label class="input-label" for="fecha_nac">Fecha de nacimiento</la>
                    </div>

                    <div class="input-field documento">
                       
                        <label class="" for="documento">Tipo de documento</label>
                        
                        <select   id="documento" name="tipo_doc">
                            <option value="Cedula">Cc</option>
                            <option value="tarjeta de identidad">Ti</option>
                        </select>
                    </div>

                    <div class="input-field">
                        <input class="input-input" type="number" name="num_doc" placeholder=" " autocomplete="off" id="num_doc">
                        <label class="input-label" for="num_doc">Numero de documento</la>
                    </div>


                    <div class="input-field">
                        <input class="input-input" type="password" name="password" placeholder=" " id="password">
                        <label class="input-label" for="password">contraseña</label>
                    </div>

                    <div class="input-field">
                        <input class="input-input" type="password" name="password_confirmation" placeholder=" " id="password_confirmation">
                        <label class="input-label" for="password_confirmation">confirmar contraseña</label>
                    </div>
                    
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