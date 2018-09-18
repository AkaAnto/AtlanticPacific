<?php /* Smarty version Smarty-3.1.14, created on 2018-09-18 20:13:42
         compiled from "view/templates/admin/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13891214325b9e59dbcc26f7-72134849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ccc0bf8695f3aab1c666912779340cfdaeeba11' => 
    array (
      0 => 'view/templates/admin/navbar.tpl',
      1 => 1537293062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13891214325b9e59dbcc26f7-72134849',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b9e59dbd02273_67746277',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b9e59dbd02273_67746277')) {function content_5b9e59dbd02273_67746277($_smarty_tpl) {?><nav class="navbar navbar-default ">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Atlantic Pacific Shipping</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class=""><a href="bookings.php"><i class='glyphicon glyphicon-barcode'></i> Bookings</a></li>
                <li class=""><a href="viajes.php"><i class='glyphicon glyphicon-road'></i> Viajes <span class="sr-only">(current)</span></a></li>
                <li class=""><a href="barcos.php"><i class='glyphicon glyphicon-object-align-vertical'></i> Barcos <span class="sr-only">(current)</span></a></li>
                <li class=""><a href="tarifas_pasajeros.php"><i class='glyphicon glyphicon-usd'></i> Tarifas Pasajero <span class="sr-only">(current)</span></a></li>
                <li class=""><a href="tarifas_carga.php"><i class='glyphicon glyphicon-usd'></i> Tarifas Carga <span class="sr-only">(current)</span></a></li>
                <li class=""><a href="usuarios.php"><i  class='glyphicon glyphicon-lock'></i> Usuarios</a></li>
                <li class=""><a href="perfil.php"><i  class='glyphicon glyphicon-cog'></i> Configuración</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php?logout"><i class='glyphicon glyphicon-off'></i> Salir</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav><?php }} ?>