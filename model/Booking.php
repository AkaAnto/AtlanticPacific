<?php
include_once 'conf/constant.php';
include_once Login;
include_once Lib_String;


define ("get_all_bookings", 'SELECT b.*, bc.*,bp.*, bca.* FROM booking b, booking_contacto bc, booking_pasajero bp, booking_carga bca  WHERE bc.Id_booking = b.id and bp.Id_booking = b.id and bca.Id_booking = b.id');
define ("get_booking_id", 'SELECT id FROM booking   WHERE  codigo = "%" and id_viaje=%');
define ("create_booking", "INSERT INTO booking (fecha, codigo, precio, id_viaje) VALUES('%', '%', %, %)");
define ("create_booking_carga", "INSERT INTO `booking_carga` (tipo_vehiculo, alto, largo, ancho, peso, placa, nombre_responsable_carga, pasaporte_responsable_carga, tipo_carga, peso_carga, descripcion_carga, precio, Id_booking) VALUES ('%', '%', '%', '%', %, '%', '%', '%', '%', %, '%', %, %)");
define ("create_booking_contacto", "INSERT INTO `booking_contacto` (nombre, pasaporte, telefono, numero_dut, email, Id_booking) VALUES ('%', '%', '%', '%', '%', %)");
define ("create_booking_passenger", "INSERT INTO `booking_pasajero` (tipo, nombre, pasaporte, precio, id_booking) VALUES ('%', '%', '%', %, %)");



class Booking extends Login {

    public static function get_list() {
        $bookings = Booking::run_select(get_all_bookings);
        if (sizeof($bookings) >= 1){
            return $bookings;
        }
        else {
            return [];
        }
    }

    public static function create($fecha, $codigo, $precio,$id_viaje) {
        $values = array();
        $values[0] = $fecha;
        $values[1] = $codigo;
        $values[2] = $precio;
        $values[3] = $id_viaje;
        $query = CustomString::concatenate(create_booking, $values);
        return Booking::run_query($query);
    }

    public static function addCarga($tipo_vehiculo, $alto, $largo, $ancho, $peso, $placa, $responsable, $pasaporte_responsable, $tipo_carga, $peso_carga, $descripcion_carga, $precio, $id_booking) {
        $values = array();
        $values[0] = $tipo_vehiculo;
        $values[1] = $alto;
        $values[2] = $largo;
        $values[3] = $ancho;
        $values[4] = $peso;
        $values[5] = $placa;
        $values[6] = $responsable;
        $values[7] = $pasaporte_responsable;
        $values[8] = $tipo_carga;
        $values[9] = $peso_carga;
        $values[10] = $descripcion_carga;
        $values[11] = $precio;
        $values[12] = $id_booking;
        $query = CustomString::concatenate(create_booking_carga, $values);
        return Booking::run_query($query);
    }

    public static function addContact($nombre, $pasaporte, $telefono, $numero_dut, $email, $Id_booking){
        $values = array();
        $values[0] = $nombre;
        $values[1] = $pasaporte;
        $values[2] = $telefono;
        $values[3] = $numero_dut;
        $values[4] = $email;
        $values[5] = $Id_booking;
        $query = CustomString::concatenate(create_booking_contacto, $values);
        return Booking::run_query($query);
    }

    public static function addPassenger($tipo, $nombre, $pasaporte, $precio, $Id_booking){
        $values = array();
        $values[0] = $tipo;
        $values[1] = $nombre;
        $values[2] = $pasaporte;
        $values[3] = $precio;
        $values[4] = $Id_booking;
        $query = CustomString::concatenate(create_booking_passenger, $values);
        echo $query;
        return Booking::run_query($query);
    }

    public static function get_booking_id_by_codigo_and_id_viaje($codigo, $id_viaje) {
        $values = array();
        $values[0] = $codigo;
        $values[1] = $id_viaje;
        $query = CustomString::concatenate(get_booking_id, $values);
        $bookings = Booking::run_select($query);
        if (sizeof($bookings) >= 1){
            return $bookings;
        }
        else {
            return "No se encontro el  booking con codigo ".$codigo;
        }
    }

}
