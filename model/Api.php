<?php
include_once 'conf/constant.php';
include_once Login;
include_once Lib_String;


define ("get_travel_dates", 'SELECT fecha FROM viaje where puerto_origen="%"');
define ("get_cargo_tarifas", "SELECT tc.* from tarifa_carga tc, viaje v where v.puerto_origen='%' and v.fecha='%' and v.id_barco = tc.id_barco");
define ("get_passenger_tarifas", "SELECT tp.* from tarifa_pasajero tp, viaje v where v.puerto_origen='%' and v.fecha='%' and v.id_barco = tp.id_barco");

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
            return "No se encontraron viajes.";
        }
    }

    public static function get_cargo_tarifas($route, $date) {
        $values = array();
        $values[0] = $route;
        $values[1] = $date;
        $query = CustomString::concatenate(get_cargo_tarifas, $values);
        $tarifas = Api::run_select($query);
        if (sizeof($tarifas) >= 1){
            return $tarifas;
        }
        else {
            return ["error" =>"No se encontraron tarifas."];
        }
    }


    public static function get_passenger_tarifas($route, $date) {
        $values = array();
        $values[0] = $route;
        $values[1] = $date;
        $query = CustomString::concatenate(get_passenger_tarifas, $values);
        $tarifas = Api::run_select($query);
        if (sizeof($tarifas) >= 1){
            return $tarifas;
        }
        else {
            return ["error" =>"No se encontraron tarifas."];
        }
    }

}
