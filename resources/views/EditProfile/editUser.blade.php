@extends('layouts.plantilla')

@section('content')

<div class="form-container">
    <h2 class="saludo">Actualizar Datos</h2>
    <form action="{{route('changePassword')}}" method="POST">
        @csrf
        <div class="input-field">
            <input class="input-input" type="text" name="name" placeholder=" " autocomplete="off" id="name" value="{{ Auth::user()->name }}">
            <label class="input-label" for="name">Nombre</la>
        </div>
        @error('name')
        <p>
            * {{ $message }}
        </p>                   
        @enderror
{{-- 
        <div class="input-field">
            <input class="input-input" type="text" name="apellido" placeholder=" " autocomplete="off" id="apellido" value="{{ Auth::user()->apellido }}">
            <label class="input-label" for="apellido">Apellido</la>
        </div>

        @error('apellido')
        <p>
            * {{ $message }}
        </p>                   
        @enderror

        <div class="input-field">
            <input class="input-input" type="email" name="email" placeholder=" " autocomplete="off" id="email" value="{{ Auth::user()->email }}">
            <label class="input-label" for="email">correo</la>
        </div>

        @error('email')
        <p>
            * {{ $message }}
        </p>                   
        @enderror

        <div class="input-field">
            <input class="input-input" type="date" name="fecha_nac" placeholder=" " autocomplete="off" id="fecha_nac" value="{{ Auth::user()->fecha_nac }}">
            <label class="input-label" for="fecha_nac">Fecha de nacimiento</la>
        </div>

        @error('fecha_nac')
        <p>
            * {{ $message }}
        </p>                   
        @enderror

        <div class="form-group">
            <label for="tipo_doc" class="reportes-label">Tipo documento</label>
            <select   id="documento" name="tipo_doc" value="{{ Auth::user()->tipo_doc }}">
                <option value="Cedula de ciudadania">Cc</option>
                <option value="Tarjeta de identidad">Ti</option>
            </select>
        </div>
<br>
        <div class="input-field">
            <input class="input-input" type="number" name="num_doc" placeholder=" " autocomplete="off" id="num_doc" value="{{ Auth::user()->num_doc }}">
            <label class="input-label" for="num_doc">Numero de documento</la>
        </div>

        <div class="input-field">
            <input class="input-input" type="number" name="tel" placeholder=" " autocomplete="off" id="tel" value="{{ Auth::user()->tel }}">
            <label class="input-label" for="tel">Celular</la>
        </div>

        <div class="input-field">
            <input class="input-input" type="text" name="ciudad" placeholder=" " autocomplete="off" id="ciudad" value="{{ Auth::user()->ciudad }}">
            <label class="input-label" for="ciudad">Ciudad</la>
        </div>

        <div class="input-field">
            <input class="input-input" type="text" name="dire" placeholder=" " autocomplete="off" id="dire" value="{{ Auth::user()->dire }}">
            <label class="input-label" for="dire">Direccion Explicita</la>
        </div> --}}


        <div class="input-field">
            <input class="input-input" type="password" name="password_actual" placeholder=" " id="password_actual">
            <label class="input-label" for="password_actual">Contraseña actual</label>
        </div>

        @error('password_actual')
        <p>
            * {{ $message }}
        </p>                   
        @enderror

        <div class="input-field">
            <input class="input-input" type="password" name="password" placeholder=" " id="password">
            <label class="input-label" for="new_password">Contraseña nueva</label>
        </div>

        
        @error('password')
        <p>
            * {{ $message }}
        </p>                   
        @enderror

        <div class="input-field">
            <input class="input-input" type="password" name="confirm_password" placeholder=" " id="confirm_password">
            <label class="input-label" for="confirm_password">confirmar contraseña</label>
        </div>

        @error('password_confirmation')
        <p>
            * {{ $message }}
        </p>                   
        @enderror
        
        <button type="submit"  class="login-btn">
            Guardar Cambios
        </button>
    </form>

{{--                 <div class="login-options">
        <a href="loginrecuperar.html">Recuperar contraseña</a>
        <a href="login.html">Iniciar sesión</a>
    </div> --}}
</div>
    
@endsection