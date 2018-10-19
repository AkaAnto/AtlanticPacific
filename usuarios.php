<?php

ini_set('display_errors', 1);
include_once 'conf/constant.php';
include_once User;

define('new_Usuario_row', '
    <tr id="user_%" class="% ajax_new">
        <td id="username_user_%" ><b>%</b></td>
        <td id="nombre_user_%" >%</td>
        <td id="apellido_user_%">%</td>
        <td id="mail_user_%">%</td>
        <td id="role_user_%">
            <b>%</b>
        </td>
        <td>
        <span class="">
            <a href="#" data-id="user_%" class="btn btn-default" title="editar usuario" data-toggle="modal" data-target="#">
                <i class="glyphicon glyphicon-edit"></i>
            </a>
        </span>
        </td>
    </tr>
');

$show_list = $_SERVER['REQUEST_METHOD'] === 'GET';
$create = $_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['user_id']);
$edit= $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id']);


// Show list
if ($show_list){
    $is_authenticated = User::verify() && User::is_admin();
    if ($is_authenticated){
        $smarty->assign('auth', User::getAuth());
        $smarty->assign('users', User::get_list());
        $smarty->display(Template_Dir.'/admin/usuarios.tpl');
        
    }
    else{
        Login::navigate('index');
    }
}

// Add new Usuario
if ($create){
    $is_authenticated = User::verify() && User::is_admin();
    if ($is_authenticated){

        $user_name = $_POST['username'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $user_password_hash = $_POST['password'];
        $user_email = $_POST['email'];
        $is_aprobador  = $_POST['role'][0];
        $is_cotizador  = $_POST['role'][1];
        $is_admin = $_POST['role'][2];

        $role_name = ['100'=> 'Aprobador', '010' =>'Cotizador', '001' =>'Administrador'];

        $insert_result = User::create($user_name, $firstname, $lastname,$user_password_hash, $user_email, $is_admin, $is_aprobador, $is_cotizador);
        if ($insert_result == 1 ){
            $new_usuario = User::get_usuario_as_row_by_username($user_name)[0];
            $values = array();
            $values[0] = $new_usuario['user_id'];
            $values[1] = $new_usuario['firstname'];
            $values[2] = $new_usuario['user_id'];
            $values[3] = $new_usuario ['user_name'];
            $values[4] = $new_usuario['user_id'];
            $values[5] = $new_usuario ['firstname'];
            $values[6] = $new_usuario['user_id'];
            $values[7] = $new_usuario ['lastname'];
            $values[8] = $new_usuario['user_id'];
            $values[9] = $new_usuario ['user_email'];
            $values[10] = $new_usuario['user_id'];
            $values[11] = $role_name [$_POST['role']];
            $values[12] = $new_usuario['user_id'];
            $response = CustomString::concatenate(new_Usuario_row, $values);
            echo $response;
            
        }
        else{
           echo '<div class="alert alert-danger" role="alert">Ocurrió un problema al crear el nuevo Usuario</div> ';
        }

    }
    else{
        Login::navigate('index');
    }
}


// Edit Usuario
if ($edit){
    $is_authenticated = User::verify() && User::is_admin();
    if ($is_authenticated){
        $user_id = $_POST['user_id'];
        $user_name = $_POST['username'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $user_password_hash = $_POST['password'];
        $user_email = $_POST['email'];
        $is_aprobador  = $_POST['role'][0];
        $is_cotizador  = $_POST['role'][1];
        $is_admin = $_POST['role'][2];

        $role_name = ['100'=> 'Aprobador', '010' =>'Cotizador', '001' =>'Administrador'];

        $insert_result = User::update($user_id, $user_name, $firstname, $lastname,$user_password_hash, $user_email, $is_admin, $is_aprobador, $is_cotizador);
        if ($user_password_hash !=''){
            $update_password = User::update_password($user_id, $user_password_hash);
        }
        if ($insert_result == 1 ){
            $new_usuario = User::get_usuario_as_row_by_username($user_name)[0];
            $values = array();
            $values[0] = $new_usuario['user_id'];
            $values[1] = $new_usuario['firstname'];
            $values[2] = $new_usuario['user_id'];
            $values[3] = $new_usuario ['user_name'];
            $values[4] = $new_usuario['user_id'];
            $values[5] = $new_usuario ['firstname'];
            $values[6] = $new_usuario['user_id'];
            $values[7] = $new_usuario ['lastname'];
            $values[8] = $new_usuario['user_id'];
            $values[9] = $new_usuario ['user_email'];
            $values[10] = $new_usuario['user_id'];
            $values[11] = $role_name [$_POST['role']];
            $values[12] = $new_usuario['user_id'];
            $response = CustomString::concatenate(new_Usuario_row, $values);
            echo $response;

        }
        else{
            echo '<div class="alert alert-danger" role="alert">Ocurrió un problema al crear el nuevo Usuario</div> ';
        }
    }
    else{
        Login::navigate('index');
    }
}

