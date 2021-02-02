<?php
require_once('../modelo/login.php');

$login = new login();

if(isset($_POST['nombre'],$_POST['password'])){
    $nombre=$_POST['nombre'];
    $password=$_POST['password'];

    if(method_exists($login,'iniciar')){

      $login::{'iniciar'}($nombre,$password);

    }

}else{

    if(method_exists($login,'cerrar')){

        $login::{'cerrar'}();
    }

}

?>