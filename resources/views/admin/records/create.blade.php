@extends('vendor.adminlte.layouts.app')
@section('main-content')
<div class="container-fluid spark-screen">
      <!-- Default box -->
      <div class="box box-info">
         <div class="box-header with-border text-center" style="padding: 7px;">
            <i class="box-title text-info" style="font-size: 16px;">Creacion de historia</i>
         </div>
         <div class="box-body">
            <div class="container">
               {!! Form::open(['route' => 'users.store', 'method' => 'POST','class' => 'form-horizontal']) !!}
               <div class="col-md-6">
                  <div class="form-group">
                     <div class="col-md-10">
                         <div class="input-group">
                          <div class="input-group-addon">
                              <span class="fa fa-file-text text-primary"></span>
                           </div> 
                           {!! Form::text('numbh', null, ['class' => 'form-control','required', 'placeholder' => 'Numero de historia']) !!}
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Es necesario ingresar por lo menos 7 digitos.</small>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <div class="col-md-2">
                        {!! Form::select('typedoc', ['Venezolano' => 'V', 'Extranjero'=> 'E',  'N'=> 'N/p'], null, ['class' => 'form-control','required'] ) !!}
                        <small id="emailHelp" class="form-text text-muted">Nacionalidad.</small>
                     </div>
                     <div class="col-md-8">
                         <div class="input-group">
                          <div class="input-group-addon">
                              <span class="fa fa-id-card text-primary"></span>
                           </div> 
                           {!! Form::text('numbh', null, ['class' => 'form-control','required', 'placeholder' => 'Numero de cedula']) !!}
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Es necesario ingresar entre 5-8 digitos.</small>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <div class="col-md-10">
                         <div class="input-group">
                          <div class="input-group-addon">
                              <span class="fa fa-user-circle text-primary"></span>
                           </div> 
                           {!! Form::text('numbh', null, ['class' => 'form-control','required', 'placeholder' => 'Nombres']) !!}
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Ingrese los nombres del paciente.</small>
                     </div>
                  </div>
               </div> 
               <div class="col-md-6">
                  <div class="form-group">
                     <div class="col-md-10">
                         <div class="input-group">
                          <div class="input-group-addon">
                              <span class="fa fa-user-circle-o text-primary"></span>
                           </div> 
                            {!! Form::text('numbh', null, ['class' => 'form-control','required', 'placeholder' => 'Apellidos']) !!}
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Ingrese los apellidos del paciente.</small>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <div class="col-md-10">
                         <div class="input-group">
                          <div class="input-group-addon">
                              <span class="fa fa-venus-mars text-primary"></span>
                           </div> 
                           {!! Form::select('typedoc', ['Masculino' => 'Masculino', 'Femenino'=> 'Femenino'], null, ['class' => 'form-control','required'] ) !!}
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Seleccione el sexo del paciente.</small>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <div class="col-md-10">
                         <div class="input-group date" data-provide="datepicker">
                          <div class="input-group-addon">
                              <span class="fa fa-calendar text-primary"></span>
                           </div> 
                            <input type="text" class="form-control" placeholder="dd/mm/aaaa">
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Ingrese la fecha de nacimiento del paciente.</small>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <div class="col-md-10">
                         <div class="input-group date" data-provide="datepicker">
                          <div class="input-group-addon">
                              <span class="fa fa-calendar text-primary"></span>
                           </div> 
                            <input type="text" class="form-control" placeholder="dd/mm/aaaa">
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Ingrese la fecha de ingreso del paciente.</small>
                     </div>
                  </div>
               </div> 
               <div class="col-md-6">
                  <div class="form-group">
                     <div class="col-md-10">
                         <div class="input-group date" data-provide="datepicker">
                          <div class="input-group-addon">
                              <span class="fa fa-calendar text-primary"></span>
                           </div> 
                            <input type="text" class="form-control" placeholder="dd/mm/aaaa">
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Ingrese la fecha de egreso del paciente.</small>
                     </div>
                  </div>
               </div>  
               <div class="col-md-6">
                  <div class="form-group">
                     <div class="col-md-10">
                         <div class="input-group">
                          <div class="input-group-addon">
                              <span class="fa fa-map text-primary"></span>
                           </div> 
                            {!! Form::select('typedoc', ['Masculino' => 'Zulia', 'Femenino'=> 'Femenino'], null, ['class' => 'form-control','required'] ) !!}
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Seleccione el estado de donde proviene del paciente.</small>
                     </div>
                  </div>
               </div> 
               <div class="col-md-6">
                  <div class="form-group">
                     <div class="col-md-10">
                         <div class="input-group">
                          <div class="input-group-addon">
                              <span class="fa fa-map text-primary"></span>
                           </div> 
                            {!! Form::select('typedoc', ['Masculino' => 'Maracaibo', 'Femenino'=> 'Femenino'], null, ['class' => 'form-control','required'] ) !!}
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Seleccione el municipio de donde proviene del paciente.</small>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <div class="col-md-10">
                         <div class="input-group">
                          <div class="input-group-addon">
                              <span class="fa fa-map text-primary"></span>
                           </div> 
                            {!! Form::select('typedoc', ['Masculino' => 'Raul Leoni', 'Femenino'=> 'Femenino'], null, ['class' => 'form-control','required'] ) !!}
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Seleccione la parroquia de donde proviene del paciente.</small>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <div class="col-md-10">
                         <div class="input-group">
                          <div class="input-group-addon">
                              <span class="fa fa-globe text-primary"></span>
                           </div> 
                             {!! Form::select('typedoc', ['Masculino' => 'Colombia', 'Femenino'=> 'Femenino'], null, ['class' => 'form-control','required'] ) !!}
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Seleccione el pais de donde proviene del paciente.</small>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <div class="col-md-10">
                        {!! Form::textarea('obs', null, ['class' => 'form-control','size' => 'x2', 'placeholder' => 'Observaciones']) !!}
                        <small id="emailHelp" class="form-text text-muted">Ingrese obervaciones acerca del paciente o su historia.</small>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="box-footer">
            <button type="submit" class="btn btn-sm btn-primary pull-right"><span class="fa fa-plus"></span> Guardar</button>
         </div>
         {!! Form::close() !!}
      </div>
</div>
@endsection