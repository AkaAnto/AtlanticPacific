<?php

ini_set('display_errors', 1);
include_once 'conf/constant.php';
include_once TarifaCarga;

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
$create = $_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['barco_id']);
$edit= $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['barco_id']);


// Show list
if ($show_list){
    $is_authenticated = TarifaCarga::verify();
    if ($is_authenticated){
        $smarty->assign('auth', TarifaCarga::getAuth());
        $smarty->assign('tarifa_cargas', TarifaCarga::get_list());
        $smarty->assign('available_barcos', TarifaCarga::get_barcos());
        $smarty->display(Template_Dir.'/admin/tarifa_carga.tpl');
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


// Edit Tarifa Carga
if ($edit){
    $is_authenticated = TarifaCarga::verify();
    if ($is_authenticated){

        $id_barco = $_POST['barco_id'];
        $tres_metros = $_POST['tres_metros'];
        $seis_metros = $_POST['seis_metros'];
        $nueve_metros = $_POST['nueve_metros'];
        $quince_metros = $_POST['quince_metros'];
        $dieciocho_metros = $_POST['dieciocho_metros'];
        $moto_grande  = $_POST['moto_grande'];
        $moto_chica = $_POST['moto_chica'];
        $bicicleta = $_POST['bicicleta'];

        $insert_result = TarifaCarga::update($id_barco, $tres_metros, $seis_metros, $nueve_metros, $quince_metros, $dieciocho_metros, $moto_grande, $moto_chica, $bicicleta);
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
            echo '<div class="alert alert-danger" role="alert">Ocurrió un problema al editar la  Tarifa</div> ';
        }

    }
    else{
        Login::navigate('index');
    }
}

