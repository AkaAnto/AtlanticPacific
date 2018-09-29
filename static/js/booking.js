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
function formatAvailableDates(availableDates) {
    var responseArray = [];
    if (availableDates.length > 0 && $.isArray(availableDates)) {
        availableDates.forEach(function (availableDate) {
            var travelDateDay = parseInt(availableDate.split('-')[0]);
            var travelDateMonth = parseInt(availableDate.split('-')[1]);
            var travelDateYear = parseInt(availableDate.split('-')[2]);
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
        $.ajax({
            type: "GET",
            url: "api.php",
            data: {route: route, travel_date: out_bound_date},
            success: function(datos){
                booking.tarifas = datos[0];
                booking.cargoList = [];
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
    $('#myTabs li:eq(3) a').tab('show');
    $('#payment-tab').removeClass('btn-inactive');
    $('#booking-preview2 tbody td button.btn-danger').each(function() {
        $(this).remove();
    });
    var total_price = 0;
    $('#booking-preview2 tbody td.price').each(function() {
        var price = parseInt($(this).text().replace('$',''));
        total_price = total_price + price;
    });
    var sub_total = '<div class="col-md-12"> <div class="col-md-4" style="float: right"> ' +
        '<hr style="border-top:solid 1px black"/>' +
        '<div class="col-md-12" style="float: right"> <h5 >Sub Total:  <b>' + total_price + '$</b> </h5> </div>' +
        '<div class="col-md-12" style="float: right"> <h5>Taxes:  <b> 25$</b> </h5> </div> </div>' +
        '<div class="col-md-12" style="float: right"> <h4  style=" float: right; margin-right: 90px; margin-top: 20px;">Total:  <b> ' + (total_price + 25)  + '$</b> </h4> </div> </div>' +
        '</div>';
    var route_html = $('#booking-preview2').html().replace('btn-danger', 'hide');
    $('#booking-preview3').html(route_html);
    $('#booking-preview3').append(sub_total);
    $('#booking-preview3').removeClass('hide');

}

function  calculateCargoPrice(vehicleLength, vehicleHeight, vehicleWidth, vehicleType, tarifas){
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

function  calculatePassengerPrice(passengerType, tarifas){
    
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

function addCargo(){

    var vehicleType = $('#vehicle_type').find(":selected").text();
    var vehicleLength = parseFloat($('#cargo_length').val());
    var vehicleWidth = $('#cargo_width').find(":selected").text();
    var vehicleHeight = $('#cargo_high').find(":selected").text();
    var vehicleWeight = parseFloat($('#vehicle_weight').val());
    var licensePlate = $('#license_plate').val();

    var cargoOwner = $('#cargo_owner_full_name').val();
    var cargoOwnerPassport =  $('#cargo_owner_passport_number').val();
    var cargoType =  $('#cargo_type').val();
    var cargoWeight =  $('#cargo_weight').val();
    var cargoDescription =  $('#cargo_description').val();


    var vehicleTypeHtml = '<span class="label label-success text-uppercase">' + vehicleType + '</span> ';
    var licensePlateHtml = '<span class="label label-license text-uppercase">' + licensePlate + '</span>';
    var vehicleHeightHtml = '<span class="label label-default text-uppercase">' + vehicleHeight + ' </span> ';
    var vehicleWidthHtml ='<span class="label label-default text-uppercase">' + vehicleWidth + '</span> ';
    var vehicleLengthHtml = '<span class="label label-default text-uppercase">' + vehicleLength + ' mts LARGO </span> ';
    var vehicleWeightHtml = '<span class="label label-default text-uppercase">' + vehicleWeight + ' TON </span> ';


    if (cargoType.length < 1){
        cargoType = 'SIN CARGA';
        cargoDescription = 'NO TRANSPORTA CARGA';
        cargoOwner = 'N/A';
        cargoOwnerPassport = 'N/A';
    }
    else{
        if (cargoDescription.length < 1){
            cargoDescription = 'SIN DESCRIPCIÓN DE CARGA';
        }
    }


    var cargoOwnerHtml = '<span class="label label-success text-uppercase">' + cargoOwner + '</span>';
    var cargoOwnerPassportHtml = '<span class="label label-license text-uppercase">' + cargoOwnerPassport + '</span>';
    var cargoTypeHtml = '<span class="label label-success text-uppercase">' + cargoType + ' </span>';
    var cargoWeightHtml = '<span class="label label-default text-uppercase">' + cargoWeight + ' TON </span> ';
    var cargoDescriptionHtml = '<span class="label label-default text-uppercase">' + cargoDescription + '</span>';
    var cargoPrice = calculateCargoPrice(vehicleLength, vehicleHeight, vehicleWidth, vehicleType, booking.tarifas);
    var deleteCargoHtml = '<td><button type="button" onclick="' +"$(this).closest('tr')" + '.remove()"style="font-size: 11px;padding: 2px 6px;" class="btn btn-danger">X</button></td>';

    if (cargoPrice > 0){
        var cargoPriceHtml = '<td class="price"><b>'+ cargoPrice +'$</b></td>';
    }
    else {
        var cargoPriceHtml = '<td><b>Por Cotizar</b></td>';
    }

    var new_cargo ={
            vehicleType: vehicleType,
            vehicleHeight: vehicleHeight,
            vehicleWidth: vehicleWidth,
            vehicleLength: vehicleLength,
            cargo: {}
    };
    booking.cargoList.push(new_cargo);

    console.log('booking.cargoList ', booking.cargoList);

    var table_body = $('#cargo-list-table tbody');
    var vehicleDetail = '<td>' + vehicleTypeHtml + licensePlateHtml + vehicleHeightHtml + vehicleWidthHtml + vehicleLengthHtml + vehicleWeightHtml + '</td>';
    var cargoOwnerDetail = '<td>' + cargoOwnerHtml + cargoOwnerPassportHtml + '</td>';
    var cargoDetail = '<td>' + cargoTypeHtml + cargoDescriptionHtml + cargoWeightHtml + '</td>';
    var cargo_row_detail = '<tr>' + vehicleDetail + cargoOwnerDetail + cargoDetail + cargoPriceHtml + deleteCargoHtml + '</tr>';
    table_body.append(cargo_row_detail);
    $('#cargo-list-table').removeClass('hide');
}

function addPassenger(){
    var passengerType = $('#passenger_type').find(":selected").text();
    var passenger_type = '<td>' + passengerType + '</td>';
    var passenger_price_amount = calculatePassengerPrice(passengerType, booking.tarifasPasajero);

    var table_passenger_body = $('#booking-preview2 #passenger-list-table tbody');
    var passenger_info = '<td> ' + $('#passenger_full_name').val() + ' <br/> ' + $('#passenger_passport').val() + ' </td>';
    var passenger_price_total = '<td class="price"> <b>' + passenger_price_amount+ '$</b> </td>';
    var delete_passenger = '<td> <button type="button" onclick="' +"$(this).closest('tr')" + '.remove()"style="font-size: 11px;padding: 2px 6px;" class="btn btn-danger">X</button></td>';
    var passenger_detail = '<tr>' + passenger_type  + passenger_info + passenger_price_total + delete_passenger + '</tr>';
    table_passenger_body.append(passenger_detail);
    $('#booking-preview2 #passenger-list-table').removeClass('hide');

}

function finish(){
    var doc = new jsPDF();
    var elementHandler = {
        '.ignorePDF': function (element, renderer) {
            return true;
        }
    };
    var source = window.document.getElementById("booking-preview3");
    doc.fromHTML(
        source,
        1,
        1,
        {
            'width': 1800,'elementHandlers': elementHandler
        });

    doc.output("dataurlnewwindow");
}
