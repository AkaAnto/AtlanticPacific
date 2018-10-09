<!-- First Tab -->
<div class="tab-pane active in" role="tabpanel" id="routetab" aria-labelledby="home-tab">
    <h5 class="title-contact" style="color:#005292; margin-top: 25px; margin-left: 15px ">Suministre la siguiente información</h5>
    <div class="tab-content-holder col-md-5">
        <br/>
        <form class="form-horizontal booking-form" style="margin-left: 15px">
            <div class="form-group">
                <label for="dut">NÚMERO DUT</label>
                <input class="form-control" placeholder="" id="dut" />
            </div>
            <div class="form-group">
                <label for="route">SELECCIONE UNA RUTA</label>
                <select class="form-control" id="route">
                    <option selected value="0"></option>
                    <option value="El Salvador - Costa Rica">El Salvador - Costa Rica</option>
                    <option value="Costa Rica - El Salvador">Costa Rica - El Salvador</option>
                </select>
            </div>
            <div class="form-group">
                <label for="travel_date" id="travel_date_label" class="hide">SELECCIONE LA FECHA</label>
                <input id="travel_date" type="text" class="form-control hide">
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