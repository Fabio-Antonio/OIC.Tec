<?php
    require_once("conexion.php");

    $nombre_unidad_compradora = $_POST["nuc"];

     $numero_unidad = $_POST["un"];



     function comprovar($numero_unidad,$conn){
        $dato="";
      $statement = $conn->prepare("SELECT numero_unidad FROM unidad_compradora WHERE numero_unidad = ? ");
      $statement->bindValue(1, $numero_unidad);
      $statement->execute();

      if($statement)
      {
      while($row=$statement->fetch())
              {
      $dato=$row['numero_unidad'];        
      
      }
      if($dato==""){
       return true;
      }else{
        return false;
      }

      }
       return false;
      }

if(comprovar($numero_unidad,$conn)==true){
$statement = $conn->prepare("INSERT INTO unidad_compradora (nombre_unidad_compradora,numero_unidad)VALUES(?,?)");
$statement->bindParam(1, $nombre_unidad_compradora);
$statement->bindParam(2, $numero_unidad);
$statement->execute();
   
 if($statement){
    echo json_encode(array("success"=>true));
}else{
    echo json_encode(array("success"=>false));

}
}else{
    echo json_encode(array("success"=>false));
}
 $conn=null;       
?>


