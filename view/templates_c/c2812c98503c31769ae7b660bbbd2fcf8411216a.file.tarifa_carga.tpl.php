<?php /* Smarty version Smarty-3.1.14, created on 2018-09-18 17:07:26
         compiled from "view/templates/admin/tarifa_carga.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13477395075ba07eebbb62d8-48816488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2812c98503c31769ae7b660bbbd2fcf8411216a' => 
    array (
      0 => 'view/templates/admin/tarifa_carga.tpl',
      1 => 1537283200,
      2 => 'file',
    ),
    'bf835c28d3ccab3f6680d27b86afdd2fefdd9dda' => 
    array (
      0 => 'view/templates/admin/base.tpl',
      1 => 1537153860,
      2 => 'file',
    ),
    '1458a078deb397ab14f0332ffd7131da2ef65564' => 
    array (
      0 => 'view/templates/admin/modal/add_tarifa_carga.tpl',
      1 => 1537248158,
      2 => 'file',
    ),
    'b1ae0cbeb733fd7f2706442657c5f7914d2e5560' => 
    array (
      0 => 'view/templates/admin/modal/edit_barco.tpl',
      1 => 1537215035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13477395075ba07eebbb62d8-48816488',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ba07eebc35164_70771015',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba07eebc35164_70771015')) {function content_5ba07eebc35164_70771015($_smarty_tpl) {?><!DOCTYPE html>
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
                        
                        <h4> Tarifas de Carga</h4>
                    </div>
                    <div class="col-md-8">
                        <div class="col-md-12">
                            <form class="form-horizontal" role="form" id="search_booking">
                                <div class="form-group row" style="margin-bottom: 50px; position: relative;">
                                    <div class="col-md-4">
                                        
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#tarifaAdd">
                                            <span class="glyphicon glyphicon-plus"></span> Nueva Tarifa de Carga
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
                            <th>0 - 3 mts</th>
                            <th>3 - 6 mts</th>
                            <th>6 - 9 mts</th>
                            <th>9 - 15 mts</th>
                            <th>15 - 18 mts</th>
                            <th>Moto Grande</th>
                            <th>Moto Chica</th>
                            <th>Bicicleta</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="add_tarifa_success_table">
                    <?php  $_smarty_tpl->tpl_vars['tarifa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tarifa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tarifa_cargas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tarifa']->key => $_smarty_tpl->tpl_vars['tarifa']->value){
$_smarty_tpl->tpl_vars['tarifa']->_loop = true;
?>
                        <tr id="tarifa_<?php echo $_smarty_tpl->tpl_vars['tarifa']->value['id_barco'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['tarifa']->value['nombre'];?>
">
                            <td id="nombre_tarifa_<?php echo $_smarty_tpl->tpl_vars['tarifa']->value['id_barco'];?>
" ><?php echo $_smarty_tpl->tpl_vars['tarifa']->value['nombre'];?>
</td>
                            <td id="tarifa_3_mts_<?php echo $_smarty_tpl->tpl_vars['tarifa']->value['id_barco'];?>
"> <b> <?php echo intval($_smarty_tpl->tpl_vars['tarifa']->value['tres_metros']);?>
$</b></td>
                            <td id="tarifa_6_mts_<?php echo $_smarty_tpl->tpl_vars['tarifa']->value['id_barco'];?>
"> <b> <?php echo intval($_smarty_tpl->tpl_vars['tarifa']->value['seis_metros']);?>
$</b></td>
                            <td id="tarifa_9_mts_<?php echo $_smarty_tpl->tpl_vars['tarifa']->value['id_barco'];?>
"> <b> <?php echo intval($_smarty_tpl->tpl_vars['tarifa']->value['nueve_metros']);?>
$</b></td>
                            <td id="tarifa_15_mts_<?php echo $_smarty_tpl->tpl_vars['tarifa']->value['id_barco'];?>
"> <b> <?php echo intval($_smarty_tpl->tpl_vars['tarifa']->value['quince_metros']);?>
$</b></td>
                            <td id="tarifa_18_mts_<?php echo $_smarty_tpl->tpl_vars['tarifa']->value['id_barco'];?>
"> <b> <?php echo intval($_smarty_tpl->tpl_vars['tarifa']->value['dieciocho_metros']);?>
$</b></td>
                            <td id="tarifa_moto_grande_<?php echo $_smarty_tpl->tpl_vars['tarifa']->value['id_barco'];?>
"> <b> <?php echo intval($_smarty_tpl->tpl_vars['tarifa']->value['moto_grande']);?>
$</b></td>
                            <td id="tarifa_moto_chica_<?php echo $_smarty_tpl->tpl_vars['tarifa']->value['id_barco'];?>
"> <b> <?php echo intval($_smarty_tpl->tpl_vars['tarifa']->value['moto_chica']);?>
$</b></td>
                            <td id="tarifa_bicicleta_<?php echo $_smarty_tpl->tpl_vars['tarifa']->value['id_barco'];?>
"> <b> <?php echo intval($_smarty_tpl->tpl_vars['tarifa']->value['bicicleta']);?>
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
    <?php /*  Call merged included template "admin/modal/add_tarifa_carga.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("admin/modal/add_tarifa_carga.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '13477395075ba07eebbb62d8-48816488');
content_5ba114aed0ede5_13341618($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "admin/modal/add_tarifa_carga.tpl" */?>
    <?php /*  Call merged included template "admin/modal/edit_barco.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("admin/modal/edit_barco.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '13477395075ba07eebbb62d8-48816488');
content_5ba114aed1c105_44007179($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "admin/modal/edit_barco.tpl" */?>

    </div><!-- /container -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
tarifa_carga.js"></script>

    <?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-09-18 17:07:26
         compiled from "view/templates/admin/modal/add_tarifa_carga.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ba114aed0ede5_13341618')) {function content_5ba114aed0ede5_13341618($_smarty_tpl) {?><!-- Modal -->
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
                        <label for="alto" class="col-sm-3 control-label">0 - 3 mts </label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="tres_metros" name="tres_metros" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">3 - 6 mts </label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="seis_metros" name="seis_metros" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">6 - 9 mts </label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="nueve_metros" name="nueve_metros" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">9 - 15 mts </label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="quince_metros" name="quince_metros" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">15 - 18 mts </label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="dieciocho_metros" name="dieciocho_metros" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">Moto Grande </label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="moto_grande" name="moto_grande" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">Moto Chica </label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="moto_chica" name="moto_chica" placeholder="" required>
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label"> $ </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alto" class="col-sm-3 control-label">Bicicleta </label>
                        <div class="col-sm-7">
                            <input type="number" step="any" class="form-control" id="bicicleta" name="bicicleta" placeholder="" required>
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2018-09-18 17:07:26
         compiled from "view/templates/admin/modal/edit_barco.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5ba114aed1c105_44007179')) {function content_5ba114aed1c105_44007179($_smarty_tpl) {?><!-- Modal -->
<div class="modal fade" id="barcoEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar barco</h4>
            </div>
            <form class="form-horizontal" method="put" id="editar_barco" name="editar_barco">
                <div class="modal-body">
                    <div id="ajax_message"></div>
                    <div class="form-group hide">
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="barco_id" name="id" required>
                        </div>
                    </div>
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