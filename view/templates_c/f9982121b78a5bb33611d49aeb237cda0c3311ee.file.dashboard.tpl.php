<?php /* Smarty version Smarty-3.1.14, created on 2018-09-18 20:16:04
         compiled from "view/templates/admin/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7895773595b9e598f56e1b8-50309147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9982121b78a5bb33611d49aeb237cda0c3311ee' => 
    array (
      0 => 'view/templates/admin/dashboard.tpl',
      1 => 1537293062,
      2 => 'file',
    ),
    'bf835c28d3ccab3f6680d27b86afdd2fefdd9dda' => 
    array (
      0 => 'view/templates/admin/base.tpl',
      1 => 1537293062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7895773595b9e598f56e1b8-50309147',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b9e598f5ae911_35872388',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b9e598f5ae911_35872388')) {function content_5b9e598f5ae911_35872388($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Atlantic Pacific Shipping Line | Admin Site</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- CSS  -->
    
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
custom.css" />

    
</head>
<body style="overflow-x: hidden">
    <?php echo $_smarty_tpl->getSubTemplate ("admin/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <div class="container">
        
    <div class="container">
        <div class="row">
            <div class="panel panel-info">
            <div class="panel-heading">
                <div class="col-md-4">
                    <h4> Bookings</h4>
                </div>
                <div class="col-md-8">
                    <form class="form-horizontal" role="form" id="search_booking">
                        <div class="form-group row" style="margin-bottom: 50px; position: relative; left: 27%;">
                            <label class="col-md-2 control-label" style="color:#000">  Número:</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="search_booking_input" placeholder="03820320" onkeyup='load(1);'>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-default" onclick='load(1);'>
                                    <span class="glyphicon glyphicon-search" ></span> Buscar</button>
                                <span id="loader"></span>
                            </div>
                        </div>
                    </form>
                </div>
                <br/>
                <br/>
            </div>
            <div class="panel-body">
                <table class="table" id="table-booking">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ruta</th>
                        <th>Cliente</th>
                        <th>Costo Total</th>
                        <th>Fecha de Creación</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>
                            <span class="glyphicon glyphicon-warning-sign" style="color:#efd032;" aria-hidden="true"></span>
                            654564
                        </th>
                        <td>Costa Rica - El Salvador - 01/12/2018 - 7:00 am</br>El Salvador - Costa Rica - 03/12/2018 - 6:00 pm</td>
                        <td>Sabina Quiroga</br>0414-852-5478</br>sabina@gmail.com</td>
                        <td>$750</td>
                        <td>28/08/2018</td>
                        <td>
                            <span class="">
                                <a href="#" class="btn btn-default" title="ver booking" onclick="" data-toggle="modal" data-target="#bookingDetail"><i class="glyphicon glyphicon-eye-open"></i></a>
                                <a href="#" class="btn btn-default" title="editar booking" onclick="" data-toggle="modal" data-target="#bookingEdit"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="#" class="btn btn-default" title="aprobar booking" onclick="" data-toggle="modal" data-target="#bookingApprove"><i class="glyphicon glyphicon-ok"></i></a>
                            </span>
                        </td>

                    </tr>
                    </tbody>
                </table>
                <!--<div id="resultados"></div><!-- Carga los datos ajax -->
                <!--<div class='outer_div'></div><!-- Carga los datos ajax -->
            </div>
        </div>
            <hr>
        </div>
    </div>

    </div><!-- /container -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
    <?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>