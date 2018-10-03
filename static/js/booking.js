jQuery(document).ready(function ($) {

    // Init tabs
    $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    });

    //Init dropdown
    $('.dropdown-toggle').dropdown();

    $('#vehicle_type').change(function (event) {
        $('#cargo_high').removeClass('hide');
        $('#cargo_width').removeClass('hide');
        $('#cargo_length').removeClass('hide');
        $('#cargo_length + label').removeClass('hide');
        var vehicle_type = $(this).find(":selected").text();
        if (vehicle_type.includes('Moto Grande')){
            $('#cargo_high').addClass('hide');
            $('#cargo_width').addClass('hide');
            $('#cargo_length').addClass('hide');
            $('#cargo_length + label').addClass('hide');
        }
        if (vehicle_type.includes('Moto Chica')){
            $('#cargo_high').addClass('hide');
            $('#cargo_width').addClass('hide');
            $('#cargo_length').addClass('hide');
            $('#cargo_length + label').addClass('hide');
        }
        if (vehicle_type.includes('Bicicleta')){
            $('#cargo_high').addClass('hide');
            $('#cargo_width').addClass('hide');
            $('#cargo_length').addClass('hide');
            $('#cargo_length + label').addClass('hide');
        }
    });

    $('#route').change(function (event) {
        event.preventDefault();
        $("#travel_date").addClass('hide');
        $("#showLoading").removeClass('hide');
        $("#travel_date").datepicker("destroy");
        var origin_port = $(this).find(":selected").text().split('-')[0];
        $.ajax({
            type: "GET",
            url: "api.php",
            data: {get_route_dates: origin_port},
            success: function(datos){
                var availableDates = formatAvailableDates(datos);
                booking.availableTravels = datos;
                $("#travel_date").datepicker({
                    todayHighlight: true,
                    dateFormat: 'dd-mm-yy',
                    beforeShowDay: function(date) {
                        var formatedDate = formatDate(date);
                        if (availableDates.includes(formatedDate)) {
                            return {classes: 'available_date', tooltip: 'Disponible para booking'};
                        }
                        else{
                            return false;
                        }
                    }
                });
                $("#travel_date").datepicker("refresh");
                $("#showLoading").addClass('hide');
                $("#travel_date").removeClass('hide');
            },
            fail: function(datos){
                var port_dates = JSON.parse(datos);
                console.log('fail  ', port_dates);
            }
        });
    });
});

var booking = {};
booking.vehicleType = '';
booking.vehicleHeight = '';
booking.vehicleWidth = '';
booking.vehicleLength = '';
booking.vehicleWeight = '';
booking.vehiclePlate = '';
booking.cargoOwner = '';
booking.cargoOwnerPassport = '';
booking.cargoType = '';
booking.cargoWeight = '';
booking.cargoDescription = '';
booking.cargoPrice  = '';
booking.cargoCount = 0;


function formatAvailableDates(availableDates) {
    var responseArray = [];
    if (availableDates.length > 0 && $.isArray(availableDates)) {
        availableDates.forEach(function (availableDate) {
            var travelDateDay = parseInt(availableDate['date'].split('-')[0]);
            var travelDateMonth = parseInt(availableDate['date'].split('-')[1]);
            var travelDateYear = parseInt(availableDate['date'].split('-')[2]);
            responseArray.push(travelDateDay + '/' + travelDateMonth + '/' + travelDateYear);
        });
    }
    return responseArray;
}

function formatDate(date) {
    return  parseInt(date.getDate()) + '/' + (parseInt(date.getMonth()) + 1) + '/' + parseInt(date.getFullYear());
}

function updateSecondStepPreview(dut, route, travelDate){
    var route_html;
    $("#showLoading").addClass('hide');
    $('#cargo-tab').removeClass('btn-inactive');
    $('#dut-number').html('<b>NÚMERO DUT: </b>' + dut);
    route_html = '<p>\n' + '<b>' + route + '</b>\n' + '<i class="fas fa-arrow-circle-right"> </i>\n'  + travelDate +' - 7:00 AM\n' + '</p>';
    $('#route-detail').html(route_html);
    $('#booking-preview').removeClass('hide');
    $('#myTabs li:eq(1) a').tab('show');
}

