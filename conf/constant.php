<?php

$local = [
    
    //Smarty
    "Smarty_Include" => "view/Smarty/libs/Smarty.class.php",
    "Smarty_Template_Dir" => "view/templates/",
    "Smarty_Template_Dir_Comp" => "view/templates_c/",
    "Template_Dir" => "view/templates/",
    "Template_Dir_admin" => "view/templates/admin/",
    "Smarty_Conf" => "conf/Smarty_Conf.php",
    
    //Static
    "css" => "static/css/",
    "js" => "static/js/",
    "img" => "static/img/",

    //Lib
    "Lib_Database" => "lib/Database.php",
    "Lib_String" => "lib/CustomString.php",
    "Lib_Email" => "lib/Email.php",
    "Lib_File" => "lib/File.php",

    //Model
    "Login" => "model/Login.php",
    "Barco" => "model/Barco.php",

];

function define_includes($environment) {
    foreach ($environment as $key => $value) {
        if (is_array($value)) {
            define_includes($value);
        }
        else {
            define($key, $value);
        }
    }
}

define_includes($local);


include_once Smarty_Include;

$smarty = new Smarty;
$smarty->template_dir = Smarty_Template_Dir;
$smarty->compile_dir = Smarty_Template_Dir_Comp;
$smarty->assign("css",css);
$smarty->assign("js",js);
$smarty->assign("img",img);
$smarty->addTemplateDir(Smarty_Template_Dir.'/admin/');