$(document).ready(function() {

    $( "#agregar_barco" ).submit(function( event ) {
        $('#guardar_datos').attr("disabled", true);

        var parametros = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "barcos.php",
            data: parametros,
            beforeSend: function(objeto){
                $("#ajax_message").html('<div class="alert alert-warning" role="alert">Creando barco</div>');
            },
            success: function(datos){
                console.log('datos ' + datos);
                //$("#resultados_ajax").html(datos);
                $('#guardar_datos').attr("disabled", false);
                $("#ajax_message").html("");
                $("#ajax_message").html('<div class="alert alert-success" role="alert">Barco creado</div>');
            }
        });
        event.preventDefault();
        $("#ajax_message").html("");
    })
});