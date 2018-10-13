<?php

ini_set('display_errors', 1);
include_once 'conf/constant.php';
include_once Booking;
include_once Lib_Email;

$show_list = $_SERVER['REQUEST_METHOD'] === 'GET';
$approve_booking = ($_SERVER['REQUEST_METHOD'] === 'POST') && (isset($_POST['approve']));

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


if ($approve_booking){
    $is_authenticated = Booking::verify();
    if ($is_authenticated){
        $today = date('d-m-y H:i:s');
        $booking = Booking::get_by_id($_POST['booking_id'])[0];
        Email::send_booking_approved_mail($booking['email'], 'Nuevo Booking Aprobado '.$booking['codigo'].' [En prueba]', $booking['codigo'], $smarty);
        Booking::addEstatus('Aprobado',$today, $_POST['booking_id']);
    }
    else{
        Booking::navigate('index');
    }
}

