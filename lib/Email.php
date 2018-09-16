<?php

abstract class Email {
   
    static function send_simple_mail($to, $subject, $message,$from){       
        mail($to, $subject, $message, "From:" . $from);
        return true;
    } 
    
     static function send_html_mail($to, $subject, $message,$from, $image, $smarty){       
        date_default_timezone_set('America/Caracas');
        $sep = sha1(date('r', time()));
        $headers = "From: $from\r\nX-Mailer: Custom PHP Script";
        $headers .="\r\nContent-Type: multipart/mixed; boundary=\"PHP-mixed-{$sep}\"";
        $inline = chunk_split(base64_encode(file_get_contents($image)));
        $smarty->assign("sep", $sep);
        $smarty->assign("message", $message);
        $smarty->assign("title", $subject);
        $smarty->assign("inline",  $inline);
        $body = $smarty->fetch('../view/templates/mail.tpl');
        echo mail($to, $subject, $body, $headers);
        return true;
    } 
    
}
