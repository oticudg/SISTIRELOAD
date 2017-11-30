@extends('vendor.adminlte.layouts.app')
@section('main-content')
<div class="box">
<div class="box-header">
	<a {{-- href="{{ route('records.create') }}" --}} onclick="addForm()" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Agregar usuario"><span class="fa fa-plus"></span> Registrar</a>
    <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Buscar por campo" id="searchu"><span class="fa fa-search"></span> Busqueda avanzada</a>
</div>
<div class="box-body table-responsive">
<table id="index-table" class="table table-striped table-bordered table-hover table-condensed" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody></tbody>
    <tfoot style="display: none;">
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <td></td>
        </tr>
    </tfoot>
</table>
</div>
 @include('form')
</div>

@endsection