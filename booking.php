<?php

ini_set('display_errors', 1);
include_once 'conf/constant.php';
include_once Booking;

$show_list = $_SERVER['REQUEST_METHOD'] === 'GET';

// Show list
if ($show_list){
    $is_authenticated = Booking::verify();
    if ($is_authenticated){
        $smarty->assign('bookings', Booking::get_list());
        $smarty->display(Template_Dir.'/admin/booking.tpl');
    }
    else{
        Booking::navigate('index');
    }
}
