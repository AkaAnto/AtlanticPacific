<?php

ini_set('display_errors', 1);
include_once 'conf/constant.php';
include_once Login;

Login::log_out();
$smarty->assign('info_message', 'Ha cerrado su sesión');
$smarty->display(Template_Dir.'/admin/login.tpl');