function goToSecondStep(){
    $('#firstStepValidationMessage').addClass('hide');
    $("#showLoading").removeClass('hide');
    var dut = $('#dut').val();
    var route = $('#route').find(":selected").text().split(' -')[0];
    var dateSplit = $('#travel_date').val().split('/');
    var out_bound_date = dateSplit[1] + '-' + dateSplit[0] + '-' + dateSplit[2];
    var all_data_entered = (dut !='') && (route!='0') && (out_bound_date!='');

    if (all_data_entered){
        booking.dut_number = dut;
        booking.route = route;
        booking.travel_date = out_bound_date;
        booking.travel_id = booking.availableTravels.reduce(function (id, travel) {
            var sum = 0;
            if (travel['date'] == booking.travel_date){
                sum = parseInt(travel['id']);
            }
            return id +sum;
            
        },0);
        console.log(booking.availableTravels);
        console.log(booking.travel_date);
        console.log(booking.travel_id);
        $.ajax({
            type: "GET",
            url: "api.php",
            data: {route: route, travel_date: out_bound_date},
            success: function(datos){
                booking.tarifas = datos[0];
                updateSecondStepPreview(booking.dut_number, $('#route').find(":selected").text(), booking.travel_date);
            },
            fail: function(datos){
                console.log('fail  ', datos);
            }
        });

    }
    else{
        $('#firstStepValidationMessage').removeClass('hide');
    }
}

function goToThirdStep(){

    $.ajax({
        type: "GET",
        url: "api.php",
        data: {route: booking.route, travel_date:  booking.travel_date, passenger: 1},
        success: function(datos){
            booking.tarifasPasajero = datos[0];
            booking.passengerList = [];
            console.log(booking);
            $('#myTabs li:eq(2) a').tab('show');
            $('.booking-preview').removeClass('hide');
            $('#passenger-tab').removeClass('btn-inactive');
            var route_html = $('#booking-preview').html();
            $('#booking-preview2').html(route_html);
        },
        fail: function(datos){
            console.log('fail  ', datos);
        }
    });

}

function goToFourthStep(){

    booking.appliedPassengerTarifaId = booking.tarifasPasajero.id;
    $('#myTabs li:eq(3) a').tab('show');
    $('#payment-tab').removeClass('btn-inactive');
    $('#booking-preview2 tbody td button.btn-danger').each(function() {
        $(this).remove();
    });
    var totalPrice = 0;
    $('#booking-preview2 tbody td.price').each(function() {
        var price = parseInt($(this).text().replace('$',''));
        totalPrice = totalPrice + price;
    });
    var subTotal = '<div class="col-md-12"> <div class="col-md-4" style="float: right"> ' +
        '<hr style="border-top:solid 1px black"/>' +
        '<div class="col-md-12" style="float: right"> <h5 >Sub Total:  <b>' + totalPrice + '$</b> </h5> </div>' +
        '<div class="col-md-12" style="float: right"> <h5>Impuestos:  <b> 25$</b> </h5> </div> </div>' +
        '<div class="col-md-12" style="float: right"> <h4  style=" float: right; margin-right: 90px; margin-top: 20px;">Total:  <b> ' + (totalPrice + 25)  + '$</b> </h4> </div> </div>' +
        '</div>';
    var routeHtml = $('#booking-preview2').html().replace('btn-danger', 'hide');
    $('#booking-preview3').html(routeHtml);
    $('#booking-preview3').append(subTotal);
    $('#booking-preview3').removeClass('hide');
    booking.price = totalPrice;
    booking.taxes = 25;
    booking.totalPrice = booking.price + booking.taxes;
}

function calculateCargoPrice(vehicleLength, vehicleHeight, vehicleWidth, vehicleType, tarifas){
    var priceAmount = tarifas['tres_metros'];
    if (vehicleLength > 3){
        priceAmount = tarifas['seis_metros'];
    }
    if (vehicleLength > 6){
        priceAmount = tarifas['nueve_metros'];
    }
    if (vehicleLength > 9){
        priceAmount = tarifas['quince_metros'];
    }
    if (vehicleLength > 15){
        priceAmount = tarifas['dieciocho_metros'];
    }
    if (vehicleLength === 18){
        priceAmount = tarifas['dieciocho_metros'];
    }
    if (vehicleLength > 18){
        priceAmount = 0;
    }
    if (vehicleType.includes('Moto Grande')){
        priceAmount = tarifas['moto_grande'];
    }
    if (vehicleType.includes('Moto Chica')){
        priceAmount = tarifas['moto_chica'];
    }
    if (vehicleType.includes('Bicicleta')){
        priceAmount = tarifas['bicicleta'];
    }
    if (vehicleHeight.includes('Higher')){
        priceAmount = 0;
    }
    if (vehicleWidth.includes('Wider')){
        priceAmount = 0;
    }
    return priceAmount;
}

