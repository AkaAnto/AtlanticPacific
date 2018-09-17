<?php
include_once 'conf/constant.php';
include_once Login;
include_once Lib_String;


define ("get_all_barcos", 'SELECT *  FROM barco order by id DESC');
define ("create_barco", "INSERT INTO barco (nombre, alto, ancho, largo, capacidad) VALUES('%', %, %, %,%)");


class Barco extends Login {


    public static function get_list() {
        $barcos = Barco::run_select(get_all_barcos);
        if (sizeof($barcos) >= 1){
            return $barcos;
        }
        else {
            return "No se encontraron barcos.";
        }
    }

    public static function create($nombre, $alto, $ancho, $largo, $capacidad) {
        $values = array();
        $values[0] = $nombre;
        $values[1] = $alto;
        $values[2] = $ancho;
        $values[3] = $largo;
        $values[4] = $capacidad ;
        $query = CustomString::concatenate(create_barco, $values);
        echo $query;
        return Barco::run_query($query);
    }

}
