jQuery(document).ready(function ($) {

    // Init tabs
    $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    })

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

});
var booking;




function goToSecondStep(){
    $('#myTabs li:eq(1) a').tab('show');
    $('.booking-preview').removeClass('hide');
    $('#cargo-tab').removeClass('btn-inactive');
    $('#dut-number').html('<b>NÚMERO DUT: </b>' + $('#dut').val());
    var route = $('#route').find(":selected").text();
    var route_html = '';
    var out_bound_date = $('#outbounddate').val();
    if (route.includes('El Savador - Costa Rica')){
        route_html =
            '<p>\n' +
            '<b>EL SALVADOR - COSTA RICA</b>\n' +
            '<i class="fas fa-arrow-circle-right"> </i>\n'  +
            out_bound_date +' - 7:00 AM\n' +
            '</p>';
    }
    if (route.includes('Costa Rica - El Savador')){
        route_html =
            '<p>\n' +
            '<b>COSTA RICA - EL SALVADOR</b>\n' +
            '<i class="fas fa-arrow-circle-right"> </i>\n'  +
            out_bound_date +' - 7:00 AM\n' +
            '</p>';
    }

    $('#route-detail').html(route_html);
}

function goToThirdStep(){
    $('#myTabs li:eq(2) a').tab('show');
    $('.booking-preview').removeClass('hide');
    $('#passenger-tab').removeClass('btn-inactive');
    var route_html = $('#booking-preview').html();
    $('#booking-preview2').html(route_html);
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

function addCargo(){

    var vehicle_type = '<span class="label label-success text-uppercase">' + $('#vehicle_type').find(":selected").text()+ '</span> ';
    var license_plate = '<span class="label label-license text-uppercase">' + $('#license_plate').val()+ '</span>';
    var cargo_high = '<span class="label label-default text-uppercase">' + $('#cargo_high').find(":selected").text() + ' </span> ';
    var cargo_width ='<span class="label label-default text-uppercase">' + $('#cargo_width').find(":selected").text() + '</span> ';
    var cargo_length = '<span class="label label-default text-uppercase">' + $('#cargo_length').val() + ' mts LARGO </span> ';
    var vehicle_weight = '<span class="label label-default text-uppercase">' + $('#vehicle_weight').val() + ' KG </span> ';


    var cargo_owner_full_val =  $('#cargo_owner_full_name').val();
    var cargo_owner_passport_number_val =  $('#cargo_owner_passport_number').val();
    var cargo_weight = '<span class="label label-default text-uppercase">' + $('#cargo_weight').val() + ' KG </span> ';
    var cargo_type_val =  $('#cargo_type').val();
    var cargo_description_val =  $('#cargo_description').val();
    if (cargo_type_val.length < 1){
        cargo_type_val = 'SIN CARGA';
        cargo_description_val = 'NO TRANSPORTA CARGA';
        cargo_owner_full_val = 'N/A';
        cargo_owner_passport_number_val = 'N/A';
    }
    else{
        if (cargo_description_val.length < 1){
            cargo_description_val = 'SIN DESCRIPCIÓN DE CARGA';
        }
    }



    var cargo_type = '<span class="label label-success text-uppercase">' + cargo_type_val + ' </span>';
    var cargo_description ='<span class="label label-default text-uppercase">' + cargo_description_val + '</span>';
    var cargo_owner_full_name = '<span class="label label-success text-uppercase">' + cargo_owner_full_val + '</span>';
    var cargo_owner_passport_number = '<span class="label label-license text-uppercase">' + cargo_owner_passport_number_val + '</span>';


    var price_amount = 550;
    var cargo_length_value = parseFloat($('#cargo_length').val());
    if (cargo_length_value > 3){
        price_amount = 750;
    }
    if (cargo_length_value > 6){
        price_amount = 950;
    }
    if (cargo_length_value > 9){
        price_amount = 1550;
    }
    if (cargo_length_value > 15){
        price_amount = 1800;
    }
    if (cargo_length_value > 18){
        price_amount = 0;
    }
    if (vehicle_type.includes('Moto Grande')){
        price_amount = 150;
    }
    if (vehicle_type.includes('Moto Chica')){
        price_amount = 100;
    }
    if (vehicle_type.includes('Bicicleta')){
        price_amount = 75;
    }
    if (cargo_high.includes('Higher')){
        price_amount = 0;
    }
    if (cargo_width.includes('Wider')){
        price_amount = 0;
    }

    if (price_amount > 0){
        var cargo_price = '<td class="price"><b>'+price_amount+'$</b></td>';
    }
    else {
        var cargo_price = '<td><b>Cotizar</b></td>';
    }

    var delete_cargo = '<td><button type="button" onclick="' +"$(this).closest('tr')" + '.remove()"style="font-size: 11px;padding: 2px 6px;" class="btn btn-danger">X</button></td>';
    console.log({
        vehicle_type: vehicle_type,
        cargo_high: cargo_high,
        cargo_width: cargo_width,
        cargo_length: cargo_length,
        cargo_quantity: 1,
    });
    var table_body = $('#cargo-list-table tbody');
    var vehicle_detail = '<td>' + vehicle_type + license_plate + cargo_high + cargo_width + cargo_length + vehicle_weight + '</td>';
    var cargo_owner_detail = '<td>' + cargo_owner_full_name + cargo_owner_passport_number + '</td>';
    var cargo_detail = '<td>' + cargo_type + cargo_description + cargo_weight + '</td>';
    var cargo_row_detail = '<tr>' + vehicle_detail + cargo_owner_detail + cargo_detail + cargo_price + delete_cargo + '</tr>';
    table_body.append(cargo_row_detail);
    $('#cargo-list-table').removeClass('hide');
}

function addPassenger(){

    var passenger_type = '<td>' + $('#passenger_type').find(":selected").text() + '</td>';
    var passenger_price_amount = 60;
    if (passenger_type.includes('Pasajero en Auto a bordo (Max 4)')){
        passenger_price_amount = 25;
    }
    if (passenger_type.includes('Pasajero en Autobus a bordo (Max 50)')){
        passenger_price_amount = 25;
    }
    if (passenger_type.includes('Pasajero Ayudante de gandola (1 por gandola)')){
        passenger_price_amount = 25;
    }
    if (passenger_type.includes('Pasajero Conductor de gandola (1 por gandola)')){
        passenger_price_amount = 0;
    }
    if (passenger_type.includes('Pasajero Conductor de autobus (1 por autobus)')){
        passenger_price_amount = 0;
    }
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
