<!-- Modal -->
<div class="modal fade" id="viajeAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-plus'></i> Agregar viaje</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" id="agregar_viaje" name="agregar_viaje">
                    <div id="ajax_message"></div>
                    <div class="form-group">
                        <label for="nombre" class="col-sm-3 control-label">Nombre</label>
                        <div class="col-sm-8">
                           <select class="form-control" id="barco_viaje" name="barco_viaje">
                                {foreach  from=$available_barcos item=barco}
                                    <option value="{$barco.id}"> {$barco.nombre} </option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">Fecha </label>
                        <div class="col-sm-7">
                            <input type="date"  class="form-control" id="fecha" name="fecha" placeholder="" title="fecha" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ancho" class="col-sm-3 control-label">Puerto de Origen</label>
                        <div class="col-sm-7">
                            <select class="form-control" id="puerto_origen" name="puerto_origen">
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="El Salvador">El Salvador</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ancho" class="col-sm-3 control-label">Puerto destino</label>
                        <div class="col-sm-7">
                            <select class="form-control" id="puerto_destino" name="puerto_destino">
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="El Salvador">El Salvador</option>
                            </select>
                        </div>
                    </div>
                    <!--<div class="form-group">
                        <label for="estado" class="col-sm-3 control-label">Puerto destino</label>
                        <div class="col-sm-7">
                            <select class="form-control" id="estado" name="estado">
                                <option value="Activo">Costa Rica</option>
                                <option value="Cerrar Booking">Cerrar Booking</option>
                                <option value="Inactivo">Inactivo</option>
                            </select>
                        </div>
                    </div>-->
                   
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" id="guardar_datos">Guardar</button>
            </div>
            </form>
        </div>
    </div>
</div>