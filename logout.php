<?php

ini_set('display_errors', 1);
include_once 'conf/constant.php';
include_once Login;

$show_login = $_SERVER['REQUEST_METHOD'] === 'GET';
$perform_login = $_SERVER['REQUEST_METHOD'] === 'POST';
Login::log_out();
Login::navigate('login');





