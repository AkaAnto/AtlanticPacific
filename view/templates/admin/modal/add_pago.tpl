<!-- Modal -->
<div class="modal fade" id="pagoAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-plus'></i> Agregar pago</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" id="agregar_pago" name="agregar_pago">
                    <div id="ajax_message"></div>
                    <div class="form-group">
                        <label for="Codigo booking" class="col-sm-3 control-label">Código Booking</label>
                        <div class="col-sm-8">
                           <select class="form-control" id="id_booking" name="id_booking">
                                {foreach  from=$available_bookings item=booking}
                                    <option value="{$booking.id}"> {$booking.codigo} </option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">Ruta del comprobante</label>
                        <div class="col-sm-7">
                            <input type="text"  class="form-control" id="ruta_comprobante" name="ruta_comprobante" placeholder="" title="ruta_comprobante" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">Fecha</label>
                        <div class="col-sm-7">
                            <input type="date"  class="form-control" id="fecha" name="fecha" placeholder="" title="fecha" required>
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