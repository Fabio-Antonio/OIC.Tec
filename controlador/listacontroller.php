<?php
require_once('../modelo/entregas_select.php');

$listar = new listar();

if(isset($_POST['numero_contrato'])){
    
    if(method_exists($listar,'lista_entregables')){

      $listar::{'lista_entregables'}();

    }
    
}else if(isset($_POST['procedimiento'])){
    

    if(method_exists($listar,'lista_articulos')){

      $listar::{'lista_articulos'}();

    }
    
}else if(isset($_POST['contrato'])){
    

    if(method_exists($listar,'lista_entregas')){

      $listar::{'lista_entregas'}();

    }
    
}

?>