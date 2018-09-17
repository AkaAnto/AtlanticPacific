<?php

ini_set('display_errors', 1);
include_once 'conf/constant.php';
include_once Barco;

$show_list = $_SERVER['REQUEST_METHOD'] === 'GET';
$create = $_SERVER['REQUEST_METHOD'] === 'POST';

// Show list
if ($show_list){
    $is_authenticated = Barco::verify();
    if ($is_authenticated){
        $smarty->assign('barcos', Barco::get_list());
        $smarty->display(Template_Dir.'/admin/barco.tpl');
    }
    else{
        Login::navigate('index');
    }
}

// Add new barco
if ($create){
    $is_authenticated = Barco::verify();
    if ($is_authenticated){
        $nombre = $_POST['nombre'];
        $alto = $_POST['alto'];
        $ancho = $_POST['ancho'];
        $largo = $_POST['largo'];
        $capacidad= $_POST['capacidad'];

        print_r($_POST);
        echo '<h1> '.Barco::create($nombre, $alto, $ancho, $largo, $capacidad ). ' </h1>';

    }
    else{
        Login::navigate('index');
    }
}


