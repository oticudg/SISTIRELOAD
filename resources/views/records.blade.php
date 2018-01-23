@extends('vendor.adminlte.layouts.app')
@section('main-content')
<div class="box">
     <div class="box-header">
        <a id="addform" href="{{ route('indexes.store')  }}" class="btn bg-purple btn-xs" data-toggle="tooltip" data-placement="top" title="Crear historia"><span class="fa fa-plus"></span> Registrar</a>
        <a class="btn bg-purple btn-xs" data-toggle="tooltip" data-placement="top" title="Buscar por campo" id="searchrec"><span class="fa fa-search"></span> Busqueda avanzada</a>
    </div>
    <div class="box-header" id="header2" style="display: none">
        <form id="searchrec2" method="POST" role="form">
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
                                <input type="text" id="patient_id" name="patient_id" pattern="[0-9]{1,8}" name="patient_id"  class="form-control input-sm" placeholder="Numero de cedula">
                            </div>
                            <small id="patient_id" class="form-text text-muted">Ingresar entre 1-8 digitos.</small>
                        </div>
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-user-circle text-purple"></span>
                                </div>
                                <input type="text" id="name" name="name" pattern="[A-Za-z]{1,70}" name="name" class="form-control input-sm" placeholder="Nombres">
                            </div>
                            <small id="name" class="form-text text-muted">Ingrese los nombres del paciente.</small>
                        </div>
                        <div class="form-group col-md-3">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-user-circle-o text-purple"></span>
                                </div>
                                <input type="text" id="last_name" name="last_name" pattern="[A-Za-z]{1,70}" name="last_name" class="form-control input-sm" placeholder="Apellidos">
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
                                <input type="text" id="birthdate" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" name="birthdate" class="form-control input-sm" placeholder="dd/mm/aaaa">
                            </div>
                            <small id="emailHelp" class="form-text text-muted">Ingrese la fecha de nacimiento del paciente.</small>
                        </div>
                        <div class="form-group col-md-3">
                            <div class="input-group date" data-provide="datepicker">
                                <div class="input-group-addon">
                                    <span class="fa fa-calendar text-purple"></span>
                                </div>
                                <input type="text" class="form-control input-sm" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" id="admission_date" name="admission_date" placeholder="dd/mm/aaaa">
                            </div>
                            <small id="emailHelp" class="form-text text-muted">Ingrese la fecha de ingreso del paciente.</small>
                        </div>
                        <div class="form-group col-md-3">
                         <button type="submit" class="btn bg-purple btn-sm" data-toggle="tooltip" data-placement="top" title="Buscar filtros"><span class="fa fa-search"></span> Buscar</button>
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
                    <th>Ingreso</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>
@include('form')
@include('showrecords')
@endsection