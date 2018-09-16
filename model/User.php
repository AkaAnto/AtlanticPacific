<?php

if (@include("Database.php")){
    include_once 'Database.php';
    include_once 'CustomString.php';
    include_once 'File.php';
}
else{
    include_once '../lib/Database.php';
    include_once '../lib/CustomString.php';
    include_once '../lib/File.php';
}

define ("login", "select * from user where username= % and password = % and is_active=1");
define ("categories", "select * from categoria");
define ("category_name", "select * from categoria where c_id=%");
define ("change_category", "update categoria set c_nombre='%' where c_id=%");
define ("add_category", "insert into  categoria values(NULL,'%',1)");
define ("product_links", "select * from link_productos");
define ("about_us", "select * from nosotros");
define ("products", "select * from producto");
define ("category_products", "select * from producto where fk_categoria=%");
define ("recent_works", "select * from trabajo  ORDER BY id DESC LIMIT 4");
define ("works", "select * from trabajo where categoria_fk=% ORDER BY id DESC");
define ("all_works", "select * from trabajo");
define ("edit_product_links","Update link_productos set fk_categoria=%, Descripcion='%', foto='%' where id=% ");
define ("edit_products","Update producto set fk_categoria=%, Descripcion='%', foto='%', nombre='%' where id=% ");
define ("edit_works","Update trabajo  set categoria_fk=%, descripcion='%', foto='%', nombre='%' where id=% ");
define ("add_product","Insert into  producto (id, nombre, fk_categoria, Descripcion, foto) values (NULL, '%', %, '%','%' ) ");
define ("add_work","Insert into  trabajo (id, nombre,categoria_fk, descripcion, foto) values (NULL, '%', %, '%','%' ) ");
define ("edit_about_us","Update nosotros set n_empresa='%', n_mision='%', n_vision='%'");
define ("change_user_password","Update user set password='%' where username='%'");
define ("change_user_email","Update user set email='%' where username='%'");
define ("index", "<?php ?>");

class User extends DataBase {
    
    private $email;
    private $username;
    private $password;

    public function User( $username, $password, $email, $is_staff, $fullname, $role, $department, $business, $is_admin){
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
       
    }
   
    public static function user_login($username, $password){
        $values = array();
        $values[0] = "'".$username."'";
        $values[1] = "'".$password."'";
        $query = CustomString::concatenate(login, $values);
        $user = User::execute_select($query);
        if (sizeof($user) == 1){
         
            $_SESSION['username'] = $username;
            $_SESSION['is_staff'] = false;
            $_SESSION['is_admin'] =false;
            if ($user[0]['is_staff'] == 1){
                 $_SESSION['is_staff'] = true;
            }
            if ($user[0]['is_admin'] == 1){
                 $_SESSION['is_admin'] = true;
            }
            return true;
        }
        return false;
    }

    public static function change_user_password($username, $password){
        $values = array();
        $values[0] =$password;
        $values[1] =$username;
        $query = Custom_String::concatenate(change_user_password, $values);
        $user = User::execute_query($query);
        if ($user != false){
            return true;
        }
        return false;
    }

    public static function change_user_email($username, $email){
        $values = array();
        $values[0] =$email;
        $values[1] =$username;
        $query = Custom_String::concatenate(change_user_email, $values);
        $user = User::execute_query($query);
        if ($user != false){
            return true;
        }
        return false;
    }

    public static function user_is_logged_in(){
        session_start();
        if (isset($_SESSION['username'])){
            return true;
        }
        return false;
    }
    
    public static function user_logout(){
        session_start();
        session_destroy();
        return true;
    }
    
    public static function slider_files_list(){
        $slider_files = _File::list_files_in_directory('slider/', uploads);
        return $slider_files;
    }
    
    public static function products_categories(){
        $categories = User::execute_select(categories);
        return $categories;
    }
    
    public static function product_links(){
        $product_links = User::execute_select(product_links);
        return $product_links;
    }
   
    public static function edit_product_links($id, $categoria,$descripcion,$foto){
        $values = array();
        $values[0] =$categoria;
        $values[1] =$descripcion;
        $values[2] =$foto;
        $values[3] =$id;
        $query = Custom_String::concatenate(edit_product_links, $values);
        $product = User::execute_query($query);
        if ($product != false){
            return true;
        }
        return false;
    }

    public static function edit_products($id, $categoria,$descripcion,$foto, $nombre){
        $values = array();
        $values[0] =$categoria;
        $values[1] =$descripcion;
        $values[2] =$foto;
        $values[3] =$nombre;
        $values[4] =$id;
        $query = Custom_String::concatenate(edit_products, $values);
        $product = User::execute_query($query);
        if ($product != false){
            return true;
        }
        return false;
    }

    public static function edit_works($id, $categoria,$descripcion,$foto, $nombre){
        $values = array();
        $values[0] =$categoria;
        $values[1] =$descripcion;
        $values[2] =$foto;
        $values[3] =$nombre;
        $values[4] =$id;
        $query = Custom_String::concatenate(edit_works, $values);
        $work = User::execute_query($query);
        if ($work != false){
            return true;
        }
        return false;
    }

    public static function add_product($categoria,$descripcion,$foto, $nombre){
        $values = array();
        $values[1] =$categoria;
        $values[2] =$descripcion;
        $values[3] =$foto;
        $values[0] =$nombre;
        $query = Custom_String::concatenate(add_product, $values);
        $product = User::execute_query($query);
        if ($product != false){
            return true;
        }
        return false;
    }

    public static function add_work($categoria,$descripcion,$foto, $nombre){
        $values = array();
        $values[1] =$categoria;
        $values[2] =$descripcion;
        $values[3] =$foto;
        $values[0] =$nombre;
        $query = Custom_String::concatenate(add_work, $values);
        $work = User::execute_query($query);
        if ($work != false){
            return true;
        }
        return false;
    }

    public static function recent_works(){
        $recent_works = User::execute_select(recent_works);
        return $recent_works;
    }

    public static function works($category){
        $values = array();
        $values[0] =$category;
        $query = Custom_String::concatenate(works, $values);
        $works = User::execute_select($query);
        return $works;
    }

    public static function all_works(){
        $works = User::execute_select(all_works);
        return $works;
    }

    public static function  products(){
        $products = User::execute_select( products);
        return $products;
    }
    
    public static function category_products($category){
        $values = array();
        $values[0] =$category;
        $query = Custom_String::concatenate(category_products, $values);
        $category_products = User::execute_select($query);
        return $category_products;
    }

    public static function about_us(){
        $about_us = User::execute_select(about_us);
        return $about_us;
    }

    public static function edit_about_us($empresa, $mision,$vision){
        $values = array();
        $values[0] =$empresa;
        $values[1] =$mision;
        $values[2] =$vision;
        $query = Custom_String::concatenate(edit_about_us, $values);
        $about = User::execute_query($query);
        if ($about != false){
            return true;
        }
        return false;
    }

    public static function category_name($category_id){
        $values = array();
        $values[0] =$category_id;
        $query = Custom_String::concatenate(category_name, $values);
        $category = User::execute_select($query);
        return $category;
    }
    public static function edit_category($nombre, $id){
        $values = array();
        $values[0] =$nombre;
        $values[1] =$id;
        $query = Custom_String::concatenate(change_category, $values);
        $category = User::execute_query($query);
        if ($category != false){
            return true;
        }
        return false;
    }

    public static function add_category($nombre){
        $values = array();
        $values[0] =$nombre;
        $query = Custom_String::concatenate(add_category, $values);
        $category = User::execute_query($query);
        if ($category != false){
            return true;
        }
        return false;
    }
}
?>