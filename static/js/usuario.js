$(document).ready(function() {

    // Add Usuario
    $( "#agregar_usuario" ).submit(function( event ) {
        event.preventDefault();
        $('#guardar_datos').attr("disabled", true);
        console.log('Heyy');
        var parametros = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "usuarios.php",
            data: parametros,

            beforeSend: function(objeto){
                $("#ajax_message").html('<div class="alert alert-warning" role="alert">Creando Usuario</div>');
            },
            success: function(datos){
                $("#add_user_success_table").prepend(datos);
                $('#guardar_datos').attr("disabled", false);
                $("#ajax_message").html("");
                $("#ajax_message").html('<div class="alert alert-success" role="alert">Usuario creado</div>');
                setTimeout(function (){$("#ajax_message").html("");},3000);
            }
        });
    });

    $('#usuarioAdd').on('hide.bs.modal', function (event) {
        setTimeout(function (){location.reload()},1000);
    });

    // Edit usuario
    // Update values as the modal shows
    $('#usuarioEdit').on('show.bs.modal', function (event) {
        var id_usuario = event.relatedTarget.getAttribute("data-id");
        var id = parseInt(id_usuario.replace('user_',''));
        var username = $('td#username_user_' + id).text();
        var name = $('td#nombre_user_' + id).text();
        var lastname = $('td#apellido_user_' + id).text();
        var email = $('td#mail_user_' + id).text();
        var role = $('td#role_user_' + id).text();

        var roleName = {'Aprobador': '100', 'Cotizador': '010', 'Administrador': '001'};

        $('div#usuarioEdit input#usuario_id').val(id);
        $('div#usuarioEdit input#username_edit').val(username.trim());
        $('div#usuarioEdit input#firstname_edit').val(name.trim());
        $('div#usuarioEdit input#lastname_edit').val(lastname.trim());
        $('div#usuarioEdit input#email_edit').val(email.trim());
        $('div#usuarioEdit select#role_edit').val(roleName[role.trim()]);

    });

    $('#usuarioEdit').on('hide.bs.modal', function (event) {
        setTimeout(function (){location.reload()},1000);
    });

    $( "#editar_usuario" ).submit(function( event ) {
        event.preventDefault();
        $('#usuarioEdit #guardar_datos').attr("disabled", true);
        var parametros = $(this).serialize();
        console.log('parametros', parametros);
        $.ajax({
            type: "POST",
            url: "usuarios.php",
            data: parametros,
            beforeSend: function(objeto){
                $("#ajax_message").html('<div class="alert alert-warning" role="alert">Editando Usuario</div>');
            },
            success: function(datos){
                console.log('datos ', datos);
                var id = parametros.split('id=')[1].split('&')[0];

                $("tr#user_" + id).remove();
                $("#add_user_success_table").prepend(datos);
                $('#editar_usuario #guardar_datos').attr("disabled", false);
                $("#editar_usuario #ajax_message").html("");
                $("#editar_usuario #ajax_message").html('<div class="alert alert-success" role="alert">Usuario editado</div>');
                setTimeout(function (){$("#editar_usuario #ajax_message").html("");},3000);
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

    $('#search_usuario_input').keyup(function (event) {
        var searchText = event.target.value;
        doSearch('#add_user_success_table tr', searchText);

    });
    $('#search_usuario_button').click(function (event) {
        var searchText = $('#search_usuario_input').val();
        doSearch('#add_user_success_table tr', searchText);
    });

});
