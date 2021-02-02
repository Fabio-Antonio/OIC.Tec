<?php
require_once('../modelo/consulta_contrato3.php');

$consultas = new consultas(); 

if(isset($_GET['metodo'])){
$metodo = $_GET['metodo'];

    if($metodo=="a"){
    if(method_exists($consultas,'consulta3')){

        $consultas::{'consulta3'}();
  
      }
    } else {
        if(method_exists($consultas,'consulta_requirente')){
    
            $consultas::{'consulta_requirente'}();
      
          }
        }
}

?>