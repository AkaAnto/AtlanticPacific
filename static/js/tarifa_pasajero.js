$(document).ready(function() {

    // Add tarifa carga
    $( "#agregar_tarifa" ).submit(function( event ) {
        $('#guardar_datos').attr("disabled", true);
        var parametros = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "pasajero.php",
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
        var id_barco = event.relatedTarget.getAttribute("data-id");
        var id = parseInt(id_barco.replace('tarifa_',''));
        var name = $('td#nombre_tarifa_' + id).text();
        var tarifa_particular = parseInt($('td#tarifa_particular_' + id).text().replace('$', ''));
        var tarifa_en_auto = parseInt($('td#tarifa_en_auto_' + id).text().replace('$', ''));
        var tarifa_en_autobus = parseInt($('td#tarifa_en_autobus_' + id).text().replace('$', ''));
        var tarifa_ayudante_gandola = parseInt($('td#tarifa_ayudante_gandola_' + id).text().replace('$', ''));
        var tarifa_conductor_gandola = parseInt($('td#tarifa_conductor_gandola_' + id).text().replace('$', ''));
        var tarifa_conductor_autobus = parseInt($('td#tarifa_conductor_autobus_' + id).text().replace('$', ''));

        console.log('name', name);
        $('div#tarifaEdit input#id_barco').val(id);
        $('div#tarifaEdit input#barco_tarifa').val(id);
        $('div#tarifaEdit #tarifa_title').text(name);
        $('div#tarifaEdit input#particular').val(tarifa_particular);
        $('div#tarifaEdit input#en_auto').val(tarifa_en_auto);
        $('div#tarifaEdit input#en_autobus').val(tarifa_en_autobus);
        $('div#tarifaEdit input#ayudante_gandola').val(tarifa_ayudante_gandola);
        $('div#tarifaEdit input#conductor_gandola').val(tarifa_conductor_gandola);
        $('div#tarifaEdit input#conductor_autobus').val(tarifa_conductor_autobus);
  
    });

    $('#tarifaEdit').on('hide.bs.modal', function (event) {
        setTimeout(function (){location.reload()},1000);
    });

    $( "#editar_tarifa" ).submit(function( event ) {
        $('#tarifaEdit #guardar_datos').attr("disabled", true);
        var parametros = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "pasajero.php",
            data: parametros,
            beforeSend: function(objeto){
                $("#ajax_message").html('<div class="alert alert-warning" role="alert">Editando tarifa</div>');
            },
            success: function(datos){
                console.log(parametros);
                var id = parametros.split('id=')[1].split('&')[0];   
                $("tr#tarifa_" + id).remove();
                $("#add_tarifa_success_table").prepend(datos);
                $('#editar_tarifa #guardar_datos').attr("disabled", false);
                $("#editar_tarifa #ajax_message").html("");
                $("#editar_tarifa #ajax_message").html('<div class="alert alert-success" role="alert">Tarifa editada</div>');
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

    $('#search_tarifa_input').keyup(function (event) {
        var searchText = event.target.value;
        doSearch('#add_tarifa_success_table tr', searchText);

    });
    $('#search_tarifa__button').click(function (event) {
        var searchText = $('#search_tarifa_input').val();
        doSearch('#add_barco_success_table tr', searchText);
    });

});
