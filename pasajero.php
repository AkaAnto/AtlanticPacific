<?php

ini_set('display_errors', 1);
include_once 'conf/constant.php';
include_once TarifaPasajero;

define('new_TarifaCarga_row', '
    <tr class="ajax_new" id="tarifa_%">  
        <td>%</td>  
        <td>%$</td> 
        <td>%$</td> 
        <td>%$</td> 
        <td>%$</td> 
        <td>%$</td> 
        <td>%$</td> 
        <td>%$</td> 
        <td>%$</td> 
        <td>
            <span class="">
                <a href="#" data-id="TarifaCarga_%" class="btn btn-default" title="editar Tarifa Carga" onclick="" data-toggle="modal" data-target="#TarifaCargaEdit"><i class="glyphicon glyphicon-edit"></i></a>
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
        // $smarty->assign('available_barcos', TarifaPasajero::get_barcos());
        $smarty->display(Template_Dir.'/admin/tarifa_pasajero.tpl');
        
    }
    else{
        Login::navigate('index');
    }
}

// Add new TarifaCarga
if ($create){
    $is_authenticated = TarifaCarga::verify();
    if ($is_authenticated){

        $id_barco = $_POST['barco_tarifa'];
        $tres_metros = $_POST['tres_metros'];
        $seis_metros = $_POST['seis_metros'];
        $nueve_metros = $_POST['nueve_metros'];
        $quince_metros = $_POST['quince_metros'];
        $dieciocho_metros = $_POST['dieciocho_metros'];
        $moto_grande  = $_POST['moto_grande'];
        $moto_chica = $_POST['moto_chica'];
        $bicicleta = $_POST['bicicleta'];

        $insert_result = TarifaCarga::create($id_barco, $tres_metros, $seis_metros, $nueve_metros, $quince_metros, $dieciocho_metros, $moto_grande, $moto_chica, $bicicleta);
        if ($insert_result == 1 ){
            $new_tarifa_carga = TarifaCarga::get_tarifa_carga_as_row_by_barco_id($id_barco)[0];
            $values = array();
            $values[0] = $new_tarifa_carga['id_barco'];
            $values[1] = $new_tarifa_carga['nombre'];
            $values[2] = $tres_metros;
            $values[3] = $seis_metros;
            $values[4] = $nueve_metros;
            $values[5] = $quince_metros;
            $values[6] = $dieciocho_metros ;
            $values[7] = $moto_grande;
            $values[8] = $moto_chica;
            $values[9] = $bicicleta;
            $values[10] = $new_tarifa_carga['id_barco'];
            $response = CustomString::concatenate(new_TarifaCarga_row, $values);
            echo $response;
        }
        else{
           echo '<div class="alert alert-danger" role="alert">Ocurrió un problema al crear el nuevo TarifaCarga</div> ';
        }

    }
    else{
        Login::navigate('index');
    }
}


// Edit TarifaCarga
if ($edit){
    $is_authenticated = TarifaCarga::verify();
    if ($is_authenticated){
     
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $alto = $_POST['alto'];
        $ancho = $_POST['ancho'];
        $largo = $_POST['largo'];
        $capacidad = $_POST['capacidad'];

        $insert_result = TarifaCarga::update($id, $nombre, $alto, $ancho, $largo, $capacidad );
        if ($insert_result == 1 ){
            $new_TarifaCarga = TarifaCarga::get_TarifaCarga_as_row_by_name($nombre)[0];
            $values = array();
            $values[0] = $new_TarifaCarga['id'];
            $values[1] = $nombre;
            $values[2] = $alto;
            $values[3] = $ancho;
            $values[4] = $largo;
            $values[5] = $capacidad ;
            $values[6] = $new_TarifaCarga['id'];
            $values[7] = $new_TarifaCarga['id'];
            $response = CustomString::concatenate(new_TarifaCarga_row, $values);
            echo $response;
        }
        else{
            echo '<div class="alert alert-danger" role="alert">Ocurrió un problema al editar el TarifaCarga</div> ';
        }

    }
    else{
        Login::navigate('index');
    }
}

