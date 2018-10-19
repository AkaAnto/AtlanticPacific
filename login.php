<?php

ini_set('display_errors', 1);
include_once 'conf/constant.php';
include_once Login;

$show_login = $_SERVER['REQUEST_METHOD'] === 'GET';
$perform_login = $_SERVER['REQUEST_METHOD'] === 'POST';

if ($show_login){
    $is_authenticated = Login::verify();
    if ($is_authenticated){
        if ($_SESSION['is_admin']) {
            Login::navigate('pagos.php');
        }
        if ($_SESSION['is_cotizador']) {
            Login::navigate('booking.php');
        }
        if ($_SESSION['is_aprobador']) {
            Login::navigate('booking.php');
        }
    }
    else{
        $smarty->display(Template_Dir.'/admin/login.tpl');
    }
}

if ($perform_login){
    $got_data = isset($_POST['user_name']) && isset($_POST['user_password']);

    if ($got_data){
        if (Login::perform($_POST['user_name'], $_POST['user_password'])) {
            Login::navigate('booking');
        }
        else{
            $smarty->assign('error_message', 'Usuario o clave no válidos');
            $smarty->display(Template_Dir.'/admin/login.tpl');
        }
    }
    else{
        $smarty->assign('error_message', 'Por favor suministre la información requerida');
        $smarty->display(Template_Dir.'/admin/login.tpl');
    }
}

