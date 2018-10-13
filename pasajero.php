<?php

ini_set('display_errors', 1);
include_once 'conf/constant.php';
include_once TarifaPasajero;

define('new_TarifaPasajero_row', '
    <tr class="ajax_new" id="tarifa_%">  
        <td>%</td>  
        <td>%$</td> 
        <td>%$</td> 
        <td>%$</td> 
        <td>%$</td> 
        <td>%$</td> 
        <td>%$</td>  
        <td>
            <span class="">
                <a href="#" data-id="TarifaPasajero_%" class="btn btn-default" title="editar Tarifa Pasajero" onclick="" data-toggle="modal" data-target="#TarifaEdit"><i class="glyphicon glyphicon-edit"></i></a>
            </span>
        </td>
    </tr>');

$show_list = $_SERVER['REQUEST_METHOD'] === 'GET';
$create = $_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['id']);
$edit= $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id']);


// Show list
if ($show_list){
    $is_authenticated = TarifaPasajero::verify();
    if ($is_authenticated){
        $smarty->assign('tarifa_pasajeros', TarifaPasajero::get_list());
        $smarty->assign('available_barcos', TarifaPasajero::get_barcos());
        $smarty->display(Template_Dir.'/admin/tarifa_pasajero.tpl');
        
    }
    else{
        Login::navigate('index');
    }
}

// Add new TarifaPasajero
if ($create){
    $is_authenticated = TarifaPasajero::verify();
    if ($is_authenticated){
       
        $id_barco = $_POST['barco_tarifa'];
        $particular = $_POST['particular'];
        $en_auto = $_POST['en_auto'];
        $en_autobus = $_POST['en_autobus'];
        $ayudante_gandola = $_POST['ayudante_gandola'];
        $conductor_gandola = $_POST['conductor_gandola'];
        $conductor_autobus  = $_POST['conductor_autobus'];

        $insert_result = TarifaPasajero::create($id_barco, $particular , $en_auto, $en_autobus, $ayudante_gandola , $conductor_gandola, $conductor_autobus);
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
           echo '<div class="alert alert-danger" role="alert">Ocurrió un problema al crear el nuevo TarifaPasajero</div> ';
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

