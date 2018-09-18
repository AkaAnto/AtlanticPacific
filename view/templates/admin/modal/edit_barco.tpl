<!-- Modal -->
<div class="modal fade" id="barcoEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar barco</h4>
            </div>
            <form class="form-horizontal" method="put" id="editar_barco" name="editar_barco">
                <div class="modal-body">
                    <div id="ajax_message"></div>
                    <div class="form-group hide">
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="barco_id" name="id" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="col-sm-3 control-label">Nombre</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="NOMBRE" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">Alto Plataforma </label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="alto" name="alto" placeholder="ALTO" title="alto" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> MTS </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ancho" class="col-sm-3 control-label">Ancho Plataforma</label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="ancho" name="ancho" placeholder="ANCHO" title="ancho" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> MTS </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="largo" class="col-sm-3 control-label">Largo Plataforma</label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="largo" name="largo" placeholder="LARGO" title="largo" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> MTS </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="capacidad" class="col-sm-3 control-label">Peso Max </label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="capacidad" name="capacidad" placeholder="PESO" title="Capacidad" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> TON </label>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" id="guardar_datos">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>