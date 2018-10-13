<?php

ini_set('display_errors', 1);
include_once 'conf/constant.php';
include Booking;
include Pago;

$show_list = $_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['booking']);
$pay = $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_booking']);


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



// Show list
if ($pay){

    $is_authenticated = true;
//    $is_authenticated = Booking::verify();
    if ($is_authenticated){

        $info = pathinfo($_FILES['paybooking_image']['name']);
        $ext = $info['extension']; // get the extension of the file
        $newname = $_POST['code_booking'].'.'.$ext;

        $target = 'uploads/payments/'.$newname;
        move_uploaded_file( $_FILES['paybooking_image']['tmp_name'], $target);

        $booking = Booking::get_by_code($_POST['code_booking']);

        $ruta_comprobante = $newname;
        $fecha = date('d-m-y H:i:s');;
        $id_booking = $_POST['id_booking'];

        $insert_result = Pago::create($ruta_comprobante, $fecha, $id_booking);

        $smarty->assign('booking', $booking[0]);
        $smarty->assign('info_message','Pago recibido!');

        $smarty->display(Template_Dir.'/admin/paybooking.tpl');

    }
    else{
        Login::navigate('index');
    }
}
