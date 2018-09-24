<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


ini_set('display_errors', 1);
include_once 'conf/constant.php';
include_once Api;


$get_route_dates = ($_SERVER['REQUEST_METHOD'] === 'GET') && (isset($_GET['get_route_dates']));
$get_tarifas = ($_SERVER['REQUEST_METHOD'] === 'GET') && (isset($_GET['route']) && isset($_GET['travel_date']));

if ($get_route_dates){
    $result = Api::get_routes_viaje_dates($_GET['get_route_dates']);
    echo json_encode($result);
}
//echo json_encode($_GET);
if ($get_tarifas){
    $result = Api::get_travel_tarifas($_GET['route'], $_GET['travel_date']);
    echo json_encode($result);
}

