@extends('Adminlte.layouts')
@section('content')

<div class="container py-5 text-center">
    @if (isset($usuario))
        <h1 class="reportes-titulo">Editar Usuario</h1>
    @else
        <h1 class="reportes-titulo">Crear Usuario</h1>
    @endif

    @if (isset($usuario))
        <form action="{{ route('usuarios.update', $usuario)}}" method="post">
            @method('PUT')
    @else
        <form action="{{route('usuarios.store')}}" method="post">
    @endif

    @csrf
        <div class="productos-form-container">
            <div class="form-group">
                <label for="name" class="reportes-label">Nombre</label>
                <input type="text" name="name" class="form-comtrol" placeholder="Nombre..."
                value="{{old('name')??@$usuario->name}}">
            </div>


            <div class="form-group">
                <label for="apellido" class="reportes-label">Apellido</label>
                <input type="text" name="apellido" class="form-comtrol" placeholder="Apellido"
                value="{{old('apellido')??@$usuario->apellido}}">
            </div>

            <div class="form-group">
                <label for="email" class="reportes-label">Email</label>
                <input type="email" name="email" class="form-comtrol" placeholder="Email..."
                value="{{old('email')??@$usuario->email}}">
            </div>

            <div class="form-group">
                <label for="tipo_doc" class="reportes-label">Tipo documento</label>
                <select   id="documento" name="tipo_doc">
                    <option value="Cedula de ciudadania">Cc</option>
                    <option value="Tarjeta de identidad">Ti</option>
                </select>
            </div>

            <div class="form-group">
                <label for="num_doc" class="reportes-label">Numero documento</label>
                <input type="number" name="num_doc" class="form-comtrol" placeholder="Numero Documento..."
                value="{{old('num_doc')??@$usuario->num_doc}}">
            </div>

            <div class="form-group">
                <label for="fecha_nac" class="reportes-label">Fecha de nacimiento</label>
                <input type="date" name="fecha_nac" class="form-comtrol" placeholder="Fecha Nacimiento..."
                value="{{old('fecha_nac')??@$usuario->fecha_nac}}">
            </div>

            <div class="form-group">
                <label for="password" class="reportes-label">Contraseña</label>
                <input type="password" name="password" value="{{old('password')??@$usuario->password}}"></input>
            </div>


                <div class="form-group">
                    <label for="tel" class="reportes-label">Celular</label>
                    <input type="number" name="tel" class="form-comtrol" placeholder="Celular..."
                    value="{{old('tel')??@$usuario->tel}}">
                </div>

                <div class="form-group">
                    <label for="ciudad" class="reportes-label">Ciudad</label>
                    <input type="text" name="ciudad" class="form-comtrol" placeholder="Ciudad..."
                    value="{{old('ciudad')??@$usuario->ciudad}}">
                </div>

                <div class="form-group">
                    <label for="dire" class="reportes-label">Direccion</label>
                    <input type="text" name="dire" class="form-comtrol" placeholder="Direccion explicita..."
                    value="{{old('dire')??@$usuario->dire}}">
                </div>
            </div>


            <div class="botones">
            @if (isset($usuario))
            <button type="submit" class="boton agregar">Editar usuario</button>
            <button class="boton cancelar"><a href="{{route('usuarios.index')}}">Cancelar</a></button>
            @else
            <button type="submit" class="boton agregar">Guardar usuario</button>
            <button class="boton cancelar"><a href="{{route('usuarios.index')}}">Cancelar</a></button>
            @endif

            </div>
        </form>
    </div>



@endsection
