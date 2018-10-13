<?php

ini_set('display_errors', 1);
include_once 'conf/constant.php';
include Booking;

$show_list = $_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['booking']);


// Show list
if ($show_list){

    $is_authenticated = true;
//    $is_authenticated = Booking::verify();
    if ($is_authenticated){

        $booking = Booking::get_by_code($_GET['booking']);

        $smarty->assign('booking', $booking[0]);


        $smarty->display(Template_Dir.'/admin/paybooking.tpl');
        
    }
    else{
        Login::navigate('index');
    }
}


