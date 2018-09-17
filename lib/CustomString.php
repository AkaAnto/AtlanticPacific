<?php

include_once "CustomException.php";

define("concatenate_values_exception", 'Amount of % in expression is different than given values amount (sizeof(values))');

abstract class CustomString {
    
    static function concatenate($string, $values){
        $requested_values_amount = substr_count($string, '%');
        $given_values_amount = sizeof($values);
        if ($requested_values_amount != $given_values_amount){  
            return CustomException::build_exception(concatenate_values_exception, "11", "CustomString::concatenate");
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
