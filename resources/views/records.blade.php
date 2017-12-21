@extends('vendor.adminlte.layouts.app')
@section('main-content')
<div class="box">
    <div class="box-header">
        <a id="addform" href="{{ route('indexes.store')  }}" class="btn bg-purple btn-xs" data-toggle="tooltip" data-placement="top" title="Crear historia"><span class="fa fa-plus"></span> Registrar</a>
        <a class="btn bg-purple btn-xs" data-toggle="tooltip" data-placement="top" title="Buscar por campo" id="searchrec"><span class="fa fa-search"></span> Busqueda avanzada</a>
    </div>
    <div class="box-body table-responsive">
        <table id="records-table" class="table table-striped table-bordered table-hover table-condensed" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th># Historia</th>
                    <th>Cedula</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Nacimiento</th>
                    <th>Ingreso</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody></tbody>
            <tfoot style="display: none">
                <tr>
                    <th># Historia</th>
                    <th>Cedula</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Nacimiento</th>
                    <th>Ingreso</th>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@include('form')
@include('showrecords')
@endsection