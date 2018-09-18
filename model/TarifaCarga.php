<?php
include_once 'conf/constant.php';
include_once Login;
include_once Lib_String;


define ("get_all_tarifa_cargas", 'SELECT b.nombre, tc.*  FROM  barco b, tarifa_carga tc where b.id=tc.id_barco order by tc.id_barco ASC');
define ("get_barcos_without_tarifa_carga", 'SELECT b.nombre, b.id from barco b where b.id not in (select id_barco from tarifa_carga)');
define ("get_tarifa_carga_by_barco_id", 'SELECT b.nombre as nombre , tc.*  FROM barco b, tarifa_carga tc where tc.id_barco=% and b.id=tc.id_barco');
define ("create_tarifa_carga", "INSERT INTO tarifa_carga (id_barco, tres_metros, seis_metros,nueve_metros, 
                                quince_metros, dieciocho_metros, moto_grande, moto_chica, bicicleta) VALUES(%, %, %, %, %, %, %, %, %)");
define ("update_tarifa_carga", "update tarifa_carga set tres_metros=%, seis_metros=%, nueve_metros=%, quince_metros=%, dieciocho_metros=%,
                                moto_grande=%, moto_chica=%,  bicicleta=% where id_barco=%");


class TarifaCarga extends Login {

    public static function get_list() {
        $tarifa_cargas = TarifaCarga::run_select(get_all_tarifa_cargas);
        if (sizeof($tarifa_cargas) >= 1){
            return $tarifa_cargas;
        }
        else {
            return "No se encontraron tarifa cargas.";
        }
    }

    public static function get_barcos() {
        $barcos = TarifaCarga::run_select(get_barcos_without_tarifa_carga);
        if (sizeof($barcos) >= 1){
            return $barcos;
        }
        else {
            return "No se encontraron tarifa cargas.";
        }
    }

    public static function create($id_barco, $tres_metros, $seis_metros, $nueve_metros, $quince_metros, $dieciocho_metros, $moto_grande, $moto_chica, $bicicleta) {
        $values = array();
        $values[0] = $id_barco;
        $values[1] = $tres_metros;
        $values[2] = $seis_metros;
        $values[3] = $nueve_metros;
        $values[4] = $quince_metros ;
        $values[5] = $dieciocho_metros ;
        $values[6] = $moto_grande ;
        $values[7] = $moto_chica ;
        $values[8] = $bicicleta ;

        $query = CustomString::concatenate(create_tarifa_carga, $values);
        return TarifaCarga::run_query($query);
    }

    public static function update($id_barco, $tres_metros, $seis_metros, $nueve_metros, $quince_metros, $dieciocho_metros, $moto_grande, $moto_chica, $bicicleta) {
        $values = array();
        $values[0] = $tres_metros;
        $values[1] = $seis_metros;
        $values[2] = $nueve_metros;
        $values[3] = $quince_metros ;
        $values[4] = $dieciocho_metros ;
        $values[5] = $moto_grande;
        $values[6] = $moto_chica;
        $values[7] = $bicicleta;
        $values[8] = $id_barco;
        $query = CustomString::concatenate(update_tarifa_carga, $values);
        return TarifaCarga::run_query($query);
    }

    public static function get_tarifa_carga_as_row_by_barco_id($barco_id) {
        $values = array();
        $values[0] = $barco_id;
        $query = CustomString::concatenate(get_tarifa_carga_by_barco_id, $values);
        $tarifas = TarifaCarga::run_select($query);
        if (sizeof($tarifas) >= 1){
            return $tarifas;
        }
        else {
            return "No se encontro el  tarifa_carga para barco con id  ".$barco_id;
        }
    }
}
