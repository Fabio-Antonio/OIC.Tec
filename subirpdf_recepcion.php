<?php

require_once('conexion.php');
$directorio = 'uploads/recepcion/';

$subir_archivo = $directorio.basename($_FILES['uploadedfile']['name']);


 
 $entrega = $_POST['select-entregables-recepcion']; 


function comprobar($entrega,$conn){
  $dato="";

  $sql =$conn->prepare("SELECT id_entregable FROM recepcion WHERE id_entregable = ?");
  $sql->bindValue(1, $entrega);
  $sql->execute();

  if($sql){
    while($row=$sql->fetch()){
      $dato=$row;
      }
  }else{
    return false;
  }

  if($dato == ""){
    return true;
  }else{
    return false;
  }


}

 if(comprobar($entrega,$conn)==true){
$sql =$conn->prepare("INSERT INTO recepcion (url_constancia,id_entregable) VALUES(?,?) ");



$sql->bindParam(1, $subir_archivo);
 $sql->bindValue(2, $entrega);
$sql->execute();

if(preg_match("/.pdf$/",$subir_archivo)==0){
  echo json_encode(array("success"=>false));
return;
}

if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $subir_archivo)) {      
   
    
        }else{ 
          echo json_encode(array("success"=>false));
          return;
        }       
     
      echo json_encode(array("success"=>true));
}else{ 
  echo json_encode(array("success"=>false));
}
        
 
$conn = null;
 
?>
