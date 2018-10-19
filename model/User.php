<?php

include_once 'conf/constant.php';
include_once Login;
include_once Lib_String;


define ("get_all_users","SELECT *  FROM users");
define ("get_user_by_username","SELECT *  FROM users where user_name='%'");
define ("create_usuario","INSERT INTO users (user_name, firstname,lastname,user_password_hash, user_email, is_admin, is_aprobador, is_cotizador, date_added)
        VALUES('%', '%', '%', '%', '%', %, %, %, '%')");

define ("update_usuario","update users set user_name='%', firstname='%',lastname= '%', user_email='%', is_admin=%, is_aprobador=%, is_cotizador=%
        WHERE user_id=%");

define ("update_password","update users set user_password_hash='%' WHERE user_id=%");



class User extends Login {


    public static function get_list() {
        $usuarios = User::run_select(get_all_users);
        if (sizeof($usuarios) >= 1){
            return $usuarios;
        }
        else {
            return [];
        }
    }

    public static function create($user_name, $firstname, $lastname,$user_password_hash, $user_email, $is_admin, $is_aprobador, $is_cotizador) {
        $values = array();
        $values[0] = $user_name;
        $values[1] = $firstname;
        $values[2] = $lastname;
        $values[3] = password_hash($user_password_hash, PASSWORD_DEFAULT);
        $values[4] = $user_email;
        $values[5] = $is_admin;
        $values[6] = $is_aprobador;
        $values[7] = $is_cotizador;
        $values[8] = date("Y-m-d H:i:s");
        $query = CustomString::concatenate(create_usuario, $values);
        return User::run_query($query);
    }

    public static function update($user_id, $user_name, $firstname, $lastname, $user_password_hash, $user_email, $is_admin, $is_aprobador, $is_cotizador) {
        $values = array();
        $values[0] = $user_name;
        $values[1] = $firstname;
        $values[2] = $lastname;
//        $values[3] = password_hash($user_password_hash, PASSWORD_DEFAULT);
        $values[3] = $user_email;
        $values[4] = $is_admin;
        $values[5] = $is_aprobador;
        $values[6] = $is_cotizador;
        $values[7] = $user_id;
        $query = CustomString::concatenate(update_usuario, $values);
        echo $query;
        return User::run_query($query);
    }

    public static function update_password($user_id, $user_password_hash) {
        $values = array();
        $values[0] = password_hash($user_password_hash, PASSWORD_DEFAULT);;
        $values[1] = $user_id;
        $query = CustomString::concatenate(update_password, $values);
        echo $query;
        return User::run_query($query);
    }

    public static function get_usuario_as_row_by_username($username) {
        $values = array();
        $values[0] = $username;
        $query = CustomString::concatenate(get_user_by_username, $values);
        $user= User::run_select($query);
        if (sizeof($user) >= 1){
            return $user;
        }
        else {
            return "No se encontro el usuario con username  ".$username;
        }
    }


}
?>