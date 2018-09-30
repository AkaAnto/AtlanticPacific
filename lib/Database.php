<?php



$production = false;

if ($production){  // Site is on production server
    define('DB_HOST', 'localhost');
    define('DB_USER', 'new_ats_sa');
    define('DB_PASS', 'Pacific*1987');
    define('DB_NAME', 'apspty');
}
else {
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'apspty');
}


abstract class DataBase {
    
    
    private static function mysql_connection(){
        $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        return $connection;
    }
     
    public static function run_query($query_string){
        $connection= DataBase::mysql_connection();
        $result_set = $connection->query($query_string);
        return $result_set;
    }
    
    public static function run_select($query){
        $result_set= DataBase::run_query($query);
        $values = array();
        $i = 0;
        while ($result = mysqli_fetch_array($result_set)){
            $values[$i] = $result;
            $i++;
	    }
        return $values;
    }

    
    
}
