$(document).ready(function() {

    // Add Viaje
    $( "#agregar_viaje" ).submit(function( event ) {
        $('#guardar_datos').attr("disabled", true);
        var parametros = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "viajes.php",
            data: parametros,

            beforeSend: function(objeto){
                $("#ajax_message").html('<div class="alert alert-warning" role="alert">Creando viaje</div>');
            },
            success: function(datos){
                $("#add_viaje_success_table").prepend(datos);
                $('#guardar_datos').attr("disabled", false);
                $("#ajax_message").html("");
                $("#ajax_message").html('<div class="alert alert-success" role="alert">Viaje creado</div>');
                setTimeout(function (){$("#ajax_message").html("");},3000);
            }
        });
        event.preventDefault();
    });

    $('#viajeAdd').on('hide.bs.modal', function (event) {
        setTimeout(function (){location.reload()},1000);
    });

    // Edit barco
    // Update values as the modal shows
    $('#barcoEdit').on('show.bs.modal', function (event) {
        var barco_id = event.relatedTarget.getAttribute("data-id");
        var id = parseInt(barco_id.replace('barco_',''));
        var name = $('td#nombre_' + barco_id).text();
        var ancho = parseInt($('td#ancho_' + barco_id).text().replace('Mts', ''));
        var alto = parseInt($('td#alto_' + barco_id).text().replace('Mts', ''));
        var largo = parseInt($('td#largo_' + barco_id).text().replace('Mts', ''));
        var capacidad = parseInt($('td#capacidad_' + barco_id).text().replace('Ton', ''));
        $('div#barcoEdit input#nombre').val(name);
        $('div#barcoEdit input#ancho').val(ancho);
        $('div#barcoEdit input#alto').val(alto);
        $('div#barcoEdit input#largo').val(largo);
        $('div#barcoEdit input#capacidad').val(capacidad);
        $('div#barcoEdit input#barco_id').val(id);
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
        doSearch('#add_barco_success_table tr', searchText);

    });
    $('#search_booking_button').click(function (event) {
        var searchText = $('#search_booking_input').val();
        doSearch('#add_barco_success_table tr', searchText);
    });

});
