<div class="modal fade" id="modal-showr" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="exampleModalLabel"></h4>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table id="" class="table table-striped table-bordered table-hover table-condensed">       
            <tbody>

        <tr>
          
            <th class="col-md-3">Historia:</th>
            <td class="col-md-3">1321312</td>
            
            <th class="col-md-3">Cedula:</th>
            <td class="col-md-3">155133</td>
  
        </tr>
        <tr>
          <th colspan="" >Nombres:</th>
            <td class="">Emanuel Surveyor</td>

            <th colspan="" >Apellidos:</th>
            <td class="">Parra Coello</td>
            
        </tr>
        <tr>
          <th colspan="" >Sexo:</th>
          <td class="">Masculino</td>

          <th colspan="" >Fecha de nacimiento:</th>
          <td class="">13/12/1993</td>
            
        </tr>
      <tr>
          <th colspan="" >Fecha de ingreso:</th>
          <td class="">14/02/2007</td>
          <th colspan="" >Fecha de egreso:</th>
          <td class="">15/01/2008</td>
        </tr>

        <tr>
          <th colspan="" >Estado:</th>
          <td class="">Zulia</td>
          <th colspan="" >Municipio:</th>
          <td class="">Maracaibo</td>
        </tr>

        <tr>
          <th colspan="" >Parroquia:</th>
          <td class="">Raul Leoni</td>
          <th colspan="" >Pais extranjero:</th>
          <td class="">Colombia</td>
        </tr>

        <tr>
          <th>Observacion del paciente:</th>
          <td class="" colspan="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </td>
        </tr>
    </tbody>
        </table>

        </div>
       

         <form>
          {{ csrf_field() }} {{ method_field('POST') }}
          <input type="hidden" id="id" name="id">
     

                
        
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
      </form>
    </div>
  </div>
</div>




{{-- div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form method="POST" class="form-horizontal" data-toggle="validator">
        {{ csrf_field() }} {{ method_field('POST') }}
    
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center"></h4>
      </div>
      <div class="modal-body">
         <div class="box-body">
            <div>
               <div class="col-md-6">
                  <div class="form-group">
                     <div class="col-md-10">
                         <div class="input-group">
                          <div class="input-group-addon">
                              <span class="fa fa-file-text text-primary"></span>
                           </div>
                           <input type="text" id="numbh" class="form-control" placeholder="Numero de historia"> 
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Necesario ingresar por lo menos 7 digitos.</small>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <div class="col-md-3">
                        <select id="typedoc" class="form-control">
                            <option value="Venezolano">V</option>
                            <option value="Extranjero">E</option>
                            <option value="N">N/p</option>
                        </select>
                        <small id="emailHelp" class="form-text text-muted">Cedula</small>
                     </div>
                     <div class="col-md-7">
                         <div class="input-group">
                          <div class="input-group-addon">
                              <span class="fa fa-id-card text-primary"></span>
                           </div>
                           <input type="text" id="numbh" class="form-control" placeholder="Numero de cedula">
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
                           <input type="text" id="numbh" class="form-control" placeholder="Nombres">
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
                           <input type="text" id="numbh" class="form-control" placeholder="Apellidos">
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
                           <select id="typedoc" class="form-control">
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                           </select> 
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
                           <select id="typedoc" class="form-control">
                            <option value="Zulia">Zulia</option>
                            <option value="Barinas">Barinas</option>
                            <option value="Falcon">Falcon</option>
                           </select>
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
                           <select id="typedoc" class="form-control">
                            <option value="Zulia">Maracaibo</option>
                            <option value="Barinas">Barinas</option>
                            <option value="Falcon">Falcon</option>
                           </select>
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
                           <select id="typedoc" class="form-control">
                            <option value="Zulia">Raul Leoni</option>
                            <option value="Barinas">Barinas</option>
                            <option value="Falcon">Falcon</option>
                           </select>
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
                           <select id="typedoc" class="form-control">
                            <option value="Zulia">Colombia</option>
                            <option value="Barinas">Barinas</option>
                            <option value="Falcon">Falcon</option>
                           </select> 
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Seleccione el pais de donde proviene del paciente.</small>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <div class="col-md-10">
                     <textarea size="x2" class="form-control" placeholder="Observaciones">
                     </textarea>
                        <small id="emailHelp" class="form-text text-muted">Ingrese obervaciones acerca del paciente o su historia.</small>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-save"><span class="fa fa-plus"></span> Guardar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </form>
    </div>
  </div>
</div> --}}