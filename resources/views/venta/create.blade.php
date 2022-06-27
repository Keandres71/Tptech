@extends('layouts.app')

@section('template_title')
    Create Venta
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear venta</span>
                        <div class="float-right">
                            <a href="{{ route('AdminLte.ventas.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">Atrás</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ventas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('venta.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
