<?php

ini_set('display_errors', 1);
include_once 'conf/constant.php';
include_once Login;

$show_login = $_SERVER['REQUEST_METHOD'] === 'GET';
$perform_login = $_SERVER['REQUEST_METHOD'] === 'POST';

if ($show_login){
    $is_authenticated = Login::verify();
    if ($is_authenticated){
        Login::navigate('admin');
    }
    else{
        $smarty->display(Template_Dir.'/admin/login.tpl');
    }
}
else {
    if ($perform_login){
        if (Login::perform('efriedman', '4859ef')) {
            Login::navigate('admin');
        }
    }
}
