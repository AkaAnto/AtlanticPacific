<div class="serives-agile py-5" id="booking">
    <div class="col-md-10" style="margin-left: 15%">
        <h3 class="tittle text-center font-weight-bold text-uppercase mb-sm-5 mb-4" id="nBooking">
            <span class="font-weight-bold text-center">B</span>Booking
        </h3>

        <div class="row">
            <div class="col-md-12">
                <!-- Tab Nav -->
                <ul class="nav nav-tabs" id="myTabs" role="tablist">
                    <li role="presentation" class="active">
                        <a class="btn btn-default btn-square" href="#routetab" id="route-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                            <i class="fas fa-arrow-circle-right"> </i> Detalles de Ruta
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a disabled class="btn btn-default btn-square btn-inactive" href="#cargotab" role="tab" id="cargo-tab" data-toggle="tab" aria-controls="cargotab" aria-expanded="false">
                            <i class="fas fa-arrow-circle-right"> </i> Detalles de Carga
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a disabled class="btn btn-default btn-square btn-inactive" href="#passengertab" role="tab" id="passenger-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">
                            <i class="fas fa-arrow-circle-right"> </i> Pasajeros
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a disabled class="btn btn-default btn-square btn-inactive" href="#paymenttab" role="tab" id="payment-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">
                            <i class="fas fa-arrow-circle-right"> </i> Cotización
                        </a>
                    </li>
                </ul>

                <!-- Tabs -->
                <div class="tab-content" id="myTabContent">
                    <!-- First Tab -->
                    <div class="tab-pane active in" role="tabpanel" id="routetab" aria-labelledby="home-tab">
                        <h5 class="title-contact" style="color:#005292; margin-top: 25px; margin-left: 15px ">Suministre la siguiente información</h5>
                        <div class="tab-content-holder col-md-5">
                            <br/>
                            <form class="form-horizontal booking-form" style="margin-left: 15px">
                                <div class="form-group">
                                    <input class="form-control" placeholder="NÚMERO DUT" id="dut" />
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="route">
                                        <option selected value="0">SELECCIONE UNA RUTA</option>
                                        <option value="El Salvador - Costa Rica">El Salvador - Costa Rica</option>
                                        <option value="Costa Rica - El Salvador">Costa Rica - El Salvador</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input id="travel_date" type="text" class="form-control hide" placeholder="SELECCIONE LA FECHA">
                                </div>
                                <div class="hide" id="showLoading" align="center">
                                    <img src="{$img}loading.gif" style="width: 35px; height: auto;"/>
                                </div>
                                <div class="alert alert-dismissible alert-danger hide" id="firstStepValidationMessage">Debe sumistrar toda la información</div>
                                <a class="btn btn-default btn-square" onclick="goToSecondStep()" style="margin-top: 10px">
                                    <i class="fas fa-arrow-circle-right"> </i> Siguiente
                                </a>
                            </form>
                        </div>
                    </div>
                    <!-- Second Tab -->
                    <div class="tab-pane" role="tabpanel" id="cargotab" aria-labelledby="cargo-tab">
                        <h5 class="title-contact" style="color:#005292; margin-top: 25px; margin-left: 15px ">Información de la Carga</h5>
                        <div class="tab-content-holder col-md-5">
                            <br/>
                            <form class="form-horizontal booking-form" style="margin-left: 15px">
                                <div class="form-group">
                                    <select class="form-control" id="vehicle_type">
                                        <option selected value ="0">Seleccione Vehiculo</option>
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
                                    <select class="form-control" id="cargo_high">
                                        <option selected value ="0" >Seleccione Altura</option>
                                        <option  value="0 - 4 mts">0 - 4 mts de Altura</option>
                                        <option  value="+ 4 mts">Más Alto que 4 mts</option>
                                    </select>
                                    <select class="form-control" id="cargo_width">
                                        <option selected value ="0">Seleccione Ancho</option>
                                            <option value="0 - 2,6 mts">0 - 2,6 mts de Ancho</option>
                                            <option value="+ 2,6 mts">Más Ancho que 2,6 mts</option>
                                    </select>
                                    <div class="form-group">
                                        <input id="cargo_length" type="number" min="1" max="20" class="form-control col-md-10" placeholder="LARGO" style="display: inline-flex" />
                                        <label class="col-md-2" style="display: inline">MTS</label>
                                    </div>
                                    <div class="form-group">
                                        <input id="vehicle_weight" type="number" min="1" max="20" class="form-control col-md-10" placeholder="PESO" style="display: inline-flex" />
                                        <label class="col-md-2" style="display: inline">TON</label>
                                    </div>
                                    <input id="license_plate" type="text" min="1" max="20" class="form-control" placeholder="PLACA VEHICULO" />
                                    <input id="cargo_owner_full_name" type="text" min="1" max="20" class="form-control" placeholder="NOMBRE COMPLETO DUEÑ0 DE CARGA" />
                                    <input id="cargo_owner_passport_number" type="text"  class="form-control" placeholder="PASAPORTE Ó NÚMERO DE COMPAÑIA" />
                                    <input id="cargo_type" type="text"  class="form-control" placeholder="TIPO DE CARGA (COMMODITY)" />
                                    <div class="form-group">
                                        <input id="cargo_weight" type="number" min="1" max="20" class="form-control col-md-10" placeholder="PESO NETO" style="display: inline-flex" />
                                        <label class="col-md-2" style="display: inline">TON</label>
                                    </div>
                                    <textarea id="cargo_description" type="text"  class="form-control" placeholder="DESCRIPCIÓN DE CARGA"></textarea>
                                    <div align="center" style="margin-top: 15px; margin-bottom: 5px">
                                        <a class="btn btn-primary btn-square" onclick="addCargo()" style="background-color: #337ab7; color: #FFF;">
                                            <i class="fas fa-plus-circle"> </i> Agregar Carga
                                        </a>
                                    </div>
                                </div>

                                <a class="btn btn-default btn-square" onclick="goToThirdStep();">
                                    <i class="fas fa-arrow-circle-right" > </i> Siguiente
                                </a>
                            </form>
                        </div>
                        <div id ="booking-preview" class="tab-content-holder col-md-7 hide booking-preview" style="border-left: 1px solid grey; overflow-y: scroll">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h4 class="title-contact" align="center" style="color:#005292; ">Detalle del Booking</h4>
                                    <br/>
                                    <div class="col-md-12">
                                        <p id="dut-number"><b> NÚMERO DUT: </b>WDSG46OLXV</p>
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
                    <!-- Third Tab -->
                    <div class="tab-pane fade" role="tabpanel" id="passengertab" aria-labelledby="profile-tab">
                        <h5 class="title-contact" style="color:#005292; margin-top: 25px; margin-left: 15px ">Información de los pasajeros</h5>
                        <div class="tab-content-holder col-md-5">
                            <br/>
                            <form class="form-horizontal booking-form" style="margin-left: 15px">
                                <div class="form-group">
                                    <select class="form-control" id="passenger_type">
                                        <option>Seleccione Tipo de pasajero</option>
                                        <option value="Persona Particular">Pasajero Particular</option>
                                        <option value="Persona en Auto a bordo (Max 4)">Pasajero en Auto a bordo (Max 4)</option>
                                        <option value="Pasajero en Autobus a bordo (Max 50)">Pasajero en Autobus a bordo (Max 50)</option>
                                        <option value="Pasajero Ayudante de gandola (1 por gandola)">Pasajero Ayudante de gandola (1 por gandola)</option>
                                        <option value="Pasajero Conductor de gandola (1 por gandola)">Pasajero Conductor de gandola (1 por gandola)</option>
                                        <option value="Pasajero Conductor de autobus (1 por autobus)">Pasajero Conductor de autobus (1 por autobus)</option>
                                    </select>
                                    <input id="passenger_full_name" type="text" class="form-control" placeholder="NOMBRE COMPLETO PASAJERO" />
                                    <input id="passenger_passport" type="text" class="form-control" placeholder="NÚMERO DE PASAPORTE PASAJERO" />
                                    <div align="center" style="margin-top: 15px; margin-bottom: 5px">
                                        <a class="btn btn-primary btn-square" onclick="addPassenger()" style="background-color: #337ab7; color: #FFF;">
                                            <i class="fas fa-plus-circle"> </i> Agregar Pasajero
                                        </a>
                                    </div>
                                </div>

                                <a class="btn btn-default btn-square" onclick="goToFourthStep();">
                                    <i class="fas fa-arrow-circle-right" > </i> Siguiente
                                </a>
                            </form>

                        </div>
                        <div id="booking-preview2" class="tab-content-holder col-md-7 hide booking-preview" style="border-left: 1px solid grey; overflow-y: scroll"> </div>
                    </div>
                    <!-- Fourth Tab -->
                    <div class="tab-pane fade" role="tabpanel" id="paymenttab" aria-labelledby="payment-tab">
                        <h5 class="title-contact" style="color:#005292; margin-top: 25px; margin-left: 15px ">Información de contacto</h5>
                        <div class="tab-content-holder col-md-5">
                            <br/>
                            <form class="form-horizontal booking-form" style="margin-left: 15px">
                                <div class="form-group">
                                    <input id="client_name" type="text"  class="form-control" placeholder="TU NOMBRE COMPLETO" />
                                    <input id="client_passport" type="text"  class="form-control" placeholder="TU NUMERO DE PASAPORTE" />
                                    <input id="client_number" type="text"  class="form-control" placeholder="TU NUMERO DE TELEFONO" />
                                    <input id="client_email" type="email"  class="form-control" placeholder="TU  EMAIL" />

                                </div>
                                <p><b>Al hacer click en finalizar, usted acepta nuestros <a href="#"> términos y servicios</a> y declara toda la información suministrada como verdadera.</b></p>
                                <br/>
                                <a class="btn btn-default btn-square" onclick="finish();">
                                    <i class="fas fa-arrow-circle-right" > </i> Finalizar
                                </a>
                            </form>

                        </div>
                        <div id="booking-preview3" class="tab-content-holder col-md-7 hide booking-preview" style="border-left: 1px solid grey; overflow-y: scroll">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>