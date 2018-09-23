<?php
include_once 'conf/constant.php';
include_once Login;
include_once Lib_String;


define ("get_travel_dates", 'SELECT fecha FROM viaje where puerto_origen="%"');

class Api extends Login {

    public static function get_routes_viaje_dates($puerto_origen) {
        $values = array();
        $values[0] = $puerto_origen;
        $query = CustomString::concatenate(get_travel_dates, $values);
        //echo $query;
        $travels = Api::run_select($query);
        if (sizeof($travels) >= 1){
            $current_travels = array();
            $now = time();
            foreach ($travels as $travel){
                $time = strtotime($travel['fecha']);
                $datediff = ($time - $now)/(60*60*24);
                if ($datediff < 3){
                }
                else {
                    $newformat = date('d-m-Y',$time);
                    array_push($current_travels, $newformat);
                }

            }

            return $current_travels;
        }
        else {
            return $query;
//            return "No se encontraron viajes.";
        }
    }

}
