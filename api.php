<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


ini_set('display_errors', 1);
include_once 'conf/constant.php';
include_once Api;


$get_route_dates = $_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['get_route_dates']);
$create = $_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['id']);
$edit = $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id']);




if ($get_route_dates){
    $result = Api::get_routes_viaje_dates($_GET['get_route_dates']);
    echo json_encode($result);
}

