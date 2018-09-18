<?php /* Smarty version Smarty-3.1.14, created on 2018-09-19 00:39:29
         compiled from "view/templates/admin/tarifa_pasajero.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1245901655ba14f8f3d8ca1-12755139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a590e41885fbbdd60dda123b8d8afdd3587bd7f' => 
    array (
      0 => 'view/templates/admin/tarifa_pasajero.tpl',
      1 => 1537304935,
      2 => 'file',
    ),
    'bf835c28d3ccab3f6680d27b86afdd2fefdd9dda' => 
    array (
      0 => 'view/templates/admin/base.tpl',
      1 => 1537293062,
      2 => 'file',
    ),
    '3af58859840338512e73b893378815984e6168ac' => 
    array (
      0 => 'view/templates/admin/modal/add_tarifa_pasajero.tpl',
      1 => 1537299814,
      2 => 'file',
    ),
    '9b1fe35592422d44ac667c7fd7886fccc0333b02' => 
    array (
      0 => 'view/templates/admin/modal/edit_tarifa_pasajero.tpl',
      1 => 1537310278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1245901655ba14f8f3d8ca1-12755139',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba14f8f422010_32996862',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba14f8f422010_32996862')) {function content_5ba14f8f422010_32996862($_smarty_tpl) {?><!DOCTYPE html>
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
                        
                        <h4> Tarifas de Pasajero</h4>
                    </div>
                    <div class="col-md-8">
                        <div class="col-md-12">
                            <form class="form-horizontal" role="form" id="search_booking">
                                <div class="form-group row" style="margin-bottom: 50px; position: relative;">
                                    <div class="col-md-4">
                                        
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#tarifaAdd">
                                            <span class="glyphicon glyphicon-plus"></span> Nueva Tarifa de Pasajero
                                        </button>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="col-md-9">
                                            
                                            <input type="text" class="form-control" id="search_tarifa_input" placeholder="NOMBRE DEL BARCO">
                                        </div>
                                        <div class="col-md-3">
                                            
                                            <button id="search_tarifa_button" type="button" class="btn btn-default"style="margin-left: -25px;border:  0px solid transparent;height: 33px;margin-top: 1px;">
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
                <table class="table" id="table-tarifa">
                    <thead>
                        <tr>
                            <th>Barco</th>
                            <th>Particular</th>
                            <th>En auto a bordo</th>
                            <th>En autobus a bordo</th>
                            <th>Ayudante de gandola</th>
                            <th>Conductor de gandola</th>
                            <th>Conductor de autobus</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="add_tarifa_success_table">
                    <?php  $_smarty_tpl->tpl_vars['tarifa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tarifa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tarifa_pasajeros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tarifa']->key => $_smarty_tpl->tpl_vars['tarifa']->value){
$_smarty_tpl->tpl_vars['tarifa']->_loop = true;
?>
                        <tr id="tarifa_<?php echo $_smarty_tpl->tpl_vars['tarifa']->value['id_barco'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['tarifa']->value['nombre'];?>
">
                            <td id="nombre_tarifa_<?php echo $_smarty_tpl->tpl_vars['tarifa']->value['id_barco'];?>
" ><?php echo $_smarty_tpl->tpl_vars['tarifa']->value['nombre'];?>
</td>
                            <td id="tarifa_particular_<?php echo $_smarty_tpl->tpl_vars['tarifa']->value['id_barco'];?>
"> <b> <?php echo intval($_smarty_tpl->tpl_vars['tarifa']->value['particular']);?>
$</b></td>
                            <td id="tarifa_en_auto_<?php echo $_smarty_tpl->tpl_vars['tarifa']->value['id_barco'];?>
"> <b> <?php echo intval($_smarty_tpl->tpl_vars['tarifa']->value['en_auto']);?>
$</b></td>
                            <td id="tarifa_en_autobus_<?php echo $_smarty_tpl->tpl_vars['tarifa']->value['id_barco'];?>
"> <b> <?php echo intval($_smarty_tpl->tpl_vars['tarifa']->value['en_autobus']);?>
$</b></td>
                            <td id="tarifa_ayudante_gandola_<?php echo $_smarty_tpl->tpl_vars['tarifa']->value['id_barco'];?>
"> <b> <?php echo intval($_smarty_tpl->tpl_vars['tarifa']->value['ayudante_gandola']);?>
$</b></td>
                            <td id="tarifa_conductor_gandola_<?php echo $_smarty_tpl->tpl_vars['tarifa']->value['id_barco'];?>
"> <b> <?php echo intval($_smarty_tpl->tpl_vars['tarifa']->value['conductor_gandola']);?>
$</b></td>
                            <td id="tarifa_conductor_autobus_<?php echo $_smarty_tpl->tpl_vars['tarifa']->value['id_barco'];?>
"> <b> <?php echo intval($_smarty_tpl->tpl_vars['tarifa']->value['conductor_autobus']);?>
$</b></td>
                            <td>
                            <span class="">
                                
                                    
                                
                                <a href="#" data-id="tarifa_<?php echo $_smarty_tpl->tpl_vars['tarifa']->value['id_barco'];?>
" class="btn btn-default" title="editar tarifa" data-toggle="modal" data-target="#tarifaEdit">
                                    <i class="glyphicon glyphicon-edit"></i>
                                </a>
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
    <?php /*  Call merged included template "admin/modal/add_tarifa_pasajero.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("admin/modal/add_tarifa_pasajero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1245901655ba14f8f3d8ca1-12755139');
content_5ba17ea153d842_32328272($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "admin/modal/add_tarifa_pasajero.tpl" */?>
    <?php /*  Call merged included template "admin/modal/edit_tarifa_pasajero.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("admin/modal/edit_tarifa_pasajero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1245901655ba14f8f3d8ca1-12755139');
content_5ba17ea1542932_13559096($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "admin/modal/edit_tarifa_pasajero.tpl" */?>

    </div><!-- /container -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
