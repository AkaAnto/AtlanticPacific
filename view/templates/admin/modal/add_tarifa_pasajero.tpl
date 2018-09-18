<!-- Modal -->
<div class="modal fade" id="tarifaAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-plus'></i> Agregar tarifa</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" id="agregar_tarifa" name="agregar_tarifa">
                    <div id="ajax_message"></div>
                    <div class="form-group">
                        <label for="nombre" class="col-sm-3 control-label">Barco</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="barco_tarifa" name="barco_tarifa">
                                {foreach  from=$available_barcos item=barco}
                                    <option value="{$barco.id}"> {$barco.nombre} </option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">Pasajero particular</label>
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
                        <label for="alto" class="col-sm-3 control-label">Conductor de gandola</label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="conductor_gandola" name="conductor_gandola" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">Conductor de autobus </label>
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