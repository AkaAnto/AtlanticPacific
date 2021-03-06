<?php
include_once 'conf/constant.php';
include_once Login;
include_once Lib_String;


define ("get_all_viajes", 'SELECT b.nombre, v.*  FROM  barco b, viaje v where b.id=v.id_barco order by v.id_barco ASC');
define ("get_all_barcos", 'SELECT b.nombre, b.id from barco b');
define ("get_viaje_by_barco_id", 'SELECT b.nombre as nombre , v.*  FROM barco b, viaje v where v.id_barco=% and b.id=v.id_barco');
define ("create_viaje", "INSERT INTO viaje (fecha, puerto_origen, puerto_destino, id_barco)
        VALUES('%', '%', '%', %)");
define ("update_tarifa_pasajero", "update tarifa_pasajero set id_barco=%, particular=%, en_auto=%, en_autobus=%, 
ayudante_gandola=%, conductor_gandola=% ,conductor_autobus=% where id_barco=%");


class Viaje extends Login {

    public static function get_list() {
        $viajes = Viaje::run_select(get_all_viajes);
        if (sizeof($viajes) >= 1){
            return $viajes;
        }
        else {
            return [];
        }
    }

    public static function get_barcos() {
        $barcos = Viaje::run_select(get_all_barcos);
        if (sizeof($barcos) >= 1){
            return $barcos;
        }
        else {
            return "No se encontraron viajes.";
        }
    }

    public static function create($fecha, $puerto_origen , $puerto_destino, $id_barco) {
        $values = array();
        $values[0] = $fecha;
        $values[1] = $puerto_origen;
        $values[2] = $puerto_destino;
        $values[3] = $id_barco;
        $query = CustomString::concatenate(create_viaje, $values);
//        echo $query;
        return Viaje::run_query($query);
    }

    public static function update($id, $id_barco, $particular , $en_auto, $en_autobus, $ayudante_gandola , $conductor_gandola, $conductor_autobus) {
        $values = array();
        $values[0] = $id_barco;
        $values[1] = $particular;
        $values[2] = $en_auto;
        $values[3] = $en_autobus;
        $values[4] = $ayudante_gandola ;
        $values[5] = $conductor_gandola ;
        $values[6] = $conductor_autobus;
        $values[7] = $id;
        $query = CustomString::concatenate(update_tarifa_pasajero, $values);
        return Viaje::run_query($query);
       
    }

    public static function get_viaje_as_row_by_barco_id($id_barco) {
        $values = array();
        $values[0] = $id_barco;
        $query = CustomString::concatenate(get_viaje_by_barco_id, $values);
        $viajes= Viaje::run_select($query);
        if (sizeof($viajes) >= 1){
            return $viajes;
        }
        else {
            return "No se encontro el viaje para barco con id  ".$id_barco;
        }
    }
}
