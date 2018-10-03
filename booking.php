<?php

ini_set('display_errors', 1);
include_once 'conf/constant.php';
include_once Booking;

define('new_barco_row', '
    <tr class="ajax_new" id="barco_%">  <td>%</td>  <td>% Mts</td> <td>% Mts</td> <td>% Mts</td> <td>% Ton</td> <td>
            <span class="">
                <a href="#" data-id="barco_%" class="btn btn-default" title="ver barco" onclick="" data-toggle="modal" data-target="#barcoDetail"><i class="glyphicon glyphicon-eye-open"></i></a>
                <a href="#" data-id="barco_%" class="btn btn-default" title="editar barco" onclick="" data-toggle="modal" data-target="#barcoEdit"><i class="glyphicon glyphicon-edit"></i></a>
            </span>
        </td>
    </tr>');

$show_list = $_SERVER['REQUEST_METHOD'] === 'GET';
$create = $_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['id']);
$edit= $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id']);


// Show list
if ($show_list){
    $is_authenticated = Booking::verify();
    if ($is_authenticated){
        $smarty->assign('bookings', Booking::get_list());
        $smarty->display(Template_Dir.'/admin/booking.tpl');
    }
    else{
        Barco::navigate('index');
    }
}

// Add new booking
if ($create){
//    $is_authenticated = Barco::verify();
//    if ($is_authenticated){
        $travel_date = $_POST['travel_date'];
        $id_viaje = $_POST['id_viaje'];
        $codigo = '';

        $insert_result = Booking::create($travel_date, $id_viaje, $codigo);
        if ($insert_result == 1 ){
            $new_barco = Barco::get_barco_as_row_by_name($nombre)[0];
            $values = array();
            $values[0] = $new_barco['id'];
            $values[1] = $nombre;
            $values[2] = $alto;
            $values[3] = $ancho;
            $values[4] = $largo;
            $values[5] = $capacidad ;
            $values[6] = $new_barco['id'];
            $values[7] = $new_barco['id'];
            $response = CustomString::concatenate(new_barco_row, $values);
            echo $response;
        }
        else{
           echo '<div class="alert alert-danger" role="alert">Ocurrió un problema al crear el nuevo barco</div> ';
        }

    //}
//    else{
//        Barco::navigate('index');
//    }
}


// Edit barco
if ($edit){
    $is_authenticated = Barco::verify();
    if ($is_authenticated){
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $alto = $_POST['alto'];
        $ancho = $_POST['ancho'];
        $largo = $_POST['largo'];
        $capacidad = $_POST['capacidad'];

        $insert_result = Barco::update($id, $nombre, $alto, $ancho, $largo, $capacidad );
        if ($insert_result == 1 ){
            $new_barco = Barco::get_barco_as_row_by_name($nombre)[0];
            $values = array();
            $values[0] = $new_barco['id'];
            $values[1] = $nombre;
            $values[2] = $alto;
            $values[3] = $ancho;
            $values[4] = $largo;
            $values[5] = $capacidad ;
            $values[6] = $new_barco['id'];
            $values[7] = $new_barco['id'];
            $response = CustomString::concatenate(new_barco_row, $values);
            echo $response;
        }
        else{
            echo '<div class="alert alert-danger" role="alert">Ocurrió un problema al editar el barco</div> ';
        }

    }
    else{
        Barco::navigate('index');
    }
}

