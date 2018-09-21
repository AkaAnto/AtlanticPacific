<?php
session_start();
include_once 'conf/constant.php';
include_once Lib_Database;
include_once Lib_String;
define ("login", "SELECT user_id, user_name, user_email, user_password_hash  FROM users WHERE user_name = % OR user_email = % ");


class Login extends DataBase {

    public static function perform($username, $password){
        $values = array();
        $values[0] = "'".$username."'";
        $values[1] = "'".$username."'";
        $query = CustomString::concatenate(login, $values);
        $user = Login::run_select($query);
        if (sizeof($user) == 1){
            $user = $user[0];
            if (password_verify($password, $user['user_password_hash'])) {
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['user_name'] = $user['user_name'];
                $_SESSION['user_email'] = $user['user_email'];
                $_SESSION['user_login_status'] = 1;
                $_SESSION['is_staff'] = false;
                $_SESSION['is_admin'] =false;
                return 'true';

            } else {
                return "Usuario y/o contraseña no coinciden.";
            }
        }
        return 'false';
    }

    public static function verify(){
        return (isset($_SESSION['user_id']) && ($_SESSION['user_login_status']==1));
    }

    public static function log_out(){
        $_SESSION = array();
        session_destroy();
    }

    public static function navigate($location){
        header("location: ".$location.".php");
    }


}