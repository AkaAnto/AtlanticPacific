<!-- Modal -->
<div class="modal fade" id="pagoEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-plus'></i> Editar pago <b id="codigo"></b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" id="editar_pago" name="editar_pago">
                    <div id="ajax_message"></div>
                    <div class="form-group hide">
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="pago_id" name="id"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ancho" class="col-sm-3 control-label">Estatus</label>
                        <div class="col-sm-7">
                            <select class="form-control" id="estado" name="estado">
                                <option value="Aprobado">Aprobado</option>
                                <option value="Rechazado">Rechazado</option>
                            </select>
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