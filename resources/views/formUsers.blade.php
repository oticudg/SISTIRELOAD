<div class="modal fade" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-purple">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="exampleModalLabel"></h4>
            </div>
            <form id="formuser" method="post" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('POST') }}
                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-user-circle text-purple"></span>
                                </div>
                                <input type="text" id="name" name="name" pattern="a-zA-ZñÑáéíóúÁÉÍÓÚ\s+{1,70}" class="form-control" placeholder="NOMBRE" required>
                            </div>
                            <small id="name" class="form-text text-muted help-block with-errors">INGRESE EL NOMBRE DEL USUARIO.</small>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-user-circle-o text-purple"></span>
                                </div>
                                <input type="text" id="last_name" name="last_name" pattern="a-zA-ZñÑáéíóúÁÉÍÓÚ\s+{1,70}" class="form-control" placeholder="APELLIDO" required>
                            </div>
                            <small id="last_name" class="form-text text-muted help-block with-errors">INGRESE EL APELLIDO DEL USUARIO.</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-envelope text-purple"></span>
                                </div>
                                <input type="email" id="email" name="email" class="form-control" placeholder="CORREO" required>
                            </div>
                            <small id="email" class="form-text text-muted help-block with-errors">INGRESE EL CORREO DEL USUARIO.</small>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-vcard text-purple"></span>
                                </div>
                                <select id="type" name="type" class="form-control" required>
                                    <option value="" selected disabled>TIPO</option>
                                    <option value="admin">Administrador</option>
                                    <option value="member">Miembro</option>
                                </select>
                            </div>
                            <small id="type" class="form-text text-muted help-block with-errors">SELECCIONE EL TIPO DE USUARIO.</small>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-key text-purple"></span>
                                </div>
                                <input type="password" id="password" name="password" class="form-control" placeholder="CONTRASEÑA" required>
                            </div>
                            <small id="name" class="form-text text-muted help-block with-errors">INGRESE LA CONTRASEÑA DEL USUARIO.</small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-flat" data-dismiss="modal"><span class="fa fa-close"></span> CERRAR</button>
                    <button type="submit" class="btn bg-purple btn-save btn-flat"><span class="fa fa-send"></span> ENVIAR</button>
                </div>
            </form>
        </div>
    </div>
</div>