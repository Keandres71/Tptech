@extends('Adminlte.layouts')

@section('content')
@section('css')
<link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop
    
<h1 class="reportes-titulo">Reportes de venta</h1>
    <div class="grid-reportes">
        <div class="reportes-sidebar">
            <form action="">
                <div class="form-group">
                    <label for="usuario" class="reportes-label">Elige el usuario</label>
                    <select name="usuario" id="usuario">
                        <option value="">Todos</option>
                        <option value="">...</option>
                        <option value="">...</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tipo" class="reportes-label">Elige el tipo de reporte</label>
                    <select name="tipo" id="tipo" class="input">
                        <option value="">Todos</option>
                        <option value="">...</option>
                        <option value="">...</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="date-inicio" class="reportes-label">Fecha desde</label>
                    <input type="date" name="date-inicio" id="date-inicio">
                </div>
                <div class="form-group">
                    <label for="date-inicio" class="reportes-label">Fecha hasta</label>
                    <input type="date" name="date-inicio" id="date-inicio">
                </div>

                <button class="reportes-button">Consultar</button>
                <button class="reportes-button">Generar PDF</button>
                <button class="reportes-button">Exportar a Excel</button>
            </form>
        </div>

        <div class="reportes-data">
            <table class="reportes-table">
                <thead class="reportes-table-head">
                    <th>Titulo</th>
                    <th>Titulo</th>
                    <th>Titulo</th>
                    <th>Titulo</th>
                    <th>Titulo</th>
                </thead>
                <tbody class="reportes-table-body">
                    <tr>
                        <td>Data</td>
                        <td>Data</td>
                        <td>Data</td>
                        <td>Data</td>
                        <td>Data</td>
                    </tr>
                    <tr>
                        <td>Data</td>
                        <td>Data</td>
                        <td>Data</td>
                        <td>Data</td>
                        <td>Data</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection