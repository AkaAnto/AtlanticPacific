<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


ini_set('display_errors', 1);
include_once 'conf/constant.php';
include_once Api;
include_once Lib_Email;
include_once Booking;


$get_route_dates = ($_SERVER['REQUEST_METHOD'] === 'GET') && (isset($_GET['get_route_dates']));
$get_tarifas = ($_SERVER['REQUEST_METHOD'] === 'GET') && (isset($_GET['route']) && isset($_GET['travel_date']) && !isset($_GET['passenger']));
$get_passenger_tarifas = ($_SERVER['REQUEST_METHOD'] === 'GET') && (isset($_GET['route']) && isset($_GET['travel_date']) && isset($_GET['passenger']));
$post_booking = ($_SERVER['REQUEST_METHOD'] === 'POST') && (isset($_POST['totalPrice']));

if ($get_route_dates){
    $result = Api::get_routes_viaje_dates($_GET['get_route_dates']);
    echo json_encode($result);
}

if ($get_tarifas){
    $formated_date = explode('-', $_GET['travel_date']);
    $date = $formated_date[2].'-'.$formated_date[1].'-'.$formated_date[0];
    $result = Api::get_cargo_tarifas($_GET['route'], $date);
    echo json_encode($result);
}

if ($get_passenger_tarifas){
    $formated_date = explode('-', $_GET['travel_date']);
    $date = $formated_date[2].'-'.$formated_date[1].'-'.$formated_date[0];
    $result = Api::get_passenger_tarifas($_GET['route'], $date);
    echo json_encode($result);
}

if ($post_booking){
    $travel_date = $_POST['travel_date'];
    $id_viaje = $_POST['travel_id'];
    $precio = $_POST['totalPrice'];
    $codigo = uniqid('APS');
    $today = date('d-m-y H:i:s');

    $insert_result = Booking::create($travel_date, $codigo, $precio, $id_viaje);
    if ($insert_result){
        $new_booking_id = Booking::get_booking_id_by_codigo_and_id_viaje($codigo, $id_viaje)[0]['id'];
        $vehicle_type = $_POST['vehicleType'];
        $vehicle_height = $_POST['vehicleHeight'];
        $vehicle_width = $_POST['vehicleWidth'];
        $vehicle_length = $_POST['vehicleLength'];
        $vehicle_weight = $_POST['vehicleWeight'];
        $vehicle_plate = $_POST['vehiclePlate'];
        $cargo_owner = $_POST['cargoOwner'];
        $cargo_owner_passport = $_POST['cargoOwnerPassport'];
        $cargo_type = $_POST['cargoType'];
        $cargo_weight = $_POST['cargoWeight'];
        $cargo_description = $_POST['cargoDescription'];
        $cargo_price = $_POST['cargoPrice'];

        $create_booking_carga_result = Booking::addCarga($vehicle_type, $vehicle_height, $vehicle_length, $vehicle_width,
                                                        $vehicle_weight, $vehicle_plate, $cargo_owner, $cargo_owner_passport,
                                                        $cargo_type, $cargo_weight, $cargo_description, $cargo_price,
                                                        $new_booking_id);
        if ($create_booking_carga_result){
            Booking::addEstatus('Creado', $today, $new_booking_id);
            $client_name = $_POST['clientName'];
            $client_passport = $_POST['clientPassport'];
            $client_phone = $_POST['clientPhone'];
            $dut_number = $_POST['dut_number'];
            $client_email = $_POST['clientEmail'];
            $create_booking_contact_result = Booking::addContact($client_name, $client_passport, $client_phone, $dut_number, $client_email, $new_booking_id);
            if ($create_booking_contact_result){
                $passengers = $_POST['passengerList'];
                foreach ($passengers as $passenger){
                    Booking::addPassenger($passenger['passengerType'], $passenger['passengerName'], $passenger['passengerPassport'], $passenger['passengerPrice'], $new_booking_id);
                }
            }
//            Email::send_booking_mail($_POST['clientEmail'], 'Nuevo Booking '.$codigo.' [En prueba]', $_POST, $codigo, $smarty);
            Email::send_booking_approved_mail($_POST['clientEmail'], 'Nuevo Booking Aprobado '.$codigo.' [En prueba]', $codigo, $smarty);
            echo '{status:"success"}';
        }
    }
}

