<?php

ini_set('display_errors', 1);
include_once 'conf/constant.php';
include_once Viaje;

define('new_Viaje_row', '
    <tr class="ajax_new" id="viaje_%">  
        <td>%</td> 
        <td>%</td>
        <td>%</td>
        <td>%</td>
         
        
        <td>
            <span class="">
                <a href="#" data-id="Viaje_%" class="btn btn-default" title="editar Viaje" onclick="" data-toggle="modal" data-target="#ViajeEdit"><i class="glyphicon glyphicon-edit"></i></a>
            </span>
        </td>
    </tr>');

$show_list = $_SERVER['REQUEST_METHOD'] === 'GET';
$create = $_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['id']);
$edit= $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id']);


// Show list
if ($show_list){
    $is_authenticated = Viaje::verify();
    if ($is_authenticated){
        $smarty->assign('viajes', Viaje::get_list());
        $smarty->assign('available_barcos', Viaje::get_barcos());
        $smarty->display(Template_Dir.'/admin/viaje.tpl');
        
    }
    else{
        Login::navigate('index');
    }
}

// Add new Viaje
if ($create){
    $is_authenticated = Viaje::verify();
    if ($is_authenticated){
        $split_fecha = explode("-", $_POST['fecha']);
        $fecha = $split_fecha[2].'-'.$split_fecha[1].'-'.$split_fecha[0];
        $puerto_origen = $_POST['puerto_origen'];
        $puerto_destino = $_POST['puerto_destino'];
        $id_barco = $_POST['barco_tarifa'];


        $insert_result = Viaje::create($fecha, $puerto_origen , $puerto_destino, $id_barco);
        if ($insert_result == 1 ){
            $new_viaje = Viaje::get_viaje_as_row_by_barco_id($id_barco)[0];
            $values = array();
            $values[0] = $new_viaje['id_barco'];
            $values[1] = $new_viaje['nombre'];
            $values[2] = $fecha;
            $values[3] = $puerto_origen ;
            $values[4] = $puerto_destino;
            $values[5] = $new_viaje['id_barco'];
            $response = CustomString::concatenate(new_Viaje_row, $values);
            echo $response;
        }
        else{
           echo '<div class="alert alert-danger" role="alert">Ocurrió un problema al crear el nuevo Viaje</div> ';
        }
    }
    else{
        Login::navigate('index');
    }
}


// Edit TarifaPasajero
if ($edit){
    $is_authenticated = TarifaPasajero::verify();
    if ($is_authenticated){
        $id = $_POST['id'];
        $id_barco = $_POST['barco_tarifa'];
        $particular = $_POST['particular'];
        $en_auto = $_POST['en_auto'];
        $en_autobus = $_POST['en_autobus'];
        $ayudante_gandola = $_POST['ayudante_gandola'];
        $conductor_gandola = $_POST['conductor_gandola'];
        $conductor_autobus  = $_POST['conductor_autobus'];

        $insert_result = TarifaPasajero::update($id, $id_barco, $particular , $en_auto, $en_autobus, $ayudante_gandola , $conductor_gandola, $conductor_autobus);
        if ($insert_result == 1 ){
            $new_tarifa_pasajero = TarifaPasajero::get_tarifa_pasajero_as_row_by_barco_id($id_barco)[0];
            $values = array();
            $values[0] = $new_tarifa_pasajero['id_barco'];
            $values[1] = $new_tarifa_pasajero['nombre'];
            $values[2] = $particular; 
            $values[3] = $en_auto ;
            $values[4] = $en_autobus;
            $values[5] = $ayudante_gandola;
            $values[6] = $conductor_gandola;
            $values[7] = $conductor_autobus;
            $values[8] = $new_tarifa_pasajero['id_barco'];
            $response = CustomString::concatenate(new_TarifaPasajero_row, $values);
            echo $response;
            
        }
        else{
            echo '<div class="alert alert-danger" role="alert">Ocurrió un problema al editar el TarifaPasajero</div> ';
        }

    }
    else{
        Login::navigate('index');
    }
}

