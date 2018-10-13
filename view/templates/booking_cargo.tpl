<!-- Second Tab -->
<div class="tab-pane" role="tabpanel" id="cargotab" aria-labelledby="cargo-tab">
    <h5 class="title-contact" style="color:#005292; margin-top: 25px; margin-left: 15px ">Información de la Carga</h5>
    <div class="tab-content-holder col-md-5">
        <br/>
        <form class="form-horizontal booking-form" style="margin-left: 15px">
            <div class="form-group">
                <label for="vehicle_type">SELECCIONE UN VEHICULO</label>
                <select class="form-control" id="vehicle_type">
                    <option selected value ="0"></option>
                    <option value="Furgon con cabezal">Furgon con cabezal</option>
                    <option value="Furgon sin cabezal">Furgon sin cabezal </option>
                    <option value="Camión">Camión</option>
                    <option value="Equipo pesado">Equipo pesado</option>
                    <option value="Autobus">Autobus</option>
                    <option value="Auto">Auto</option>
                    <option value="Moto Grande">Moto Grande</option>
                    <option value="Moto Chica">Moto Chica</option>
                    <option value="Bicicleta">Bicicleta</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cargo_high">SELECCIONE ALTURA DEL VEHICULO</label>
                <select class="form-control" id="cargo_high">
                    <option selected value ="0" ></option>
                    <option  value="0 - 4 mts">0 - 4 mts de Altura</option>
                    <option  value="+ 4 mts">Más Alto que 4 mts</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cargo_width">SELECCIONE ANCHO DEL VEHICULO</label>
                <select class="form-control" id="cargo_width">
                    <option selected value ="0"></option>
                    <option value="0 - 2,6 mts">0 - 2,6 mts de Ancho</option>
                    <option value="+ 2,6 mts">Más Ancho que 2,6 mts</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cargo_width">INGRESE LARGO DEL VEHICULO</label>
                <input id="cargo_length" type="number" min="1" max="20" class="form-control col-md-10" placeholder="" style="display: inline-flex" />
                <label class="col-md-2" style="display: inline">MTS</label>
            </div>
            <div class="form-group">
                <label for="vehicle_weight">INGRESE PESO DEL VEHICULO</label>
                <input id="vehicle_weight" type="number" min="1" max="20" class="form-control col-md-10" placeholder="" style="display: inline-flex" />
                <label class="col-md-2" style="display: inline">TON</label>
            </div>
            <div class="form-group">
                <label for="license_plate">INGRESE PLACA DEL VEHICULO</label>
                <input id="license_plate" type="text" min="1" max="20" class="form-control" placeholder="" />
            </div>
            <div class="form-group">
                <label for="cargo_owner_full_name">NOMBRE COMPLETO DEL DUEÑ0 DE CARGA</label>
                <input id="cargo_owner_full_name" type="text" min="1" max="20" class="form-control" placeholder="" />
            </div>
            <div class="form-group">
                <label for="cargo_owner_passport_number">PASAPORTE Ó NÚMERO DE COMPAÑIA</label>
                <input id="cargo_owner_passport_number" type="text"  class="form-control" placeholder="" />
            </div>
            <div class="form-group">
                <label for="cargo_owner_passport_number">TIPO DE CARGA (COMMODITY)</label>
                <input id="cargo_type" type="text"  class="form-control" placeholder="" value="" />
            </div>
            <div class="form-group">
                <label for="cargo_weight">INGRESE PESO NETO</label>
                <input id="cargo_weight" type="number" min="1" max="20" value="0" class="form-control col-md-10" placeholder="" style="display: inline-flex" />
                <label class="col-md-2" style="display: inline">TON</label>
            </div>
            <div class="form-group">
                <label for="cargo_description">DESCRIPCIÓN DE CARGA</label>
                <textarea id="cargo_description" type="text"  class="form-control" placeholder=""></textarea>
            </div>
            <div align="center" style="margin-top: 15px; margin-bottom: 5px">
                <a href="#booking" class="scroll btn btn-primary btn-square" onclick="addCargo();" style="background-color: #337ab7; color: #FFF;">
                    <i class="fas fa-plus-circle"> </i> Agregar Carga
                </a>
            </div>
            <a href="#booking" class="scroll btn btn-default btn-square" onclick="goToThirdStep();">
                <i class="fas fa-arrow-circle-right" > </i> Siguiente
            </a>
        </form>
    </div>
    <div id="booking-preview" class="tab-content-holder col-md-7 hide booking-preview" style="border-left: 1px solid grey;">
        <div class="thumbnail">
            <div class="caption">
                <h4 class="title-contact" align="center" style="color:#005292; ">Detalle del Booking</h4>
                <br/>
                <div class="col-md-12">
                    <p id="dut-number"></p>
                    <div id="route-detail"> </div>
                    <br/>
                    <table class="table hide" id="cargo-list-table">
                        <thead>
                        <tr>
                            <th>Detalles Vehículo</th>
                            <th>Dueño de Carga</th>
                            <th>Detalles Carga</th>
                            <th>Precio</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <table class="table hide" id="passenger-list-table">
                        <thead>
                        <tr>
                            <th>Tipo Pasajero</th>
                            <th>Información Pasajero</th>
                            <th>Precio</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>