<?php

ini_set('display_errors', 1);
include_once 'conf/constant.php';
include_once Login;

$show_admin = $_SERVER['REQUEST_METHOD'] === 'GET';
$perform_login = $_SERVER['REQUEST_METHOD'] === 'POST';

if ($show_admin){
    $is_authenticated = Login::verify();
    if ($is_authenticated){
        $smarty->display(Template_Dir.'/admin/dashboard.tpl');
    }
    else{
        Login::navigate('index');
    }
}
else {

}




