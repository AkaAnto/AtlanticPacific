{extends file="admin/base.tpl"}

{block name="navbar"}{/block}
{block name="css"}
    <link rel="stylesheet" type="text/css" href="{$css}login.css" />
{/block}


{block name="content"}
    <div class="card card-container">
        <img id="profile-img" class="profile-img-card" src="static/img/avatar_2x.png" />
        <p id="profile-name" class="profile-name-card"></p>
        <form method="post" accept-charset="utf-8" action="login.php" name="loginform" autocomplete="off" role="form" class="form-signin">
            <span id="reauth-email" class="reauth-email"></span>
            <input class="form-control" placeholder="Usuario" name="user_name" type="text" value="" autofocus="" required>
            <input class="form-control" placeholder="Contraseña" name="user_password" type="password" value="" autocomplete="off" required>
            <button type="submit" class="btn btn-lg btn-success btn-block btn-signin" name="login" id="submit">Iniciar Sesión</button>
        </form><!-- /form -->
    </div><!-- /card-container -->
{/block}


