$(document).ready(function() {

    // Add barco
    $( "#agregar_pago" ).submit(function( event ) {
        $('#guardar_datos').attr("disabled", true);
        var parametros = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "pagos.php",
            data: parametros,
            beforeSend: function(objeto){
                $("#ajax_message").html('<div class="alert alert-warning" role="alert">Creando pago</div>');
            },
            success: function(datos){
                $("#add_pago_success_table").prepend(datos);
                $('#guardar_datos').attr("disabled", false);
                $("#ajax_message").html("");
                $("#ajax_message").html('<div class="alert alert-success" role="alert">Pago creado</div>');
                setTimeout(function (){$("#ajax_message").html("");},3000);
            }
        });
        event.preventDefault();
    });

    $('#pagoAdd').on('hide.bs.modal', function (event) {
        setTimeout(function (){location.reload()},1000);
    });

    // Edit pago
    // Update values as the modal shows
    $('#pagoEdit').on('show.bs.modal', function (event) {
        var id_booking = event.relatedTarget.getAttribute("data-id");
        var codigo = $('td#codigo_' + id_booking).text();
        var id = parseInt(id_booking.replace('pago_',''));
        var ruta_comprobante = $('td#ruta_comprobante' + id).text();
        var fecha = $('td#fecha' + id).text();
        var estado = $('td#estado' + id).text();
       
        $('div#pagoEdit input#codigo').val(codigo);
        $('div#pagoEdit input#ruta_comprobante').val(ruta_comprobante);
        $('div#pagoEdit input#fecha').val(fecha);
        $('div#pagoEdit input#estado').val(estado);
       
    });

    $('#pagoEdit').on('hide.bs.modal', function (event) {
        setTimeout(function (){location.reload()},1000);
    });

    $( "#editar_pago" ).submit(function( event ) {
        $('#pagoEdit #guardar_datos').attr("disabled", true);
        var parametros = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "pagos.php",
            data: parametros,
            beforeSend: function(objeto){
                $("#ajax_message").html('<div class="alert alert-warning" role="alert">Editando pago</div>');
            },
            success: function(datos){
                var id = parametros.split('&id')[0].replace('id=','');
                $("tr#pago_" + id).remove();
                $("#add_pago_success_table").prepend(datos);
                $('#editar_pago #guardar_datos').attr("disabled", false);
                $("#editar_pago #ajax_message").html("");
                $("#editar_pago #ajax_message").html('<div class="alert alert-success" role="alert">Pago editado</div>');
                setTimeout(function (){$("#editar_pago #ajax_message").html("");},3000);
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
        doSearch('#add_barco_success_table tr', searchText);

    });
    $('#search_booking_button').click(function (event) {
        var searchText = $('#search_booking_input').val();
        doSearch('#add_barco_success_table tr', searchText);
    });

});