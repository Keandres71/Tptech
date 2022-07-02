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

										<th>Nit</th>
										<th>Direccion</th>
										<th>Telefono</th>
										<th>Correo</th>
                                        <th>Active</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="reportes-table-body">
                                    @forelse ($proveedors as $proveedor)

                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $proveedor->nit }}</td>
											<td>{{ $proveedor->dire }}</td>
											<td>{{ $proveedor->tel }}</td>
											<td>{{ $proveedor->email }}</td>
                                            <td>
                                            @can('proveedors.active')
                                                    <form action="{{ route('proveedors.active') }}" method="POST" class="d-inline">
                                                        {{ method_field('PATCH') }}
                                                        @csrf
                                                        {{-- Este input es para guardar el ID del proveedor --}}
                                                        <input type="hidden" value="{{ $proveedor->id }}" name="i">
                                                        @if ($proveedor->active == 1)
                                                            <input type="hidden" name="active" value="0">
                                                            <button type="submit" class="btn btn-warning">Desactivar</button>
                                                        @else
                                                            <input type="hidden" name="active" value="1">
                                                            <button type="submit" class="btn btn-success">Activar</button>
                                                        @endif
                                                    </form>
                                                @endcan       
                                          </td>

                                            <td>
                                                <a class="btn btn-sm btn-success" href="{{ route('AdminLte.proveedors.edit',$proveedor->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                @can('usuarios.destroy')
                                                    <form action="{{ route('AdminLte.proveedors.destroy',$proveedor->id) }}" method="POST" class="form-delete eliminar-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
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