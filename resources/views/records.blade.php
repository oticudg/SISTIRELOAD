@extends('vendor.adminlte.layouts.app')
@section('main-content')
<div class="box box-info">
    <div class="box-header with-border text-center">
        <h3 class="box-title">Viejas historias registradas</h3>
    </div>
    <div class="box-header">
        <a class="btn bg-purple btn-xs btn-flat" data-toggle="tooltip" data-placement="top" title="Buscar por campo" id="searchrec"><span class="fa fa-search"></span> Busqueda avanzada</a>
    </div>
    <div class="box-header with-border" id="header2" style="display: none">
        <form id="searchrec1" method="POST" role="form">
            <div class="row"> 
                <div class="form-group col-md-3">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="fa fa-file-text text-purple"></span>
                        </div>
                        <input type="text" class="form-control input-sm" id="number_record" name="number_record" pattern="[0-9]{1,11}" title="Ingrese solo numeros, entre 1-11 caracteres" placeholder="Numero de historia">
                    </div>
                    <small id="number_record" class="form-text text-muted">Ingresar por lo menos entre 1-11 digitos.</small>
                </div>
                <div class="form-group col-md-3">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="fa fa-id-card text-purple"></span>
                        </div>
                        <input type="text" id="patient_id" name="patient_id" pattern="[0-9]{4,8}" name="patient_id"  class="form-control input-sm" placeholder="Numero de cedula">
                    </div>
                    <small id="patient_id" class="form-text text-muted">Ingresar entre 4-8 digitos.</small>
                </div>
                <div class="form-group col-md-3">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="fa fa-user-circle text-purple"></span>
                        </div>
                        <input type="text" id="name" name="name" pattern="[A-Za-z ]{1,70}" name="name" class="form-control input-sm" placeholder="Nombres">
                    </div>
                    <small id="name" class="form-text text-muted">Ingrese los nombres del paciente.</small>
                </div>
                <div class="form-group col-md-3">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="fa fa-user-circle-o text-purple"></span>
                        </div>
                        <input type="text" id="last_name" name="last_name" pattern="[A-Za-z ]{1,70}" name="last_name" class="form-control input-sm" placeholder="Apellidos">
                    </div>
                    <small id="last_name" class="form-text text-muted">Ingrese los apellidos del paciente.</small>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-3">
                    <div class="input-group date" data-provide="datepicker">
                        <div class="input-group-addon">
                            <span class="fa fa-calendar text-purple"></span>
                        </div>
                        <input type="text" id="birthdate" name="birthdate" readonly class="form-control input-sm" placeholder="dd/mm/aaaa">
                    </div>
                    <small id="emailHelp" class="form-text text-muted">Ingrese la fecha de nacimiento del paciente.</small>
                </div>
                <div class="form-group col-md-3">
                    <button type="submit" class="btn bg-purple btn-sm btn-flat" data-toggle="tooltip" data-placement="top" title="Buscar filtros"><span class="fa fa-search"></span> Buscar</button>
                </div>
            </div>        
        </form>
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
                    <th>Acciones</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@include('form')
@include('showrecords')
@endsection