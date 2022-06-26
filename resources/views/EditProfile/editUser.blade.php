@extends('layouts.plantilla')

@section('content')

<div class="form-container">
    <h2 class="saludo">Actualizar Datos</h2>
    <a href="{{ route('NewPassword') }}"> Cambiar contraseña</a>
    @include('layouts.mensaje-error')
    <form action="{{route('changeProfile')}}" method="POST">
        @csrf
        @method('PUT')

        <input type="hidden" name="id" value="{{$usuario->id}}">

        <div class="input-field">
            <input class="input-input" type="text" name="name" placeholder=" " autocomplete="off" id="name" value="{{ $usuario->name }}">
            <label class="input-label" for="name">Nombre</la>
        </div>
        @error('name')
        <p>
            * {{ $message }}
        </p>                   
        @enderror

        <div class="input-field">
            <input class="input-input" type="text" name="apellido" placeholder=" " autocomplete="off" id="apellido" value="{{ $usuario->apellido }}">
            <label class="input-label" for="apellido">Apellido</la>
        </div>

        @error('apellido')
        <p>
            * {{ $message }}
        </p>                   
        @enderror

        <div class="input-field">
            <input class="input-input" type="email" name="email" placeholder=" " autocomplete="off" id="email" value="{{ $usuario->email }}">
            <label class="input-label" for="email">correo</la>
        </div>

        @error('email')
        <p>
            * {{ $message }}
        </p>                   
        @enderror

        <div class="input-field">
            <input class="input-input" type="date" name="fecha_nac" placeholder=" " autocomplete="off" id="fecha_nac" value="{{ $usuario->fecha_nac }}">
            <label class="input-label" for="fecha_nac">Fecha de nacimiento</la>
        </div>

        @error('fecha_nac')
        <p>
            * {{ $message }}
        </p>                   
        @enderror

        <div class="form-group">
            <label for="tipo_doc" class="reportes-label">Tipo documento</label>
            <select   id="documento" name="tipo_doc" value="{{ $usuario->tipo_doc }}">
                <option value="Cedula de ciudadania">Cc</option>
                <option value="Tarjeta de identidad">Ti</option>
            </select>
        </div>
<br>
        <div class="input-field">
            <input class="input-input" type="number" name="num_doc" placeholder=" " autocomplete="off" id="num_doc" value="{{ $usuario->num_doc }}">
            <label class="input-label" for="num_doc">Numero de documento</la>
        </div>

        <div class="input-field">
            <input class="input-input" type="number" name="tel" placeholder=" " autocomplete="off" id="tel" value="{{ $usuario->tel }}">
            <label class="input-label" for="tel">Celular</la>
        </div>

        <div class="input-field">
            <input class="input-input" type="text" name="ciudad" placeholder=" " autocomplete="off" id="ciudad" value="{{ $usuario->ciudad }}">
            <label class="input-label" for="ciudad">Ciudad</la>
        </div>

        <div class="input-field">
            <input class="input-input" type="text" name="dire" placeholder=" " autocomplete="off" id="dire" value="{{ $usuario->dire }}">
            <label class="input-label" for="dire">Direccion Explicita</la>
        </div>



        @error('password')
            <p>
                * {{ $message }}
            </p> 
        @enderror
        <button type="submit"  class="login-btn">
            Guardar Cambios
        </button>

    </form>

</div>
    
@endsection