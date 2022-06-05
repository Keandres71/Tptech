@extends('layouts.plantilla')

@section('content')


<div class="bg-login">
    <div class="wrapper">
        <main class="form-section">
            <div class="login-logo">
                
                
            </div>
            
        
            <div class="form-container">
                <h2 class="saludo">Registrarse</h2>
                <form action="#">
                    <div class="input-field">
                        <input class="input-input" type="nombre" name="nombre" placeholder=" " autocomplete="off" id="nombre">
                        <label class="input-label" for="nombre">Nombre</la>
                    </div>

                    <div class="input-field">
                        <input class="input-input" type="apellido" name="apellido" placeholder=" " autocomplete="off" id="apellido">
                        <label class="input-label" for="apellido">Apellido</la>
                    </div>

                    <div class="input-field documento">
                       
                        <label class="" for="documento">Tipo de documento</label>
                        
                        <select   id="documento" name="tipo_doc">
                            <option value="Cedula">Cc</option>
                            <option value="tarjeta">Ti</option>
                        </select>
                    </div>

                    <div class="input-field">
                        <input class="input-input" type="numdocumento" name="num_doc" placeholder=" " autocomplete="off" id="num_doc">
                        <label class="input-label" for="correo">Numero de documento</la>
                    </div>


                    <div class="input-field">
                        <input class="input-input" type="email" name="email" placeholder=" " autocomplete="off" id="correo">
                        <label class="input-label" for="correo">correo</la>
                    </div>

                    <div class="input-field">
                        <input class="input-input" type="password" name="password" placeholder=" " id="password">
                        <label class="input-label" for="password">contraseña</label>
                    </div>
                    
                    <button class="login-btn">Registrarse</button>
                </form>

                <div class="login-options">
                    <a href="loginrecuperar.html">Recuperar contraseña</a>
                    <a href="login.html">Iniciar sesión</a>
                </div>
            </div>
        </main>
    </div>
</div>

@endsection
    
