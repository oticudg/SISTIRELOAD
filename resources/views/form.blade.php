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
                                <input type="text" id="number_record" title="Ingrese solo numeros, entre 1-11 caracteres" name="number_record" pattern="[0-9]{1,11}" class="form-control" placeholder="NÚMERO DE HISTORIA"> 
                            </div>
                            <small id="number_record" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="col-md-4" style="padding: 0; margin: 0;">
                                <select id="type_doc" name="type_doc" class="form-control">
                                    <option value="" selected disabled>DOCUMENTO</option>
                                    <option value="Venezolano/a">Venezolano/a</option>
                                    <option value="Extranjero/a">Extranjero/a</option>
                                    <option value="C/s">Caso-Social</option>
                                    <option value="N/p">No posee</option>
                                </select>
                                <small id="type_doc" class="form-text text-muted"></small>
                            </div>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-id-card text-purple"></span>
                                </div>
                                <input type="text" id="patient_id" pattern="[0-9]{4,8}" name="patient_id"  class="form-control" placeholder="NÚMERO DE CÉDULA" required>
                            </div>
                            <small id="patient_id" class="form-text text-muted"></small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-user-circle text-purple"></span>
                                </div>
                                <input type="text" id="name" pattern="a-zA-ZñÑáéíóúÁÉÍÓÚ\s+{1,70}" name="name" class="form-control" placeholder="NOMBRES">
                            </div>
                            <small id="name" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-user-circle-o text-purple"></span>
                                </div>
                                <input type="text" id="last_name" pattern="a-zA-ZñÑáéíóúÁÉÍÓÚ\s+{1,70}" name="last_name" class="form-control" placeholder="APELLIDOS">
                            </div>
                            <small id="last_name" class="form-text text-muted"></small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-venus-mars text-purple"></span>
                                </div>
                                <select id="sex" name="sex" class="form-control">
                                    <option value="" selected disabled>SELECCIONE UN SEXO</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                            </div>
                            <small id="sex" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="input-group date" data-provide="datepicker">
                                <div class="input-group-addon">
                                    <span class="fa fa-calendar text-purple"></span>
                                </div>
                                <input type="text" id="birthdate" name="birthdate" class="form-control" placeholder="DD/MM/AAAA" readonly>
                            </div>
                            <small id="birthdate" class="form-text text-muted"></small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="input-group date" data-provide="datepicker">
                                <div class="input-group-addon">
                                    <span class="fa fa-calendar text-purple"></span>
                                </div>
                                <input type="text" class="form-control" id="admission_date" name="admission_date" placeholder="DD/MM/AAAA" readonly>
                            </div>
                            <small id="admission_date" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="input-group date" data-provide="datepicker">
                                <div class="input-group-addon">
                                    <span class="fa fa-calendar text-purple"></span>
                                </div>
                                <input type="text" class="form-control" id="egress_date" name="egress_date" placeholder="DD/MM/AAAA" readonly>
                            </div>
                            <small id="egress_date" class="form-text text-muted"></small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-map text-purple"></span>
                                </div>
                                <select id="state" name="state" class="form-control">
                                    <option value="" disabled selected>SELECCIONE EL ESTADO</option>
                                </select>
                            </div>
                            <small id="state" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-map text-purple"></span>
                                </div>
                                <select id="municipality" name="municipality" class="form-control">
                                    <option value='' disabled selected>SELECCIONE EL MUNICIPIO</option>
                                </select>
                            </div>
                            <small id="municipality" class="form-text text-muted"></small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-map text-purple"></span>
                                </div>
                                <select id="parish" name="parish" class="form-control">
                                    <option value='' disabled selected>SELECCIONE LA PARROQUIA</option>
                                </select>
                            </div>
                            <small id="parish" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-globe text-purple"></span>
                                </div>
                                <select id="foreigncountry" name="foreigncountry" class="form-control">
                                    <option value="" selected disabled>SELECCIONE EL PAÍS</option>
                                </select>
                            </div>
                            <small id="foreigncountry" class="form-text text-muted"></small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-hospital-o text-purple"></span>
                                </div>
                                <select id="triage_id" name="triage_id" class="form-control">
                                    <option value="" selected disabled>SELECCIONE UN TRIAJE</option>
                                </select>
                            </div>
                            <small id="triage_id" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group col-md-6"> 
                            <textarea style="resize: none;" id="address" name="address" class="form-control" placeholder="DIRECCIÓN DEL PACIENTE" required>
                            </textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12"> 
                            <textarea style="resize: none;" id="observation" name="observation" class="form-control" placeholder="OBSERVACIONES DEL PACIENTE O SU HISTORIA">
                            </textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal"><span class="fa fa-close"></span> CERRAR</button>
                        <button type="submit" class="btn bg-purple btn-flat"><span class="fa fa-send"></span> ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>