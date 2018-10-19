<?php

ini_set('display_errors', 1);
include_once 'conf/constant.php';
include_once Pago;

define('new_pago_row', '
<tr id="pago_%" class="% ajax_new">
    <td id="codigo_pago_%" >%</td>
    <td id="pago_ruta_comprobante_%"> <b>%</b></td>
    <td id="pago_estatus_%"> <b> %</b></td>
    <td id="pago_fecha_%"> <b> %</b></td>
    <td>
    <span class="">
        <a href="#" data-id="pago_%" class="btn btn-default" title="editar pago" data-toggle="modal" data-target="#pagoEdit">
            <i class="glyphicon glyphicon-edit"></i>
        </a>
    </span>
    </td>
</tr>');




$show_list = $_SERVER['REQUEST_METHOD'] === 'GET';
$create = $_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['id']);
$edit = $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id']);


// Show list
if ($show_list){
    $is_authenticated = Pago::verify();
    if ($is_authenticated){
        $smarty->assign('auth', Pago::getAuth());
        $smarty->assign('pagos', Pago::get_list());
        $smarty->assign('available_bookings', Pago::get_bookings());
        $smarty->display(Template_Dir.'/admin/pago.tpl');
    }
    else{
        Pago::navigate('index');
    }
}

// Add new pago
if ($create){
    $is_authenticated = Pago::verify();
    if ($is_authenticated){
        
        $ruta_comprobante = $_POST['ruta_comprobante'];
        $fecha = $_POST['fecha'];
        $id_booking = $_POST['id_booking'];

        $insert_result = Pago::create($ruta_comprobante, $fecha, $id_booking);
        if ($insert_result == 1 ){
            $new_pago = Pago::get_pago_as_row_by_booking_id($id_booking)[0];
            $values = array();
            $values[0] = $new_pago['id'];
            $values[1] = $new_pago['codigo'];
            $values[2] = $new_pago['id'];
            $values[3] = $new_pago['codigo'];
            $values[4] = $new_pago['id'];
            $values[5] = $new_pago['ruta_comprobante'];
            $values[6] = $new_pago['id'];
            $values[7] = $new_pago['status'];
            $values[8] = $new_pago['id'];
            $values[9] = $new_pago['fecha'];
            $values[10] = $new_pago['id'];

            $response = CustomString::concatenate(new_pago_row, $values);
            echo $response;
        }
        else{
            echo '<div class="alert alert-danger" role="alert">Ocurrió un problema al crear el nuevo pago</div> ';
        }

    }
    else{
        Pago::navigate('index');
    }
}


// Edit pago
if ($edit){
    $is_authenticated = Pago::verify();
    if ($is_authenticated){
        $id = $_POST['id'];
        $estatus = $_POST['estado'];
        $insert_result = Pago::update($id, $estatus);
        if ($insert_result == 1 ){
            $new_pago = Pago::get_pago_as_row_by_id($id)[0];
            $values = array();
            $values[0] = $new_pago['id'];
            $values[1] = $new_pago['codigo'];
            $values[2] = $new_pago['id'];
            $values[3] = $new_pago['codigo'];
            $values[4] = $new_pago['id'];
            $values[5] = $new_pago['ruta_comprobante'];
            $values[6] = $new_pago['id'];
            $values[7] = $new_pago['status'];
            $values[8] = $new_pago['id'];
            $values[9] = $new_pago['fecha'];
            $values[10] = $new_pago['id'];
            $response = CustomString::concatenate(new_pago_row, $values);
            echo $response;
        }
        else{
            echo '<div class="alert alert-danger" role="alert">Ocurrió un problema al editar el pago</div> ';
        }

    }
    else{
        Pago::navigate('index');
    }
}