tarifa_pasajero.js"></script>

    <?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-09-19 00:39:29
         compiled from "view/templates/admin/modal/add_tarifa_pasajero.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ba17ea153d842_32328272')) {function content_5ba17ea153d842_32328272($_smarty_tpl) {?><!-- Modal -->
<div class="modal fade" id="tarifaAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-plus'></i> Agregar tarifa</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" id="agregar_tarifa" name="agregar_tarifa">
                    <div id="ajax_message"></div>
                    <div class="form-group">
                        <label for="nombre" class="col-sm-3 control-label">Barco</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="barco_tarifa" name="barco_tarifa">
                                <?php  $_smarty_tpl->tpl_vars['barco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['barco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['available_barcos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['barco']->key => $_smarty_tpl->tpl_vars['barco']->value){
$_smarty_tpl->tpl_vars['barco']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['barco']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['barco']->value['nombre'];?>
 </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">Pasajero particular</label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="particular" name="particular" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">En auto a bordo</label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="en_auto" name="en_auto" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">En autobus a bordo</label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="en_autobus" name="en_autobus" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">Ayudante de gandola</label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="ayudante_gandola" name="ayudante_gandola" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">Conductor de gandola</label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="conductor_gandola" name="conductor_gandola" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">Conductor de autobus </label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="conductor_autobus" name="conductor_autobus" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-09-19 00:39:29
         compiled from "view/templates/admin/modal/edit_tarifa_pasajero.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ba17ea1542932_13559096')) {function content_5ba17ea1542932_13559096($_smarty_tpl) {?><!-- Modal -->
<div class="modal fade" id="tarifaEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-plus'></i> Editar tarifa</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" id="editar_tarifa" name="editar_tarifa">
                    <div id="ajax_message"></div>
                    <div class="form-group hide">
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="id_barco" name="id" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="col-sm-3 control-label">Barco</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="barco_tarifa" name="barco_tarifa">
                                <?php  $_smarty_tpl->tpl_vars['barco'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['barco']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['available_barcos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['barco']->key => $_smarty_tpl->tpl_vars['barco']->value){
$_smarty_tpl->tpl_vars['barco']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['barco']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['barco']->value['nombre'];?>
 </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">Pasajero particular </label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="particular" name="particular" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">En auto a bordo</label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="en_auto" name="en_auto" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">En autobus a bordo</label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="en_autobus" name="en_autobus" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">Ayudante de gandola</label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="ayudante_gandola" name="ayudante_gandola" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">Conductor de gandola </label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="conductor_gandola" name="conductor_gandola" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">Conductor de autobus</label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="conductor_autobus" name="conductor_autobus" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
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