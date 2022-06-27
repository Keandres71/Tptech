@extends('Adminlte.layouts')

@section('content')

    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Asignar roles</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-danger" href="{{ route('usuarios.index') }}">Atrás</a>
                        </div>
                    </div>
                    @include('layouts.mensaje-error')
                    <div class="card-body">

                        <p class="h5">Nombre:</p>
                        <p class="form-control">{{ $user->name }}</p>

                        <h2 class="h5" style="text-align: left">Listado de roles</h2>

                        {!! Form::model($user, ['route' => ['usuarios.asignar', $user], 'method' => 'post']) !!}
                            @csrf
                            @foreach ($roles as $role)
                                <div>
                                    <label>
                                        {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                                        {{ $role->name }}
                                    </label>
                                </div>
                            @endforeach

                            {!! Form::submit('Guardar', ['class' => 'btn btn-primary btn-block']) !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
