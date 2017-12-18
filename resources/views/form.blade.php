<div class="modal fade" id="modalform" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="exampleModalLabel"></h4>
      </div>
      <div class="modal-body">
                           <form id="formu" method="POST">
                            {{ csrf_field() }} {{ method_field('POST') }}
                            <div class="row">
                              <div class="form-group col-md-6">
                                <div class="input-group">
                                            <div class="input-group-addon">
                                                <span class="fa fa-file-text text-primary"></span>
                                             </div>
                                             <input type="text" id="numbh" name="numbh" class="form-control" placeholder="Numero de historia" required> 
                                          </div>
                                          <small id="emailHelp" class="form-text text-muted">Necesario ingresar por lo menos 7 digitos.</small>
                              </div>
                              <div class="form-group col-md-6">
                                <div class="col-md-3">
                                          <select id="typedoc" name="typedoc" class="form-control" required>
                                              <option value="" selected disabled>CI</option>
                                              <option value="Venezolano/a">V</option>
                                              <option value="Extranjero/a">E</option>
                                              <option value="N/p">N/p</option>
                                          </select>
                                          <small id="emailHelp" class="form-text text-muted">Documento</small>
                                       </div>
                                <div class="input-group">
                                            <div class="input-group-addon">
                                                <span class="fa fa-id-card text-primary"></span>
                                             </div>
                                             <input type="text" id="idpatient" name="idpatient" class="form-control" placeholder="Numero de cedula" required>
                                          </div>
                                          <small id="emailHelp" class="form-text text-muted">Es necesario ingresar entre 5-8 digitos.</small>
                              </div>



                              </div>

                              <div class="row">

                                <div class="form-group col-md-6">
                                  <div class="input-group">
                                            <div class="input-group-addon">
                                                <span class="fa fa-user-circle text-primary"></span>
                                             </div> 
                                             <input type="text" id="name" name="name" class="form-control" placeholder="Nombres" required>
                                          </div>
                                          <small id="emailHelp" class="form-text text-muted">Ingrese los nombres del paciente.</small>

                                </div>


                                  <div class="form-group col-md-6">
                                    <div class="input-group">
                                            <div class="input-group-addon">
                                                <span class="fa fa-user-circle-o text-primary"></span>
                                             </div>
                                             <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Apellidos" required>
                                          </div>
                                          <small id="emailHelp" class="form-text text-muted">Ingrese los apellidos del paciente.</small>

                                  </div>

                              </div>

                              <div class="row">

                                <div class="form-group col-md-6">

                                  <div class="input-group">
                                            <div class="input-group-addon">
                                                <span class="fa fa-venus-mars text-primary"></span>
                                             </div>
                                             <select id="sex" name="sex" class="form-control" required>
                                              <option value="" selected disabled>Seleccione un sexo</option>
                                              <option value="Masculino">Masculino</option>
                                              <option value="Femenino">Femenino</option>
                                             </select> 
                                          </div>
                                          <small id="emailHelp" class="form-text text-muted">Ingrese el sexo del paciente.</small>


                                </div>

                                 <div class="form-group col-md-6">
                                  <div class="input-group date" data-provide="datepicker">
                                            <div class="input-group-addon">
                                                <span class="fa fa-calendar text-primary"></span>
                                             </div> 
                                              <input type="text" id="birthdate" name="birthdate" class="form-control" placeholder="dd/mm/aaaa" required>
                                          </div>
                                          <small id="emailHelp" class="form-text text-muted">Ingrese la fecha de nacimiento del paciente.</small>

                                 </div>
                                
                              </div>

                              <div class="row">
                                
                                <div class="form-group col-md-6">
                                  <div class="input-group date" data-provide="datepicker">
                                            <div class="input-group-addon">
                                                <span class="fa fa-calendar text-primary"></span>
                                             </div> 
                                              <input type="text" class="form-control" id="admissiondate" name="admissiondate" placeholder="dd/mm/aaaa" required>
                                          </div>
                                          <small id="emailHelp" class="form-text text-muted">Ingrese la fecha de ingreso del paciente.</small>
                                    
                                </div>

                                <div class="form-group col-md-6">
                                      <div class="input-group date" data-provide="datepicker">
                                            <div class="input-group-addon">
                                                <span class="fa fa-calendar text-primary"></span>
                                             </div> 
                                              <input type="text" class="form-control" id="egressdate" name="egressdate" placeholder="dd/mm/aaaa">
                                          </div>
                                          <small id="emailHelp" class="form-text text-muted">Ingrese la fecha de egreso del paciente.</small>
                                    
                                </div>
                                
                              </div>

                              <div class="row">
                                
                                 <div class="form-group col-md-6">
                                    <div class="input-group">
                                            <div class="input-group-addon">
                                                <span class="fa fa-map text-primary"></span>
                                             </div> 
                                             <select id="state" name="state" class="form-control" required>
                                              <option value="" disabled selected>Seleccione el estado</option>
                                             </select>
                                          </div>
                                          <small id="emailHelp" class="form-text text-muted">Ingrese el estado de donde proviene del paciente.</small>
                                 </div> 


                                 <div class="form-group col-md-6">
                                    <div class="input-group">
                                            <div class="input-group-addon">
                                                <span class="fa fa-map text-primary"></span>
                                             </div> 
                                             <select id="municipality" name="municipality" class="form-control" required>
                                               <option value='' disabled selected>Seleccione el municipio</option>
                                             </select>
                                          </div>
                                          <small id="emailHelp" class="form-text text-muted">Ingrese el municipio de donde proviene del paciente.</small>
                                 
                                 </div> 

                              </div>

                              <div class="row">

                                <div class="form-group col-md-6">

                                   <div class="input-group">
                                            <div class="input-group-addon">
                                                <span class="fa fa-map text-primary"></span>
                                             </div> 
                                             <select id="parish" name="parish" class="form-control" required>
                                               <option value='' disabled selected>Seleccione la parroquia</option>
                                             </select>
                                          </div>
                                          <small id="emailHelp" class="form-text text-muted">Ingrese la parroquia de donde proviene del paciente.</small>

                                </div>

                                <div class="form-group col-md-6">
                                    <div class="input-group">
                                            <div class="input-group-addon">
                                                <span class="fa fa-globe text-primary"></span>
                                             </div>
                                             <select id="foreigncountry" name="foreigncountry" class="form-control">
                                              <option value="" selected disabled>Seleccione el pais</option>
                                             </select> 
                                          </div>
                                          <small id="emailHelp" class="form-text text-muted">Ingrese el pais de donde proviene paciente.</small>

                                </div>


                              </div>

                              <div class="row">

                                 <div class="form-group col-md-6">

                                  <div class="input-group">
                                            <div class="input-group-addon">
                                                <span class="fa fa-venus-mars text-primary"></span>
                                             </div>
                                             <select id="triage" name="triage" class="form-control" required>
                                              <option value="" selected disabled>Seleccione un triaje</option>
                                             </select> 
                                          </div>
                                          <small id="emailHelp" class="form-text text-muted">Ingrese el area de llegada del paciente.</small>


                                </div>

                                 <div class="form-group col-md-6"> 
                                       <textarea id="observation" name="observation" class="form-control" placeholder="Observaciones">
                                       </textarea>
                                          <small  class="form-text text-muted">Ingrese obervaciones acerca del paciente o su historia.</small>
                                </div>
                              </div>          
        
         <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
      </form>
      </div>
      
     
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