<!-- Third Tab -->
<div class="tab-pane fade" role="tabpanel" id="passengertab" aria-labelledby="profile-tab">
    <h5 class="title-contact" style="color:#005292; margin-top: 25px; margin-left: 15px ">Información de los pasajeros</h5>
    <div class="tab-content-holder col-md-5">
        <br/>
        <form class="form-horizontal booking-form" style="margin-left: 15px">
            <div class="form-group">
                <label for="passenger_type">SELECCIONE TIPO DE PASAJERO</label>
                <select class="form-control" id="passenger_type">
                    <option></option>
                    <option value="Persona Particular">Pasajero Particular</option>
                    <option value="Persona en Auto a bordo (Max 4)">Pasajero en Auto a bordo (Max 4)</option>
                    <option value="Pasajero en Autobus a bordo (Max 50)">Pasajero en Autobus a bordo (Max 50)</option>
                    <option value="Pasajero Ayudante de gandola (1 por gandola)">Pasajero Ayudante de gandola (1 por gandola)</option>
                    <option value="Pasajero Conductor de gandola (1 por gandola)">Pasajero Conductor de gandola (1 por gandola)</option>
                    <option value="Pasajero Conductor de autobus (1 por autobus)">Pasajero Conductor de autobus (1 por autobus)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="passenger_full_name">NOMBRE COMPLETO PASAJERO</label>
                <input id="passenger_full_name" type="text" class="form-control" placeholder="" />
            </div>
            <div class="form-group">
                <label for="passenger_passport">NÚMERO DE PASAPORTE PASAJERO</label>
                <input id="passenger_passport" type="text" class="form-control" placeholder="" />
            </div>
            <div align="center" style="margin-top: 15px; margin-bottom: 5px">
                <a class="btn btn-primary btn-square" onclick="addPassenger()" style="background-color: #337ab7; color: #FFF;">
                    <i class="fas fa-plus-circle"> </i> Agregar Pasajero
                </a>
            </div>
            <a class="btn btn-default btn-square" onclick="goToFourthStep();">
                <i class="fas fa-arrow-circle-right" > </i> Siguiente
            </a>
        </form>
    </div>
    <div id="booking-preview2" class="tab-content-holder col-md-7 hide booking-preview" style="border-left: 1px solid grey;"> </div>
</div>