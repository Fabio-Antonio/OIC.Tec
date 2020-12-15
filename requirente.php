<?php
    require_once("conexion.php");

    $unidad = $_POST["uni"];

     $clave_requirente = $_POST["claver"];



     function comprovar($clave_requirente,$conn){
        $dato="";
        $statement = $conn->prepare("SELECT clave_requirente FROM unidad_requirente WHERE clave_requirente = ? ");
      $statement->bindValue(1, $clave_requirente);
      $statement->execute();

      if($statement)
      {
      while($row=$statement->fetch())
              {
      $dato=$row['clave_requirente'];        
      
      }
      if($dato==""){
       return true;
      }else{
        return false;
      }

      }
       return false;
      }


if(comprovar($clave_requirente,$conn)==true){
$statement = $conn->prepare("INSERT INTO unidad_requirente (clave_requirente,unidad)VALUES(?,?)");
$statement->bindParam(1, $clave_requirente);
$statement->bindParam(2, $unidad);
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


