@extends('Adminlte.layouts')
@section('content')

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">

                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span class="card-title">
                                {{ __('Administrar categorias') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('AdminLte.categorias.create') }}" class="btn btn-primary btm-sm float-right">Nueva categoria</a>
                            </div>

                        </div>

                    </div>

                    <div class="card-body">

                        <table class="reportes-table">

                            <thead class="reportes-table-head">
                                <tr>
                                    <th>#</th>
                                    <th>Nombre categoria</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            @include('layouts.mensaje-error')
                            <tbody class="reportes-table-body">
                                @forelse ($categorias as $categoria)

                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $categoria->tipo }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-success" href="{{ route('AdminLte.categorias.edit',$categoria) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
                                            @can('usuarios.destroy')
                                                <form action="{{route('AdminLte.categorias.destroy',$categoria)}}" method="post" class="d-inline form-delete">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
                                                </form>
                                            @endcan
                                        </td>
                                    </tr>

                                @empty
                                    <tr>
                                        <p style="text-align: center"> No hay categorias disponibles</p>
                                    </tr>
                                @endforelse
                            </tbody>

                        </table>

                    </div>

                    {!! $categorias->links() !!}

                </div>

            </div>

        </div>

    </div>

@endsection

@section('js')
    <script src="{{ asset('js/plugins/sweetalert.js') }}"></script>
@endsection