$(document).ready(function() {

    // Add tarifa carga
    $( "#agregar_tarifa" ).submit(function( event ) {
        $('#guardar_datos').attr("disabled", true);
        var parametros = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "carga.php",
            data: parametros,
            beforeSend: function(objeto){
                $("#ajax_message").html('<div class="alert alert-warning" role="alert">Creando Tarifa</div>');
            },
            success: function(datos){
                $("#add_tarifa_success_table").prepend(datos);
                $('#guardar_datos').attr("disabled", false);
                $("#ajax_message").html("");
                $("#ajax_message").html('<div class="alert alert-success" role="alert">Tarifa creada</div>');
                setTimeout(function (){$("#ajax_message").html("");},3000);
            }
        });
        event.preventDefault();
    });

    $('#tarifaAdd').on('hide.bs.modal', function (event) {
        setTimeout(function (){location.reload()},1000);
    });

    // Edit tarifa carga
    // Update values as the modal shows
    $('#tarifaEdit').on('show.bs.modal', function (event) {
        var barco_id = event.relatedTarget.getAttribute("data-id");
        var id = parseInt(barco_id.replace('tarifa_',''));
        var tarifa_3_mts = parseInt($('td#tarifa_3_mts_' + id).text().replace('$', ''));
        var tarifa_6mts = parseInt($('td#tarifa_6_mts_' + id).text().replace('$', ''));
        var tarifa_9_mts = parseInt($('td#tarifa_9_mts_' + id).text().replace('$', ''));
        var tarifa_15_mts = parseInt($('td#tarifa_15_mts_' + id).text().replace('$', ''));
        var tarifa_18_mts = parseInt($('td#tarifa_18_mts_' + id).text().replace('$', ''));
        var moto_grande = parseInt($('td#tarifa_moto_grande_' + id).text().replace('$', ''));
        var moto_chica = parseInt($('td#tarifa_moto_chica_' + id).text().replace('$', ''));
        var bicicleta = parseInt($('td#tarifa_bicicleta_' + id).text().replace('$', ''));
        var nombre_barco = $('td#nombre_tarifa_' + id).text();

        $('div#tarifaEdit input#tres_metros').val(tarifa_3_mts);
        $('div#tarifaEdit input#seis_metros').val(tarifa_6mts);
        $('div#tarifaEdit input#nueve_metros').val(tarifa_9_mts);
        $('div#tarifaEdit input#quince_metros').val(tarifa_15_mts);
        $('div#tarifaEdit input#dieciocho_metros').val(tarifa_18_mts);
        $('div#tarifaEdit input#moto_grande').val(moto_grande);
        $('div#tarifaEdit input#moto_chica').val(moto_chica);
        $('div#tarifaEdit input#bicicleta').val(bicicleta);
        $('div#tarifaEdit input#barco_id').val(id);
        $('div#tarifaEdit input#barco_tarifa').val(id);
        $('div#tarifaEdit #tarifa_title').text(nombre_barco);
    });

    $('#tarifaEdit').on('hide.bs.modal', function (event) {
        setTimeout(function (){location.reload()},1000);
    });

    $( "#editar_tarifa" ).submit(function( event ) {
        event.preventDefault();
        $('#tarifaEdit #guardar_datos').attr("disabled", true);
        var parametros = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "carga.php",
            data: parametros,
            beforeSend: function(objeto){
                $("#ajax_message").html('<div class="alert alert-warning" role="alert">Editando tarifa</div>');
            },
            success: function(datos){
                var id = parametros.split('barco_id=')[1].split('&')[0];

                $("tr#tarifa_" + id).remove();
                $("#add_tarifa_success_table").prepend(datos);
                $('#editar_tarifa #guardar_datos').attr("disabled", false);
                $("#editar_tarifa #ajax_message").html("");
                $("#editar_tarifa #ajax_message").html('<div class="alert alert-success" role="alert">Tarifa editada</div>');
                setTimeout(function (){$("#editar_barco #ajax_message").html("");},3000);
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

    $('#search_tarifa_input').keyup(function (event) {
        var searchText = event.target.value;
        doSearch('#add_tarifa_success_table tr', searchText);

    });
    $('#search_tarifa__button').click(function (event) {
        var searchText = $('#search_tarifa_input').val();
        doSearch('#add_barco_success_table tr', searchText);
    });

});
