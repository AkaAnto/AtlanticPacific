<?php
session_start();
include_once 'conf/constant.php';
include_once Lib_Database;
include_once Lib_String;
define ("login", "SELECT user_name, user_password_hash, is_admin, is_cotizador, is_aprobador  FROM users WHERE user_name = '%'");


class Login extends DataBase {

    public static function perform($username, $password){
        $values = array();
        $values[0] = $username;
        $query = CustomString::concatenate(login, $values);
        $user = Login::run_select($query);
        if (sizeof($user) == 1){
            $user = $user[0];
            if (password_verify($password, $user['user_password_hash'])) {
                $_SESSION['user_id'] = $user['user_name'];
                $_SESSION['user_login_status'] = 1;
                $_SESSION['is_admin'] = $user['is_admin'];
                $_SESSION['is_cotizador'] = $user['is_cotizador'];
                $_SESSION['is_aprobador'] = $user['is_aprobador'];
                return true;

            } else {
                return false;
            }
        }
        return false;
    }

    public static function verify(){
        return (isset($_SESSION['user_id']) && ($_SESSION['user_login_status']==1));
    }

    public function is_admin(){
        return $_SESSION['is_admin'] ==='1';
    }

    public static function log_out(){
        $_SESSION = array();
        session_destroy();
    }

    public static function getAuth()
    {
        return $_SESSION;
    }

    public static function navigate($location){
        header("location: ".$location.".php");
    }


}