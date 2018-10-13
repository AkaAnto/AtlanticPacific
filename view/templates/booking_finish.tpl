<!-- Fourth Tab -->
<div class="tab-pane fade" role="tabpanel" id="paymenttab" aria-labelledby="payment-tab">
    <h5 class="title-contact" style="color:#005292; margin-top: 25px; margin-left: 15px ">Información de contacto</h5>
    <div class="tab-content-holder col-md-5">
        <br/>
        <form class="form-horizontal booking-form" style="margin-left: 15px">
            <div class="form-group">
                <label for="client_name">TU NOMBRE COMPLETO</label>
                <input id="client_name" type="text"  class="form-control" placeholder="" />
            </div>
            <div class="form-group">
                <label for="client_passport">TU NUMERO DE PASAPORTE</label>
                <input id="client_passport" type="text"  class="form-control" placeholder="" />
            </div>
            <div class="form-group">
                <label for="client_number">TU NUMERO DE TELEFONO</label>
                <input id="client_number" type="text"  class="form-control" placeholder="" />
            </div>
            <div class="form-group">
                <label for="client_number">TU  EMAIL</label>
                <input id="client_email" type="email"  class="form-control" placeholder="" />
            </div>
            <p><b>Al hacer click en finalizar, usted acepta nuestros <a href="#"> términos y servicios</a> y declara toda la información suministrada como verdadera.</b></p>
            <br/>
            <div class="alert alert-dismissible alert-danger hide" id="fourthStepValidationMessage">Debe sumistrar toda la información</div>
            <div class="alert alert-dismissible alert-info hide" id="fourthStepSuccessMessage">
                Hemos registrado su cotizacion, recibirá un correo electrónico con la informaciòn necesaria para continuar con el proceso.
                Recuerde verificar su  correo no deseado (Spam).
            </div>
            <a class="btn btn-default btn-square" onclick="finish();" id="finish">
                <i class="fas fa-arrow-circle-right" > </i> Finalizar
            </a>
        </form>
    </div>
    <div id="booking-preview3" class="tab-content-holder col-md-7 hide booking-preview" style="border-left: 1px solid grey; overflow-y: scroll">
    </div>
</div>