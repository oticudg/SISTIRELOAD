@extends('vendor.adminlte.layouts.app')
@section('main-content')
<div class="box box-info">
    <div class="box-header with-border text-center">
        <h3 class="box-title">VIEJAS HISTORIAS REGISTRADAS</h3>
    </div>
    <div class="box-header">
        <a class="btn bg-purple btn-xs btn-flat" data-toggle="tooltip" data-placement="top" title="BUSCAR POR CAMPO" id="searchrec"><span class="fa fa-search"></span> BÚSQUEDA AVANZADA</a>
    </div>
    <div class="box-header with-border" id="header2" style="display: none">
        <form id="searchrec1" method="POST" role="form">
            <div class="row"> 
                <div class="form-group col-md-3">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="fa fa-file-text text-purple"></span>
                        </div>
                        <input type="text" class="form-control input-sm" id="number_record" name="number_record" pattern="[0-9]{1,11}" placeholder="NÚMERO DE HISTORIA">
                    </div>
                    <small class="form-text text-muted">POR LO MENOS ENTRE 1-11 DÍGITOS.</small>
                </div>
                <div class="form-group col-md-3">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="fa fa-id-card text-purple"></span>
                        </div>
                        <input type="text" id="patient_id" name="patient_id" pattern="[0-9]{4,8}" name="patient_id"  class="form-control input-sm" placeholder="NÚMERO DE CÉDULA">
                    </div>
                    <small class="form-text text-muted">POR LO MENOS ENTRE 4-8 DÍGITOS.</small>
                </div>
                <div class="form-group col-md-3">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="fa fa-user-circle text-purple"></span>
                        </div>
                        <input type="text" id="name" name="name" pattern="[A-Za-z ]{1,70}" name="name" class="form-control input-sm" placeholder="NOMBRES">
                    </div>
                    <small class="form-text text-muted">NOMBRES DEL PACIENTE.</small>
                </div>
                <div class="form-group col-md-3">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="fa fa-user-circle-o text-purple"></span>
                        </div>
                        <input type="text" id="last_name" name="last_name" pattern="[A-Za-z ]{1,70}" name="last_name" class="form-control input-sm" placeholder="APELLIDOS">
                    </div>
                    <small class="form-text text-muted">APELLIDOS DEL PACIENTE.</small>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-3">
                    <div class="input-group date" data-provide="datepicker">
                        <div class="input-group-addon">
                            <span class="fa fa-calendar text-purple"></span>
                        </div>
                        <input type="text" id="birthdate" name="birthdate" readonly class="form-control input-sm" placeholder="DD/MM/AAAA">
                    </div>
                    <small class="form-text text-muted">FECHA DE NACIMIENTO DEL PACIENTE.</small>
                </div>
                <div class="form-group col-md-3">
                    <button type="submit" class="btn bg-purple btn-sm btn-flat" data-toggle="tooltip" data-placement="top" title="BUSCAR FILTROS"><span class="fa fa-search"></span> BUSCAR</button>
                </div>
            </div>        
        </form>
    </div>
    <div class="box-body table-responsive">
        <table id="records-table" class="table table-striped table-bordered table-hover table-condensed" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th># HISTORIA</th>
                    <th>CÉDULA</th>
                    <th>NOMBRES</th>
                    <th>APELLIDOS</th>
                    <th>F. NACIMIENTO</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@include('form')
@include('showrecords')
@endsection