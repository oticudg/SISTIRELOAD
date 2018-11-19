@extends('vendor.adminlte.layouts.app')
@section('main-content')
<div class="box box-danger">
    <div class="box-header with-border text-center">
        <h3 class="box-title">USUARIOS REGISTRADOS</h3>
    </div>
    <div class="box-header with-border">
        <a id="addform" onclick="addForm()"  href="#" class="btn bg-purple btn-xs btn-flat" data-toggle="tooltip" data-placement="top" title="CREAR USUARIO"><span class="fa fa-plus"></span> REGISTRAR</a>
    </div>
    <div class="box-body table-responsive">
        <table id="user-table" class="table table-striped table-bordered table-hover table-condensed" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>CORREO</th>
                    <th>TIPO</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@include('formUsers')
@endsection