<div class="modal fade" id="modalform" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-purple">
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
                                    <span class="fa fa-file-text text-purple"></span>
                                </div>
                                <input type="text" id="number_record" title="Ingrese solo numeros, entre 1-11 caracteres" name="number_record" pattern="[0-9]{1,11}" class="form-control" placeholder="Numero de historia"> 
                            </div>
                            <small id="number_record" class="form-text text-muted">Necesario ingresar por lo menos entre 1-11 digito.</small>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="col-md-4" style="padding: 0; margin: 0;">
                                <select id="type_doc" name="type_doc" class="form-control" title="Seleccione un elemento de la lista" {{-- required --}}>
                                    <option value="" selected disabled>Documento</option>
                                    <option value="Venezolano/a">Venezolano/a</option>
                                    <option value="Extranjero/a">Extranjero/a</option>
                                    <option value="C/s">Caso-Social</option>
                                    <option value="N/p">No posee</option>
                                </select>
                                <small id="type_doc" class="form-text text-muted">Documento</small>
                            </div>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-id-card text-purple"></span>
                                </div>
                                <input type="text" id="patient_id" pattern="[0-9]{4,8}" name="patient_id"  class="form-control" placeholder="Numero de cedula" required>
                            </div>
                            <small id="patient_id" class="form-text text-muted">Cedula.</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-user-circle text-purple"></span>
                                </div>
                                <input type="text" id="name" pattern="[A-Za-z ]{1,70}" name="name" class="form-control" placeholder="Nombres">
                            </div>
                            <small id="name" class="form-text text-muted">Ingrese los nombres del paciente.</small>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-user-circle-o text-purple"></span>
                                </div>
                                <input type="text" id="last_name" pattern="[A-Za-z ]{1,70}" name="last_name" class="form-control" placeholder="Apellidos">
                            </div>
                            <small id="last_name" class="form-text text-muted">Ingrese los apellidos del paciente.</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-venus-mars text-purple"></span>
                                </div>
                                <select id="sex" name="sex" class="form-control">
                                    <option value="" selected disabled>Seleccione un sexo</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                            </div>
                            <small id="sex" class="form-text text-muted">Ingrese el sexo del paciente.</small>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="input-group date" data-provide="datepicker">
                                <div class="input-group-addon">
                                    <span class="fa fa-calendar text-purple"></span>
                                </div>
                                <input type="text" id="birthdate" name="birthdate" class="form-control" placeholder="dd/mm/aaaa" readonly>
                            </div>
                            <small id="birthdate" class="form-text text-muted">Ingrese la fecha de nacimiento del paciente.</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="input-group date" data-provide="datepicker">
                                <div class="input-group-addon">
                                    <span class="fa fa-calendar text-purple"></span>
                                </div>
                                <input type="text" class="form-control" id="admission_date" name="admission_date" placeholder="dd/mm/aaaa" readonly>
                            </div>
                            <small id="admission_date" class="form-text text-muted">Ingrese la fecha de ingreso del paciente.</small>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="input-group date" data-provide="datepicker">
                                <div class="input-group-addon">
                                    <span class="fa fa-calendar text-purple"></span>
                                </div>
                                <input type="text" class="form-control" id="egress_date" name="egress_date" placeholder="dd/mm/aaaa" readonly>
                            </div>
                            <small id="egress_date" class="form-text text-muted">Ingrese la fecha de egreso del paciente.</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-map text-purple"></span>
                                </div>
                                <select id="state" name="state" class="form-control">
                                    <option value="" disabled selected>Seleccione el estado</option>
                                </select>
                            </div>
                            <small id="state" class="form-text text-muted">Ingrese el estado de donde proviene del paciente.</small>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-map text-purple"></span>
                                </div>
                                <select id="municipality" name="municipality" class="form-control">
                                    <option value='' disabled selected>Seleccione el municipio</option>
                                </select>
                            </div>
                            <small id="municipality" class="form-text text-muted">Ingrese el municipio de donde proviene del paciente.</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-map text-purple"></span>
                                </div>
                                <select id="parish" name="parish" class="form-control">
                                    <option value='' disabled selected>Seleccione la parroquia</option>
                                </select>
                            </div>
                            <small id="parish" class="form-text text-muted">Ingrese la parroquia de donde proviene del paciente.</small>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-globe text-purple"></span>
                                </div>
                                <select id="foreigncountry" name="foreigncountry" class="form-control">
                                    <option value="" selected disabled>Seleccione el pais</option>
                                </select>
                            </div>
                            <small id="foreigncountry" class="form-text text-muted">Ingrese el pais de donde proviene paciente.</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-hospital-o text-purple"></span>
                                </div>
                                <select id="triage_id" name="triage_id" class="form-control">
                                    <option value="" selected disabled>Seleccione un triaje</option>
                                </select>
                            </div>
                            <small id="triage_id" class="form-text text-muted">Ingrese el area de llegada del paciente.</small>
                        </div>
                        <div class="form-group col-md-6"> 
                            <textarea style="resize: none;" id="observation" name="observation" class="form-control" placeholder="Observaciones">
                            </textarea>
                            <small  class="form-text text-muted" id="observation">Ingrese algunas obervaciones acerca del paciente o su historia de ser necesario.</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Cerrar</button>
                        <button type="submit" class="btn bg-purple"><span class="fa fa-send"></span> Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>