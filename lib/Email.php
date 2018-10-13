<?php

abstract class Email {
   
    static function send_simple_mail($to, $subject, $message, $from){
        mail($to, $subject, $message, "From:" . $from);
        return true;
    }

    static function send_booking_mail($to, $subject, $booking, $codigo_booking, $smarty){
        $headers = "From: " . strip_tags('sales@smartlogisticscargo.com') . "\r\n";
        $headers .= "Reply-To: ". strip_tags('smart@smartlogisticscargo.com') . "\r\n";
        $headers .= "Return-Path: smart@smartlogisticscargo.com\r\n";
        //$headers .= "CC: antojrd@gmail.com\r\n";
        $headers .= "CC: antojrd@gmail.com, sales@smartlogisticscargo.com, smart@smartlogisticscargo.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $smarty->assign("booking", $booking);
        $smarty->assign("codigo_booking", $codigo_booking);
        $body = $smarty->fetch(Template_Dir.'email.tpl');
        return true;
    }

    static function send_booking_approved_mail($to, $subject, $codigo_booking, $smarty){
        $headers = "From: " . strip_tags('sales@smartlogisticscargo.com') . "\r\n";
        $headers .= "Reply-To: ". strip_tags('smart@smartlogisticscargo.com') . "\r\n";
        $headers .= "Return-Path: smart@smartlogisticscargo.com\r\n";
//        $headers .= "CC: antojrd@gmail.com\r\n";
        $headers .= "CC: antojrd@gmail.com, sales@smartlogisticscargo.com, smart@smartlogisticscargo.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $smarty->assign("codigo_booking", $codigo_booking);
        $body = $smarty->fetch(Template_Dir.'email_approve.tpl');
        mail($to, $subject, $body, $headers);
        return true;
    }
}
