<?php
include_once 'conf/constant.php';
include_once Login;
include_once Lib_String;


define ("get_all_pagos", 'SELECT pago.*, pago.id as id_pago,  booking.codigo as codigo FROM pago, booking  WHERE pago.id_booking=booking.id order by pago.id DESC');
define ("get_all_bookings", 'SELECT b.codigo, b.id from booking b');
define ("get_pago_by_id", 'SELECT b.id as idPago, b.codigo as codigo , p.*  FROM booking b, pago p where p.id=% and b.id=p.id_booking');
define ("get_pago_by_booking_id", 'SELECT b.id as idPago, b.codigo as codigo , p.*   FROM booking b, pago p where p.id_booking=% and b.id=p.id_booking');
define ("create_pago", "INSERT INTO pago (ruta_comprobante, fecha, id_booking, status) VALUES('%', '%', %, '%')");
define ("update_pago", "UPDATE pago set status='%' WHERE id=%");


class Pago extends Login {

    public static function get_list() {
        $pagos = Pago::run_select(get_all_pagos);
        if (sizeof($pagos) >= 1){
            return $pagos;
        }
        else {
            return [];
        }
    }

    public static function get_bookings() {
        $bookings = Pago::run_select(get_all_bookings);
        if (sizeof($bookings) >= 1){
            return $bookings;
        }
        else {
            return "No se encontraron bookings.";
        }
    }

    public static function create($ruta_comprobante, $fecha, $id_booking) {
        $values = array();
        $values[0] = $ruta_comprobante;
        $values[1] = $fecha;
        $values[2] = $id_booking;
        $values[3] = "Creado";
        $query = CustomString::concatenate(create_pago, $values);
        return Pago::run_query($query);
    }


    public static function update($id, $estatus) {
        $values = array();
        $values[0] = $estatus;
        $values[1] = $id;
        $query = CustomString::concatenate(update_pago, $values);
        return Pago::run_query($query);
    }

  

    public static function get_pago_as_row_by_booking_id($id_booking) {
        $values = array();
        $values[0] = $id_booking;
        $query = CustomString::concatenate(get_pago_by_booking_id, $values);
        $pagos= Pago::run_select($query);
        if (sizeof($pagos) >= 1){
            return $pagos;
        }
        else {
            return "No se encontro el pago para booking con id  ".$id_booking;
        }
    }

    public static function get_pago_as_row_by_id($id) {
        $values = array();
        $values[0] = $id;
        $query = CustomString::concatenate(get_pago_by_id, $values);
        $pagos= Pago::run_select($query);
        if (sizeof($pagos) >= 1){
            return $pagos;
        }
        else {
            return "No se encontro el pago  con id  ".$id;
        }
    }
}
