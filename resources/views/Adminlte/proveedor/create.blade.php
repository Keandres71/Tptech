@extends('layouts.app')

@section('template_title')
    Create Proveedor
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear proveedor</span>
                        <div class="float-right">
                            <a href="{{ route('AdminLte.proveedors.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">Atrás</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('AdminLte.proveedors.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('AdminLte.proveedor.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
