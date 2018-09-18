<?php /* Smarty version Smarty-3.1.14, created on 2018-09-18 18:15:43
         compiled from "view/templates/admin/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12851194845b9e206166c8c5-08161197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46d95501a48226d93361a96eee396641dffd0c41' => 
    array (
      0 => 'view/templates/admin/login.tpl',
      1 => 1537089742,
      2 => 'file',
    ),
    'bf835c28d3ccab3f6680d27b86afdd2fefdd9dda' => 
    array (
      0 => 'view/templates/admin/base.tpl',
      1 => 1537153860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12851194845b9e206166c8c5-08161197',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b9e20616c70e7_31712027',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b9e20616c70e7_31712027')) {function content_5b9e20616c70e7_31712027($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Atlantic Pacific Shipping Line | Admin Site</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- CSS  -->
    
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
login.css" />

    
</head>
<body style="overflow-x: hidden">
    <?php echo $_smarty_tpl->getSubTemplate ("admin/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <div class="container">
        
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

    </div><!-- /container -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
    <?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>