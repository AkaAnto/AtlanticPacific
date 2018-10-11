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

    // Edit viaje
    // Update values as the modal shows
    $('#viajeEdit').on('show.bs.modal', function (event) {
        var id_viaje = event.relatedTarget.getAttribute("data-id");
        var id = parseInt(id_viaje.replace('viaje_',''));
        var name = $('td#nombre_viaje_' + id_viaje).text();
        var viaje_fecha = $('td#viaje_fecha_' + id_viaje).text();
        var viaje_puerto_origen = $('td#viaje_puerto_origen' + id_viaje).text();
        var viaje_puerto_destino = $('td#viaje_puerto_destino_' + id_viaje).text();
        var viaje_estado = $('td#viaje_estado_' + id_viaje).text();


        $('div#viajeEdit input#fecha').val(viaje_fecha);
        $('div#viajeEdit select#puerto_origen option').val(viaje_puerto_origen);
        $('div#viajeEdit select#puerto_destino option').val(viaje_puerto_destino);
        $('div#viajeEdit input#estado').val(viaje_estado);
        $('div#viajeEdit input#barco_id').val(id);
    });

    $('#viajeEdit').on('hide.bs.modal', function (event) {
        setTimeout(function (){location.reload()},1000);
    });

    $( "#editar_viaje" ).submit(function( event ) {
        event.preventDefault();
        $('#viajeEdit #guardar_datos').attr("disabled", true);
        var parametros = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "viajes.php",
            data: parametros,
            beforeSend: function(objeto){
                $("#ajax_message").html('<div class="alert alert-warning" role="alert">Editando viaje</div>');
            },
            success: function(datos){
                console.log('datos ', datos);
                var id = parametros.split('barco_id=')[1].split('&')[0];

                $("tr#viaje_" + id).remove();
                $("#add_viaje_success_table").prepend(datos);
                $('#editar_viaje #guardar_datos').attr("disabled", false);
                $("#editar_viaje #ajax_message").html("");
                $("#editar_viaje #ajax_message").html('<div class="alert alert-success" role="alert">Viaje editado</div>');
                setTimeout(function (){$("#editar_viaje #ajax_message").html("");},3000);
            }
        });

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

    $('#search_viaje_input').keyup(function (event) {
        var searchText = event.target.value;
        doSearch('#add_viaje_success_table tr', searchText);

    });
    $('#search_viaje_button').click(function (event) {
        var searchText = $('#search_booking_input').val();
        doSearch('#add_viaje_success_table tr', searchText);
    });

});
