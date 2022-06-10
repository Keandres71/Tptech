@extends('Adminlte.layouts')
@section('content')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
@stop
  @if (Session::has('mensaje'))
<div class="alert.alert-info.my-5">
{{Session::get('mensaje')}}
@endif  

<h1 class="reportes-titulo">categorias</h1>
<button class="boton agregar"><a href="{{route('AdminLte/categorias.create')}}">Agregar Categoria</a></button>

<div class="reportes-data">
    <table class="reportes-table">
        <thead class="reportes-table-head">
            <th>Codigo</th>
            <th>Tipo</th>
        </thead>
        <tbody class="reportes-table-body">
            <tr>
               @forelse ($categorias as $item)
                    <td>{{$item->id}} </td>
                    <td>{{$item->tipo}}</td>
                </td>
                <div class="botones">
                <td><a href="{{route('AdminLte/categorias.edit',$item)}}"  class="boton editar">  Editar </a>
                <form action="{{route('AdminLte/categorias.destroy',$item)}}" method="post" class="d-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="boton eliminar">Eliminar</button>
                </form>
                
                    </div>
                </td>

            </tr>
             @empty
                   <tr>     
                <td> No hay Categorias Disponibles</td>
            </tr>
            @endforelse           
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
    {!! $categorias->links() !!}
</div>
</div>

@endsection