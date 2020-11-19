<?php

   require_once("conexion.php");
   $presupuesto=$_POST["presupuesto"];
 $clave=$_POST["clave"];
 $partida=$_POST["partida"];
   $presupuesto=str_replace([',','$'],"",$presupuesto);


   function comprovar($clave,$partida,$conn){
    $dato="";
    $statement = $conn->prepare("SELECT id FROM `partida_presupuesto` WHERE clave = ? OR nombre = ?");
  $statement->bindValue(1, $clave);
  $statement->bindValue(2, $partida);

  $statement->execute();

  if($statement)
  {
  while($row=$statement->fetch())
          {
  $dato=$row['id'];        
  
  }
  if($dato==""){
   return true;
  }else{
    return false;
  }

  }
   return false;
  }


if(comprovar($clave,$partida,$conn)==true){
    $statement = $conn->prepare("INSERT INTO partida_presupuesto(clave,nombre,presupuesto)VALUES(?,?,?)");    
    $statement->bindParam(1,$clave);
    $statement->bindParam(2,$partida);
    $statement->bindValue(3,$presupuesto);

$statement->execute();

if($statement){
     
  
}else{

}


 $conn=null;

 echo json_encode(array("success"=>true));
}else{
  echo json_encode(array("success"=>false));
}


?>





