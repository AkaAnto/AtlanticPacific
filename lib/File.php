<?php

abstract class File {
   
    static function create_file($route, $name, $extention, $content){       
        $file=fopen($route.'/'.$name.'.'.$extention,"a+"); 
	fputs($file,$content);
	fclose($file);
        return true;
    }
    
    static function create_directory($dir_name, $dir_route, $dir_perms){
      if (!file_exists($dir_route.$dir_name)) {
		  $oldmask = umask(0);
          mkdir($dir_route.$dir_name, 0777, true);
          umask($oldmask); 
      }
    }   
    
    static function delete_file($file){       
        unlink($file);
        return true;
    }
    
    static function delete_directory($dirPath){       
        if (! is_dir($dirPath)) {
            //throw new InvalidArgumentException("$dirPath debe ser un directorio");
        }
        if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
            $dirPath .= '/';
        }
        $files = glob($dirPath . '*', GLOB_MARK);
        foreach ($files as $file) {
            if (is_dir($file)) {
                self::delete_directory($file);
            } else {
                unlink($file);
            }
        }
        rmdir($dirPath);

    }
    
    static function list_files_in_directory($dir_name, $dir_route){
      return scandir($dir_route.$dir_name);
    }   
    
    
}

?>
