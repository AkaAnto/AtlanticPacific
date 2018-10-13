<!-- Modal -->
<div class="modal fade" id="tarifaEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-plus'></i> Editar tarifa <b id="tarifa_title"></b> </h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" id="editar_tarifa" name="editar_tarifa">
                    <div id="ajax_message"></div>
                    <div class="form-group hide">
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="id_barco" name="id" required>
                            <input type="number" class="form-control" id="barco_tarifa" name="barco_tarifa" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">Pasajero particular </label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="particular" name="particular" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">En auto a bordo</label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="en_auto" name="en_auto" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">En autobus a bordo</label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="en_autobus" name="en_autobus" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">Ayudante de gandola</label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="ayudante_gandola" name="ayudante_gandola" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">Conductor de gandola </label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="conductor_gandola" name="conductor_gandola" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">Conductor de autobus</label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="conductor_autobus" name="conductor_autobus" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
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