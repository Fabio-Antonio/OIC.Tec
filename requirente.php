<?php
    require_once("conexion.php");

    $unidad = $_POST["unidad"];

     $clave_requirente = $_POST["clave_requirente"];
    $statement = $conn->prepare("INSERT INTO unidad_requirente (clave_requirente,unidad)VALUES(?,?)");
$statement->bindParam(1, $clave_requirente);
$statement->bindParam(2, $unidad);
$statement->execute();
   
  
 
 if($statement){
echo "listo";
}
 $conn=null;       
?>


