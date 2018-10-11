$(document).ready(function() {

    function getBookingInfo(bookingId){
        var booking = {
            code: $('td#codigo_booking_'+bookingId).text(),
            route: $('td#ruta_booking_'+bookingId).text(),
            client: $('td#cliente_booking_'+bookingId).html(),
            price: $('td#costo_booking_'+bookingId).text(),
            dutNumber: $('td#dut_number_booking_'+bookingId).text(),
            cargo: JSON.parse($('td#cargo_booking_'+bookingId).text()),
            passengers: JSON.parse($('td#cargo_passengers_'+bookingId).text()),
        };
        return booking;
    }

    function clientDetail(client){
        var clientData = client.split('<br>');
        var detail = '<p><b>CLIENTE:' +clientData[0] + ' </b></p>' + '<p><b>PASAPORTE: ' +clientData[1] + ' </b></p>' + '<p><b>TELEFONO: ' +clientData[2] + ' </b></p>' + '<p><b>CORREO: ' +clientData[3] + ' </b></p>';
        return detail;
    }

    function passengerDetail(passenger){
        var detail = '<tr><td><b>' +passenger.tipo.split('(')[0] + ' </b></td>' + '<td><b>' +passenger.nombre + ' - ' + passenger.pasaporte + ' </b></td>' + '<td><b>$'+passenger.precio + ' </b></td></tr>';
        return detail;
    }

    function setCargoModalInfo(modalId, cargo){
        $(modalId + ' #vehicle_type').text(cargo.tipo_vehiculo);
        $(modalId + ' #vehicle_plate').text(cargo.placa);
        $(modalId + ' #vehicle_height').text(cargo.alto);
        $(modalId + ' #vehicle_width').text(cargo.ancho);
        $(modalId + ' #vehicle_length').text(cargo.largo + ' MTS de largo');

        $(modalId + ' #cargo_owner').text(cargo.nombre_responsable_carga);
        $(modalId + ' #cargo_passport').text(cargo.pasaporte_responsable_carga);
        $(modalId + ' #cargo_type').text(cargo.tipo_carga);
        $(modalId + ' #cargo_description').text(cargo.descripcion_carga);
        $(modalId + ' #cargo_price').text('$' +cargo.precio);
        $(modalId + ' #bookingCargoPrice').html(' <b>SUB-TOTAL CARGA: $' +cargo.precio+'</b>');

    }

    function setBookingHeaderInfo(modalId, booking){
        $(modalId + ' #bookingCodigo').html('<b> BOOKING #' +booking.code + ' </b>');
        $(modalId + ' #dutNumber').html('<b> RUTA: ' +booking.route + ' </b>');
        $(modalId + ' #routeDetail').html('<p><b>NUMERO DUT: ' +booking.dutNumber + ' </b></p>');
        $(modalId +' #clientDetail').html(clientDetail(booking.client));
    }

    function setPassengersInfo(modalId, booking){
        var passengerSubTotal = 0;
        booking.passengers.forEach(function(passenger) {
            $(modalId + ' #passengerListTable tbody').append(passengerDetail(passenger));
            if (parseInt(passenger.precio) != NaN) {
                passengerSubTotal += parseInt(passenger.precio);
            }
        });
        $(modalId + ' #bookingPassengerTotalPrice').html('<b>SUB-TOTAL PASAJEROS:  $'+ passengerSubTotal + '</b>');
        $(modalId + ' #bookingPriceBeforeTaxes').html('<b>SUB-TOTAL: '+ (parseInt(booking.price.replace('$','')) - 25)+ '</b>');
        $(modalId + ' #bookingPriceAfterTaxes').html('<b>TOTAL: '+ booking.price + '</b>');
    }

    function updateBookingModal(modalId, bookingId){
        var id = parseInt(bookingId.replace('booking_',''));
        var booking = getBookingInfo(id);
        setBookingHeaderInfo(modalId, booking);
        setCargoModalInfo(modalId, booking.cargo);
        setPassengersInfo(modalId, booking);
    }



    // Booking Detail
    // Update values as the modal shows
    $('#bookingDetail').on('show.bs.modal', function (event) {
        var bookingId = event.relatedTarget.getAttribute("data-id");
        updateBookingModal('#bookingDetail',bookingId);
    });

    $('#bookingApprove').on('show.bs.modal', function (event) {
        var bookingId = event.relatedTarget.getAttribute("data-id");
        updateBookingModal('#bookingApprove',bookingId);
    });

    $('#barcoEdit').on('hide.bs.modal', function (event) {
        setTimeout(function (){location.reload()},1000);
    });

    $( "#editar_barco" ).submit(function( event ) {
        $('#barcoEdit #guardar_datos').attr("disabled", true);
        var parametros = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "barcos.php",
            data: parametros,
            beforeSend: function(objeto){
                $("#ajax_message").html('<div class="alert alert-warning" role="alert">Editando barco</div>');
            },
            success: function(datos){
                var id = parametros.split('&nombre')[0].replace('id=','');
                $("tr#barco_" + id).remove();
                $("#add_barco_success_table").prepend(datos);
                $('#editar_barco #guardar_datos').attr("disabled", false);
                $("#editar_barco #ajax_message").html("");
                $("#editar_barco #ajax_message").html('<div class="alert alert-success" role="alert">Barco editado</div>');
                setTimeout(function (){$("#editar_barco #ajax_message").html("");},3000);
            }
        });
        event.preventDefault();
    });


    //Search
    function doSearch(trSelector, searchText){
        $(trSelector).each(function(){
            $(this).addClass('hide');
        });
        var classSelector = trSelector + '[class*="' + searchText + '"]';
        if (searchText===''){
            classSelector = trSelector;
        }
        $(classSelector).each(function(){
            $(this).removeClass('hide');
        });
    };

    $('#search_booking_input').keyup(function (event) {
        var searchText = event.target.value;
        doSearch('#booking_success_table tr', searchText);

    });
    $('#search_booking_button').click(function (event) {
        var searchText = $('#search_booking_input').val();
        doSearch('#booking_success_table tr', searchText);
    });

});
