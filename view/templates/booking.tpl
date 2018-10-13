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
                    {include file="booking_ruta.tpl"}
                    {include file="booking_cargo.tpl"}
                    {include file="booking_passenger.tpl"}
                    {include file="booking_finish.tpl"}
                </div>
            </div>
        </div>
    </div>
</div>