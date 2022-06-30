@extends('Adminlte.layouts')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Administrar proveedores') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('AdminLte.proveedors.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo proveedor') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @include('layouts.mensaje-error')
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="reportes-table">

                                <thead class="reportes-table-head">
                                    <tr>
                                        <th>No</th>

										<th>Razon social</th>
										<th>Direccion</th>
										<th>Telefono</th>
										<th>Correo</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="reportes-table-body">
                                    @forelse ($proveedors as $proveedor)

                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $proveedor->rsoc }}</td>
											<td>{{ $proveedor->dire }}</td>
											<td>{{ $proveedor->tel }}</td>
											<td>{{ $proveedor->email }}</td>

                                            <td>
                                                <a class="btn btn-sm btn-success" href="{{ route('AdminLte.proveedors.edit',$proveedor->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                @can('usuarios.destroy')
                                                    <form action="{{ route('AdminLte.proveedors.destroy',$proveedor->id) }}" method="POST" class="form-delete eliminar-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                    </form>
                                                @endcan
                                                </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <p style="text-align: center"> No hay proveedores disponibles</p>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $proveedors->links() !!}
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/plugins/sweetalert.js') }}"></script>
@endsection