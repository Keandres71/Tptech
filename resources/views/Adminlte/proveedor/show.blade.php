@extends('layouts.app')

@section('template_title')
    {{ $proveedor->name ?? 'Show Proveedor' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Proveedor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proveedors.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nit:</strong>
                            {{ $proveedor->nit }}
                        </div>
                        <div class="form-group">
                            <strong>Dire:</strong>
                            {{ $proveedor->dire }}
                        </div>
                        <div class="form-group">
                            <strong>Tel:</strong>
                            {{ $proveedor->tel }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $proveedor->email }}
                        </div>
                        <div class="form-group">
                            <strong>Active:</strong>
                            {{ $proveedor->active }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
