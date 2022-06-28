@extends('Adminlte.layouts')

@section('plugins.DateRangePicker', true)

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Administrar ventas') }}
                            </span>
                            @can('reporte.venta.rango')
                                <form action="{{ route('reporte.venta.rango') }}" method="POST">
                                    @csrf
                                    <input id="fechaInicial" name="fechaInicial" type="hidden">
                                    <input id="fechaFinal" name="fechaFinal" type="hidden">
                                    <button type="button" class="btn btn-default pull-right" id="daterange-btn">

                                        <span><i class="fa fa-calendar"></i> Rango de fecha</span>

                                        <i class="fa fa-caret-down"></i>

                                    </button>
                                    <button type="submit" class="btn btn-primary btn-sm">Traer reporte <i class="fa fa-file"></i></button>
                                </form>
                            @endcan                            
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="reportes-table">

                                <thead class="reportes-table-head">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Codigo</th>
										<th>Cliente</th>
										<th>Total</th>
										<th>Metodo pago</th>
										<th>Fecha</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                @include('layouts.mensaje-error')
                                <tbody class="reportes-table-body">
                                    @forelse ($ventas as $venta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $venta->codigo }}</td>
											<td>{{ $venta->user->name }}</td>
											<td>{{ $venta->total }}</td>
											<td>{{ $venta->metodo_pago }}</td>
											<td>{{ $venta->fecha_venta }}</td>

                                            <td>
                                                @can('usuarios.destroy')
                                                    <form action="{{ route('AdminLte.ventas.destroy',$venta->id) }}" method="POST" class="form-delete">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                    </form>
                                                @endcan
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <p style="text-align: center"> No hay ventas disponibles</p>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $ventas->links() !!}
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/plugins/sweetalert.js') }}"></script>
    <script src="{{ asset('js/views/venta-rango.js') }}"></script>
@endsection
