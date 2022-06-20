@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idcag:</strong>
                            {{ $producto->idcag }}
                        </div>
                        <div class="form-group">
                            <strong>Idpro:</strong>
                            {{ $producto->idpro }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $producto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $producto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Val Unit:</strong>
                            {{ $producto->val_unit }}
                        </div>
                        <div class="form-group">
                            <strong>Active:</strong>
                            {{ $producto->active }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
