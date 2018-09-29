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


$get_route_dates = ($_SERVER['REQUEST_METHOD'] === 'GET') && (isset($_GET['get_route_dates']));
$get_tarifas = ($_SERVER['REQUEST_METHOD'] === 'GET') && (isset($_GET['route']) && isset($_GET['travel_date']) && !isset($_GET['passenger']));
$get_passenger_tarifas = ($_SERVER['REQUEST_METHOD'] === 'GET') && (isset($_GET['route']) && isset($_GET['travel_date']) && isset($_GET['passenger']));
$post_booking = ($_SERVER['REQUEST_METHOD'] === 'POST') && (isset($_POST['totalPrice']));

if ($get_route_dates){
    $result = Api::get_routes_viaje_dates($_GET['get_route_dates']);
    echo json_encode($result);
}

if ($get_tarifas){
    $result = Api::get_cargo_tarifas($_GET['route'], $_GET['travel_date']);
    echo json_encode($result);
}


if ($get_passenger_tarifas){
    $result = Api::get_passenger_tarifas($_GET['route'], $_GET['travel_date']);
    echo json_encode($result);
}


if ($post_booking){
//    $result = Api::get_passenger_tarifas($_GET['route'], $_GET['travel_date']);
//    echo json_encode($result);
//    Email::send_html_mail('antojrd@gmail.com', 'prueba mail', 'hola', 'antojrd@gmail.com', $smarty);
//
    Email::send_booking_mail('antojrd@gmail.com', 'Email prueba booking', $_POST, $smarty);

    print_r ($_POST);
}

