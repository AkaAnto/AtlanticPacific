{extends file="admin/base.tpl"}

{block name="navbar"}{/block}
{block name="css"}
    <link rel="stylesheet" type="text/css" href="{$css}login.css" />
    <link rel="stylesheet" type="text/css" href="{$css}paybooking.css" />
{/block}


{block name="content"}
    <div class="card card-container">
        <h4 class="text-center">Código #{$booking.codigo}</h4>
        <hr class="separador-paybooking">
        <div class="row">
            <p class="text-paybooking">
                <span class="subtitle-paybooking">Puerto Origen: </span>
                {$booking.puerto_origen}
            </p>

            <p class="text-paybooking">
                <span class="subtitle-paybooking">Puerto Destino: </span>
                {$booking.puerto_destino}
            </p>

            <p class="text-paybooking">
                <span class="subtitle-paybooking">Fecha del Viaje: </span>
                {$booking.fecha}
            </p>

            <p class="text-paybooking">
                <span class="subtitle-paybooking">Precio: </span>
                ${$booking.precio}
            </p>

        </div>
        <p id="profile-name" class="profile-name-card"></p>
        {if isset($info_message)}
            <div class="alert alert-dismissible alert-info">
                {$info_message}
            </div>
        {/if}

        {if isset($error_message)}
            <div class="alert alert-dismissible alert-danger">
                {$error_message}
            </div>
        {/if}
        <div class="row">
            <form method="post" accept-charset="utf-8" action="paybooking.php" name="paybookingform" autocomplete="off" role="form" class="form-paybooking">
                <span id="reauth-email" class="reauth-email"></span>
                <input class="form-control" placeholder="Pay" name="paybooking_image" type="file" value="" autofocus="" required>
                </br>
                <button type="submit" class="btn btn-lg btn-success btn-block btn-signin" name="login" id="submit">Pagar</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
{/block}


