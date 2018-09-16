<?php

$production = false;

if ($production){  // Site is on production server
    if (@include("conf/db_server.php")){// Trying to load configuration from root directory
        include_once "conf/db_server.php";
    }
    else{  // Trying to load configuration from section directory
        include_once "../conf/db_server.php";
    }
}
else{
    if (@include("conf/db_local.php")){// Trying to load configuration from root directory
        include_once "conf/db_local.php";
    }
    else{  // Trying to load configuration from section directory
        include_once "../conf/db_local.php";
    }
}

abstract class DataBase {
    
    
    private static function mysql_connection(){    
        $connection = mysql_connect(server_mysql,mysql_user,mysql_pass,mysql_db);     
        mysql_select_db(mysql_db);
        return $connection;
    }
     
    public static function execute_mysql_query($query){  
        $connection= DataBase::mysql_connection();
        $execute = mysql_query($query) or die (mysql_error());
        mysql_close($connection);
        return $execute;
    }
    
    public static function execute_mysql_select($query){  
        $connection= DataBase::mysql_connection();
        $execute = mysql_query($query) or die (mysql_error());
        $values = array();
        $i = 0;
        while ($result = mysql_fetch_array($execute)){
            $values[$i] = $result;
            $i++;
	}
        mysql_close($connection);
        return $values;
    }
    
    public static function execute_select($query,$oracle = 0){
        if ($oracle == 0){
            return DataBase::execute_mysql_select($query); 
        }
         else {
            return null;
        }
    }
    
    public static function execute_query($query,$oracle = 0){
        if ($oracle == 0){
            return DataBase::execute_mysql_query($query); 
        }
         else {
            return null;
        }
    }
    
    
}
