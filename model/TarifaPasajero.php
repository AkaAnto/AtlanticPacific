<?php
include_once 'conf/constant.php';
include_once Login;
include_once Lib_String;


define ("get_all_tarifa_pasajeros", 'SELECT b.nombre, tp.*  FROM  barco b, tarifa_pasajero tp where b.id=tp.id_barco order by tp.id_barco ASC');
define ("get_barcos_without_tarifa_pasajero", 'SELECT b.nombre, b.id from barco b where b.id not in (select id_barco from tarifa_pasajero)');
define ("get_tarifa_pasajero_by_barco_id", 'SELECT b.nombre as nombre , tp.*  FROM barco b, tarifa_pasajero tp where tp.id_barco=% and b.id=tp.id_barco');
define ("create_tarifa_pasajero", "INSERT INTO tarifa_pasajero (id_barco, particular, en_auto, en_autobus, 
                                ayudante_gandola, conductor_gandola, conductor_autobus) VALUES(%, %, %, %, %, %, %)");
define ("update_tarifa_carga", "update tarifa_carga set nombre='%', alto=%, ancho=%, largo=%, capacidad=% where id=%");


class TarifaPasajero extends Login {

    public static function get_list() {
        $tarifa_pasajeros = TarifaPasajero::run_select(get_all_tarifa_pasajeros);
        if (sizeof($tarifa_pasajeros) >= 1){
            return $tarifa_pasajeros;
        }
        else {
            return "No se encontraron tarifa pasajeros.";
        }
    }

    public static function get_barcos() {
        $barcos = TarifaPasajero::run_select(get_barcos_without_tarifa_pasajero);
        if (sizeof($barcos) >= 1){
            return $barcos;
        }
        else {
            return "No se encontraron tarifa cargas.";
        }
    }

    public static function create($id_barco, $particular , $en_auto, $en_autobus, $ayudante_gandola , $conductor_gandola, $conductor_autobus) {
        $values = array();
        $values[0] = $id_barco;
        $values[1] = $particular;
        $values[2] = $en_auto;
        $values[3] = $en_autobus;
        $values[4] = $ayudante_gandola;
        $values[5] = $conductor_gandola;
        $values[6] = $conductor_autobus ;
        $query = CustomString::concatenate(create_tarifa_pasajero, $values);
        return TarifaPasajero::run_query($query);
    }

    public static function update($id, $nombre, $alto, $ancho, $largo, $capacidad) {
        $values = array();
        $values[0] = $nombre;
        $values[1] = $alto;
        $values[2] = $ancho;
        $values[3] = $largo;
        $values[4] = $capacidad ;
        $values[5] = $id ;
        $query = CustomString::concatenate(update_tarifa_carga, $values);
        return TarifaPasajero::run_query($query);
    }

    public static function get_tarifa_pasajero_as_row_by_barco_id($barco_id) {
        $values = array();
        $values[0] = $barco_id;
        $query = CustomString::concatenate(get_tarifa_pasajero_by_barco_id, $values);
        $tarifas = TarifaPasajero::run_select($query);
        if (sizeof($tarifas) >= 1){
            return $tarifas;
        }
        else {
            return "No se encontro el  tarifa_pasajero para barco con id  ".$barco_id;
        }
    }
}