function calculatePassengerPrice(passengerType, tarifas){
    
    var priceAmount = tarifas['particular'];
    if (passengerType.includes('Pasajero en Auto a bordo (Max 4)')){
        priceAmount = tarifas['en_auto'];
    }
    if (passengerType.includes('Pasajero en Autobus a bordo (Max 50)')){
        priceAmount = tarifas['en_autobus'];
    }
    if (passengerType.includes('Pasajero Ayudante de gandola (1 por gandola)')){
        priceAmount = tarifas['ayudante_gandola'];
    }
    if (passengerType.includes('Pasajero Conductor de gandola (1 por gandola)')){
        priceAmount = tarifas['conductor_gandola'];
    }
    if (passengerType.includes('Pasajero Conductor de autobus (1 por autobus)')){
        priceAmount = tarifas['conductor_autobus'];
    }
    return priceAmount;
}

function deleteCargo(jqueryInstance){
    jqueryInstance.closest('tr').remove();
    booking.vehicleType = '';
    booking.vehicleHeight = '';
    booking.vehicleWidth = '';
    booking.vehicleLength = '';
    booking.vehicleWeight = '';
    booking.vehiclePlate = '';
    booking.cargoOwner = '';
    booking.cargoOwnerPassport = '';
    booking.cargoType = '';
    booking.cargoWeight = '';
    booking.cargoDescription = '';
    booking.cargoPrice  = '';
    booking.cargoCount = 0;
}

function addCargo(){
    $('#cargo-list-table tbody div.alert-danger').remove();
    if (booking.cargoCount > 0) {
        var table_body = $('#cargo-list-table tbody');
        var bookingNumberValidation = '<div class="alert alert-dismissible alert-danger">Solo se permite una carga por booking</div>';
        table_body.append(bookingNumberValidation);
    }
    if (booking.cargoCount < 1) {

        var vehicleType = $('#vehicle_type').find(":selected").text();
        var vehicleLength = parseFloat($('#cargo_length').val());
        var vehicleWidth = $('#cargo_width').find(":selected").text();
        var vehicleHeight = $('#cargo_high').find(":selected").text();
        var vehicleWeight = parseFloat($('#vehicle_weight').val());
        var licensePlate = $('#license_plate').val();

        var cargoOwner = $('#cargo_owner_full_name').val();
        var cargoOwnerPassport = $('#cargo_owner_passport_number').val();
        var cargoType = $('#cargo_type').val();
        var cargoWeight = $('#cargo_weight').val();
        var cargoDescription = $('#cargo_description').val();


        var vehicleTypeHtml = '<span class="label label-success text-uppercase">' + vehicleType + '</span> ';
        var licensePlateHtml = '<span class="label label-license text-uppercase">' + licensePlate + '</span>';
        var vehicleHeightHtml = '<span class="label label-default text-uppercase">' + vehicleHeight + ' </span> ';
        var vehicleWidthHtml = '<span class="label label-default text-uppercase">' + vehicleWidth + '</span> ';
        var vehicleLengthHtml = '<span class="label label-default text-uppercase">' + vehicleLength + ' mts LARGO </span> ';
        var vehicleWeightHtml = '<span class="label label-default text-uppercase">' + vehicleWeight + ' TON </span> ';


        if (cargoType.length < 1) {
            cargoType = 'SIN CARGA';
            cargoDescription = 'NO TRANSPORTA CARGA';
            cargoOwner = 'N/A';
            cargoOwnerPassport = 'N/A';
        }
        else {
            if (cargoDescription.length < 1) {
                cargoDescription = 'SIN DESCRIPCIÓN DE CARGA';
            }
        }


        var cargoOwnerHtml = '<span class="label label-success text-uppercase">' + cargoOwner + '</span>';
        var cargoOwnerPassportHtml = '<span class="label label-license text-uppercase">' + cargoOwnerPassport + '</span>';
        var cargoTypeHtml = '<span class="label label-success text-uppercase">' + cargoType + ' </span>';
        var cargoWeightHtml = '<span class="label label-default text-uppercase">' + cargoWeight + ' TON </span> ';
        var cargoDescriptionHtml = '<span class="label label-default text-uppercase">' + cargoDescription + '</span>';
        var cargoPrice = calculateCargoPrice(vehicleLength, vehicleHeight, vehicleWidth, vehicleType, booking.tarifas);
        var deleteCargoHtml = '<td><button type="button" onclick="deleteCargo(' + "$(this)" + ')" style="font-size: 11px;padding: 2px 6px;" class="btn btn-danger">X</button></td>';

        if (cargoPrice > 0) {
            var cargoPriceHtml = '<td class="price"><b>' + cargoPrice + '$</b></td>';
        }
        else {
            var cargoPriceHtml = '<td><b>Por Cotizar</b></td>';
        }

        booking.vehicleType = vehicleType;
        booking.vehicleHeight = vehicleHeight;
        booking.vehicleWidth = vehicleWidth;
        booking.vehicleLength = vehicleLength;
        booking.vehicleWeight = vehicleWeight;
        booking.vehiclePlate = licensePlate;
        booking.cargoOwner = cargoOwner;
        booking.cargoOwnerPassport = cargoOwnerPassport;
        booking.cargoType = cargoType;
        booking.cargoWeight = cargoWeight;
        booking.cargoDescription = cargoDescription;
        booking.cargoPrice = parseInt(cargoPrice);
        booking.cargoCount = 1;
        booking.appliedTarifaId = booking.tarifas.id;

        console.log('booking', booking);

        var table_body = $('#cargo-list-table tbody');
        var vehicleDetail = '<td>' + vehicleTypeHtml + licensePlateHtml + vehicleHeightHtml + vehicleWidthHtml + vehicleLengthHtml + vehicleWeightHtml + '</td>';
        var cargoOwnerDetail = '<td>' + cargoOwnerHtml + cargoOwnerPassportHtml + '</td>';
        var cargoDetail = '<td>' + cargoTypeHtml + cargoDescriptionHtml + cargoWeightHtml + '</td>';
        var cargo_row_detail = '<tr>' + vehicleDetail + cargoOwnerDetail + cargoDetail + cargoPriceHtml + deleteCargoHtml + '</tr>';
        table_body.append(cargo_row_detail);
        $('#cargo-list-table').removeClass('hide');
    }
}

