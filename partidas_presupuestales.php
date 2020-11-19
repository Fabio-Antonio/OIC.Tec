<?php
    require_once("conexion.php");
     
    $nombre_unidad_compradora = $_POST["nombre_unidad_compradora"];
   		
     $clave_partida = $_POST["clave_partida"];


     function comprovar($nombre_unidad_compradora,$clave_partida,$conn){
        $dato="";
        $statement = $conn->prepare("SELECT id_partida FROM `partidas_presupuestales` WHERE id_unidad = ? AND id_presupuesto = ?");
      $statement->bindValue(1, $nombre_unidad_compradora);
      $statement->bindValue(2, $clave_partida);

      $statement->execute();

      if($statement)
      {
      while($row=$statement->fetch())
              {
      $dato=$row['id_partida'];        
      
      }
      if($dato==""){
       return true;
      }else{
        return false;
      }

      }
       return false;
      }
	 
if(comprovar($nombre_unidad_compradora,$clave_partida,$conn)==true){
$statement = $conn->prepare("INSERT INTO partidas_presupuestales (id_unidad,id_presupuesto)VALUES(?,?)");
$statement->bindValue(1, $nombre_unidad_compradora);
$statement->bindValue(2, $clave_partida);
$statement->execute();
   
 $conn=null;

 echo json_encode(array("success"=>true));
}else{

 echo json_encode(array("success"=>false));
}


?>
