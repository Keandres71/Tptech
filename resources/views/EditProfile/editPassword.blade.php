@extends('layouts.plantilla')

@section('content')

<div class="form-container">
    <h2 class="saludo">Actualizar Contraseña</h2>
    <form action="{{ route('changePassword') }}" method="post">
        @csrf
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
    
</div>
@endsection