function addPassenger(){
    var passengerType = $('#passenger_type').find(":selected").text();
    var passengerName = $('#passenger_full_name').val();
    var passengerPassport = $('#passenger_passport').val();
    var passengerPrice = calculatePassengerPrice(passengerType, booking.tarifasPasajero);

    var passenger = {
        passengerType: passengerType,
        passengerName: passengerName,
        passengerPassport: passengerPassport,
        passengerPrice: passengerPrice,
    };

    booking.passengerList.push(passenger);

    var passengerTypeHtml = '<td>' + passengerType + '</td>';
    var passengerInfoHtml = '<td> ' + passengerName + ' <br/> ' + passengerPassport + ' </td>';
    var passengerPriceHtml = '<td class="price"> <b>' + passengerPrice+ '$</b> </td>';
    var deletePassengerHtml = '<td> <button type="button" onclick="' +"$(this).closest('tr')" + '.remove()"style="font-size: 11px;padding: 2px 6px;" class="btn btn-danger">X</button></td>';
    var passengerTableBody = $('#booking-preview2 #passenger-list-table tbody');
    var passengerDetail = '<tr>' + passengerTypeHtml  + passengerInfoHtml + passengerPriceHtml + deletePassengerHtml + '</tr>';
    passengerTableBody.append(passengerDetail);
    $('#booking-preview2 #passenger-list-table').removeClass('hide');

}

function finish(){
    $('#fourthStepValidationMessage').addClass('hide');
    $('#fourthStepSuccessMessage').addClass('hide');
    //console.log(booking);
    var clientName = $('#client_name').val();
    var clientPassport = $('#client_passport').val();
    var clientPhone = $('#client_number').val();
    var clientEmail = $('#client_email').val();
    var all_data_entered = (clientName !='') && (clientPassport!='') && (clientPhone!='') && (clientEmail!='');

    if (all_data_entered){
        $('#finish').addClass('disabled');
        $('#fourthStepSuccessMessage').removeClass('hide');
        booking.clientName = clientName;
        booking.clientPassport = clientPassport;
        booking.clientPhone = clientPhone;
        booking.clientEmail = clientEmail;
        $.ajax({
            type: "POST",
            url: "api.php",
            data: booking,
            success: function(datos){
                console.log('datos ', datos);
            },
            fail: function(datos){
                console.log('fail  ', datos);
                $('#finish').removeClass('disabled');
            }
        });
    }
    else{
        $('#fourthStepValidationMessage').removeClass('hide');
    }


}

