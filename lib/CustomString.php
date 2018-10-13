<?php

include_once "CustomException.php";

abstract class CustomString {
    
    static function concatenate($string, $values){
        $requested_values_amount = substr_count($string, '%');
        $given_values_amount = sizeof($values);
        if ($requested_values_amount != $given_values_amount){
            $exception_message = "Amount of % ($requested_values_amount)in expression is different than given values amount ($given_values_amount)";
            return CustomException::build_exception($exception_message, "11", "CustomString::concatenate");
        }       
        $string_iterator = strtok($string,"%");
        $response = "";     
        $i = 0;
        while ($string_iterator !== FALSE && $i < $given_values_amount){ 
            $response.= $string_iterator.$values[$i];
            $string_iterator = strtok("%");
            $i += 1;
        }
        return $response.$string_iterator;        
    }
}

?>
