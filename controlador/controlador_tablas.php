<?php
require_once('../modelo/asignaciones_tabla.php');

$tablas = new tablas();

if(isset($_GET['metodo'])){
  $metodo= $_GET['metodo'];
    if($metodo=="a"){
        if(method_exists($tablas,'asignaciones')){

            $tablas::{'asignaciones'}();
      
        }  
    }
}if(isset($_GET['metodo'])){
    $metodo= $_GET['metodo'];
      if($metodo=="b"){
          if(method_exists($tablas,'procedimientos')){
  
              $tablas::{'procedimientos'}();
        
          }  
      }
  }if(isset($_GET['metodo'])){
    $metodo= $_GET['metodo'];
      if($metodo=="c"){
          if(method_exists($tablas,'notificacion')){
  
              $tablas::{'notificacion'}();
        
          }  
      }
  }if(isset($_GET['metodo'])){
    $metodo= $_GET['metodo'];
      if($metodo=="d"){
          if(method_exists($tablas,'formalizacion')){
  
              $tablas::{'formalizacion'}();
        
          }  
      }
  }if(isset($_GET['metodo'])){
    $metodo= $_GET['metodo'];
      if($metodo=="e"){
          if(method_exists($tablas,'informet')){
  
              $tablas::{'informet'}();
        
          }  
      }
  }if(isset($_GET['metodo'])){
    $metodo= $_GET['metodo'];
      if($metodo=="f"){
          if(method_exists($tablas,'informea')){
  
              $tablas::{'informea'}();
        
          }  
      }
  }if(isset($_GET['metodo'])){
    $metodo= $_GET['metodo'];
      if($metodo=="g"){
          if(method_exists($tablas,'top_contratos')){
  
              $tablas::{'top_contratos'}();
        
          }  
      }
  }if(isset($_GET['metodo'])){
    $metodo= $_GET['metodo'];
      if($metodo=="h"){
          if(method_exists($tablas,'entregables')){
  
              $tablas::{'entregables'}();
        
          }  
      }
  }if(isset($_GET['metodo'])){
    $metodo= $_GET['metodo'];
      if($metodo=="i"){
          if(method_exists($tablas,'tabla_proveedor')){
  
              $tablas::{'tabla_proveedor'}();
        
          }  
      }
  }if(isset($_GET['metodo'])){
    $metodo= $_GET['metodo'];
      if($metodo=="j"){
          if(method_exists($tablas,'tabla_partidas')){
  
              $tablas::{'tabla_partidas'}();
        
          }  
      }
  }
  


?>