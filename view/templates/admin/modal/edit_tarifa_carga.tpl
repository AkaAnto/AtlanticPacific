<!-- Modal -->
<div class="modal fade" id="tarifaEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-plus'></i> Editar tarifa</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" id="editar_tarifa" name="editar_tarifa">
                    <div id="ajax_message"></div>
                    <div class="form-group hide">
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="barco_id" name="barco_id" required>
                        </div>
                    </div>
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
                        <label for="alto" class="col-sm-3 control-label">0 - 3 mts </label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="tres_metros" name="tres_metros" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">3 - 6 mts </label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="seis_metros" name="seis_metros" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">6 - 9 mts </label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="nueve_metros" name="nueve_metros" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">9 - 15 mts </label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="quince_metros" name="quince_metros" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">15 - 18 mts </label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="dieciocho_metros" name="dieciocho_metros" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">Moto Grande </label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="moto_grande" name="moto_grande" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">Moto Chica </label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="moto_chica" name="moto_chica" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">Bicicleta </label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="bicicleta" name="bicicleta" placeholder="" required>
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