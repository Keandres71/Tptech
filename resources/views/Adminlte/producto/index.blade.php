@extends('Adminlte.layouts')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Administrar productos') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('AdminLte.productos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Nuevo producto') }}
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

										<th>Categoria</th>
										<th>Idpro</th>
										<th>Nombre</th>
										<th>Descripcion</th>
										<th>Val Unit</th>
										<th>Active</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="reportes-table-body">
                                    @forelse ($productos as $producto)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $producto->categoria->tipo }}</td>
											<td>{{ $producto->proveedor->rsoc }}</td>
											<td>{{ $producto->nombre }}</td>
											<td>{{ $producto->descripcion }}</td>
											<td>{{ $producto->val_unit }}</td>
                                            <td>
                                                @can('productos.active')
                                                    <form action="{{ route('productos.active') }}" method="POST" class="d-inline">
                                                        {{ method_field('PATCH') }}
                                                        @csrf
                                                        {{-- Este input es para guardar el ID del producto --}}
                                                        <input type="hidden" value="{{ $producto->id }}" name="i">
                                                        @if ($producto->active == 1)
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
                                                <a class="btn btn-sm btn-success" href="{{ route('AdminLte.productos.edit',$producto->id) }}"><i class="fa fa-fw fa-edit editar-inline"></i>Editar</a>
                                                @can('usuarios.destroy')
                                                    <form action="{{ route('AdminLte.productos.destroy',$producto->id) }}" method="POST" class="form-delete eliminar-inline">                                                        
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm eliminar "><i class="fa fa-fw fa-trash"></i>Eliminar</button>
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
                {!! $productos->links() !!}
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/plugins/sweetalert.js') }}"></script>
@endsection