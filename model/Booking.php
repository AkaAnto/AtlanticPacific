<?php
include_once 'conf/constant.php';
include_once Login;
include_once Lib_String;


define ("get_all_bookings", 'SELECT b.*, bc.*,bp.*, bca.* FROM booking b, booking_contacto bc, booking_pasajero bp, booking_carga bca  WHERE bc.Id_booking = b.id and bp.Id_booking = b.id and bca.Id_booking = b.id');
define ("get_barco_by_name", 'SELECT *  FROM barco where nombre="%"');
define ("create_barco", "INSERT INTO barco (nombre, alto, ancho, largo, capacidad) VALUES('%', %, %, %,%)");
define ("update_barco", "update barco set nombre='%', alto=%, ancho=%, largo=%, capacidad=% where id=%");


class Booking extends Login {

    public static function get_list() {
        $barcos = Booking::run_select(get_all_bookings);
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
        return Barco::run_query($query);
    }

    public static function update($id, $nombre, $alto, $ancho, $largo, $capacidad) {
        $values = array();
        $values[0] = $nombre;
        $values[1] = $alto;
        $values[2] = $ancho;
        $values[3] = $largo;
        $values[4] = $capacidad ;
        $values[5] = $id ;
        $query = CustomString::concatenate(update_barco, $values);
        return Barco::run_query($query);
    }

    public static function get_barco_as_row_by_name($barco_name) {
        $values = array();
        $values[0] = $barco_name;
        $query = CustomString::concatenate(get_barco_by_name, $values);
        $barcos = Barco::run_select($query);
        if (sizeof($barcos) >= 1){
            return $barcos;
        }
        else {
            return "No se encontro el  barco con nombre ".$barco_name;
        }
    }
}
