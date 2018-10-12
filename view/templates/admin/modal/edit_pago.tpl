<!-- Modal -->
<div class="modal fade" id="pagoEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-plus'></i> Editar pago</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" id="editar_pago" name="editar_pago">
                    <div id="ajax_message"></div>
                    <div class="form-group hide">
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="barco_id" name="barco_id"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="codigo" class="col-sm-3 control-label">Código Booking</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="id_booking" name="id_booking">
                                {foreach  from=$available_bookings item=booking}
                                    <option value="{$booking.id}"> {$booking.codigo} </option>
                                {/foreach}
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ruta" class="col-sm-3 control-label">Ruta comprobante </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="ruta_comprobante" name="ruta_comprobante" placeholder="Ruta" title="Ruta" required>
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="fecha" class="col-sm-3 control-label">Fecha </label>
                        <div class="col-sm-7">
                            <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha" title="Fecha" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ancho" class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-7">
                            <select class="form-control" id="estado" name="estado">
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
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