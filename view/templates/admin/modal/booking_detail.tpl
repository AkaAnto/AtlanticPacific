<!-- Modal -->
<div class="modal fade" id="bookingDetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Detalle de Booking</h4>
            </div>
            <div class="modal-body" style="padding: 0;">
                <div id="booking-preview2" class=" col-md-12">
                    <div class="thumbnail" style="border-left: 0px; border-right:0px; margin-bottom: 10px; ">
                        <div class="caption" style="border-bottom: 0px solid black; ">
                            <h4 id="bookingCodigo" class="title-contact" align="center" style="color:#005292; "></h4>
                            <br>
                            <p id="dutNumber"></p>
                            <div id="routeDetail"></div>
                            <div id="clientDetail"></div>
                            <div class="pull-left">
                                <br>
                                <br/>
                                <table class="table" id="cargoListTable">
                                    <thead>
                                    <tr>
                                        <th>Vehículo</th>
                                        <th>Dueño de Carga</th>
                                        <th>Carga</th>
                                        <th>Precio</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>
                                            <span id="vehicle_type" class="label label-success text-uppercase" style="display: block; padding: 0.2em .6em .3em; margin-top: 4px;"></span>
                                            <span id="vehicle_plate" class="label label-default text-uppercase" style="display: block; padding: 0.2em .6em .3em; margin-top: 4px;"></span>
                                            <span id="vehicle_height" class="label label-default text-uppercase" style="display: block; padding: 0.2em .6em .3em; margin-top: 4px;"></span>
                                            <span id="vehicle_width" class="label label-default text-uppercase" style="display: block; padding: 0.2em .6em .3em; margin-top: 4px;"></span>
                                            <span id="vehicle_length" class="label label-default text-uppercase" style="display: block; padding: 0.2em .6em .3em; margin-top: 4px;"></span>
                                        </td>
                                        <td>
                                            <span id="cargo_owner" class="label label-success text-uppercase" style="display: block; padding: 0.2em .6em .3em; margin-top: 4px;">Ronald Mcdonald's</span>
                                            <span id="cargo_passport" class="label label-default text-uppercase" style="display: block; padding: 0.2em .6em .3em; margin-top: 4px;">hgjhgj5454</span>
                                        </td>
                                        <td>
                                            <span id="cargo_type" class="label label-success text-uppercase" style="display: block; padding: 0.2em .6em .3em; margin-top: 4px;">Clothes</span>
                                            <span id="cargo_description" class="label label-default text-uppercase" style="display: block; padding: 0.2em .6em .3em; margin-top: 4px;">Pants</span>
                                        </td>
                                        <td>
                                            <b id="cargo_price">Cotizar</b>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                                <div class="pull-right" style="width: 300px">
                                    <hr style="border-top-color: black;">
                                </div>
                                <div class="row"></div>
                                <div class="pull-right">
                                    <p id="bookingCargoPrice">
                                        <b>SUB-TOTAL CARGA: </b>
                                        $455
                                    </p>
                                    <br/>
                                    <br/>
                                </div>


                                <table class="table" id="passengerListTable">
                                    <thead>
                                    <tr>
                                        <th>Pasajero</th>
                                        <th>Datos</th>
                                        <th>Precio</th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                    </tbody>
                                </table>

                                <div class="pull-right" style="width: 300px">
                                    <hr style="border-top-color: black;">
                                </div>
                                <div class="row"></div>
                                <div class="pull-right">
                                    <p id="bookingPassengerTotalPrice">

                                    </p>
                                </div>
                                <div class="row"></div>

                                <div class="pull-right" style="width: 300px">
                                    <br/>
                                    <br/>
                                </div>
                                <div class="row"></div>
                                <div class="pull-right">
                                    <p id="bookingPriceBeforeTaxes">
                                    </p>
                                    <p id="bookingTaxes">
                                        <b>IVA: $25 </b>
                                    </p>
                                    <p id="bookingPriceAfterTaxes">
                                    </p>
                                </div>
                                <div class="row"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
