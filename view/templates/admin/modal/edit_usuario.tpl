<!-- Modal -->
<div class="modal fade" id="usuarioEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-plus'></i> Editar Usuario</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" id="editar_usuario" name="editar_usuario">
                    <div id="ajax_message"></div>
                    <div class="form-group hide">
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="usuario_id" name="user_id"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="firstname" class="col-sm-3 control-label">Nombre</label>
                            <div class="col-sm-7">
                                <input type="text"  class="form-control" id="firstname_edit" name="firstname" placeholder="" title="Nombre" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="lastname" class="col-sm-3 control-label">Apellido</label>
                            <div class="col-sm-7">
                                <input type="text"  class="form-control" id="lastname_edit" name="lastname" placeholder="" title="Apellido" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-7">
                                <input type="email"  class="form-control" id="email_edit" name="email" placeholder="" title="Email" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">Nombre de Usuario</label>
                        <div class="col-sm-7">
                            <input type="text"  autocomplete="username" class="form-control" id="username_edit" name="username" placeholder="" title="Nombre de usuario" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Contraseña</label>
                        <div class="col-sm-7">
                            <input type="password" autocomplete="current-password" class="form-control" id="password_edit" name="password" placeholder="Dejar vacio para mantener contraseña actual" title="Contraseña" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="role" class="col-sm-3 control-label">Rol</label>
                        <div class="col-sm-7">
                            <select class="form-control" id="role_edit" name="role" required>
                                <option value="100">Aprobador</option>
                                <option value="010">Cotizador</option>
                                <option value="001">Administrador</option>
                            </select>
                        </div>
                    </div>
                   
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" id="guardar_datos_edit">Guardar</button>
            </div>
            </form>
        </div>
    </div>
</div>