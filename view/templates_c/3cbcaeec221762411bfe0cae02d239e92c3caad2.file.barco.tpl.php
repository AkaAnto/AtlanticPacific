<?php /* Smarty version Smarty-3.1.14, created on 2018-09-17 21:21:10
         compiled from "view/templates/admin/barco.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14770043605b9f2ad6700877-67851936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cbcaeec221762411bfe0cae02d239e92c3caad2' => 
    array (
      0 => 'view/templates/admin/barco.tpl',
      1 => 1537212065,
      2 => 'file',
    ),
    'bf835c28d3ccab3f6680d27b86afdd2fefdd9dda' => 
    array (
      0 => 'view/templates/admin/base.tpl',
      1 => 1537153860,
      2 => 'file',
    ),
    '6f64a2951c0cbf749ff3bbfd1e5306124b0aa0e5' => 
    array (
      0 => 'view/templates/admin/modal/add_barco.tpl',
      1 => 1537209271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14770043605b9f2ad6700877-67851936',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b9f2ad6758467_33857485',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b9f2ad6758467_33857485')) {function content_5b9f2ad6758467_33857485($_smarty_tpl) {?><!DOCTYPE html>
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
                    <h4> Barcos</h4>
                </div>
                <div class="col-md-8">
                    <div class="col-md-12">
                        <form class="form-horizontal" role="form" id="search_booking">
                            <div class="form-group row" style="margin-bottom: 50px; position: relative;">
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#barcoAdd">
                                        <span class="glyphicon glyphicon-plus"></span> Nuevo Barco
                                    </button>
                                </div>
                                <div class="col-md-8">
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="search_booking_input" placeholder="NOMBRE DEL BARCO" onkeyup='load(1);'>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-default" onclick="load(1);" style="margin-left: -25px;border:  0px solid transparent;height: 33px;margin-top: 1px;">
                                            <span class="glyphicon glyphicon-search"></span> Buscar
                                        </button>
                                    </div>
                                    <span id="loader"></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <br/>
                <br/>
            </div>
            <div class="panel-body">
                <table class="table" id="table-booking">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Ancho Plataforma</th>
                        <th>Alto Plataforma</th>
                        <th>Largo Plataforma</th>
                        <th>Peso Máx</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody id="add_barco_success_table">
                    <?php  $_smarty_tpl->tpl_vars['barco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['barco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['barcos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['barco']->key => $_smarty_tpl->tpl_vars['barco']->value){
$_smarty_tpl->tpl_vars['barco']->_loop = true;
?>
                        <tr id="barco_<?php echo $_smarty_tpl->tpl_vars['barco']->value['id'];?>
">
                            <td><?php echo $_smarty_tpl->tpl_vars['barco']->value['nombre'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['barco']->value['ancho'];?>
 Mts</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['barco']->value['alto'];?>
 Mts</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['barco']->value['largo'];?>
 Mts</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['barco']->value['capacidad'];?>
 Ton</td>
                            <td>
                            <span class="">
                                <a href="#" data-id="barco_<?php echo $_smarty_tpl->tpl_vars['barco']->value['id'];?>
" class="btn btn-default" title="ver booking" onclick="" data-toggle="modal" data-target="#bookingDetail"><i class="glyphicon glyphicon-eye-open"></i></a>
                                <a href="#" data-id="barco_<?php echo $_smarty_tpl->tpl_vars['barco']->value['id'];?>
" class="btn btn-default" title="editar booking" onclick="" data-toggle="modal" data-target="#bookingEdit"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="#" data-id="barco_<?php echo $_smarty_tpl->tpl_vars['barco']->value['id'];?>
" class="btn btn-default" title="aprobar booking" onclick="" data-toggle="modal" data-target="#bookingApprove"><i class="glyphicon glyphicon-ok"></i></a>
                            </span>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>
        </div>
    </div>
    <?php /*  Call merged included template "admin/modal/add_barco.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("admin/modal/add_barco.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14770043605b9f2ad6700877-67851936');
content_5b9ffea6dfaaa9_13588616($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "admin/modal/add_barco.tpl" */?>

    </div><!-- /container -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
barco.js"></script>

    <?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-09-17 21:21:10
         compiled from "view/templates/admin/modal/add_barco.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b9ffea6dfaaa9_13588616')) {function content_5b9ffea6dfaaa9_13588616($_smarty_tpl) {?><!-- Modal -->
<div class="modal fade" id="barcoAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-plus'></i> Agregar barco</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" id="agregar_barco" name="agregar_barco">
                    <div id="ajax_message"></div>
                    <div class="form-group">
                        <label for="nombre" class="col-sm-3 control-label">Nombre</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="NOMBRE" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">Alto Plataforma </label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="alto" name="alto" placeholder="ALTO" title="alto" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> MTS </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ancho" class="col-sm-3 control-label">Ancho Plataforma</label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="ancho" name="ancho" placeholder="ANCHO" title="ancho" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> MTS </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="largo" class="col-sm-3 control-label">Largo Plataforma</label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="largo" name="largo" placeholder="LARGO" title="largo" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> MTS </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="capacidad" class="col-sm-3 control-label">Peso Max </label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="capacidad" name="capacidad" placeholder="PESO" title="Capacidad" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> TON </label>
                        </div>
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" id="guardar_datos">Guardar</button>
            </div>
            </form>
        </div>
    </div>
</div><?php }} ?>