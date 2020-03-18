<?php
    require_once("conexion.php");

    $nombre_unidad_compradora = $_POST["nombre_unidad_compradora"];

     $numero_unidad = $_POST["numero_unidad"];
    $statement = $conn->prepare("INSERT INTO unidad_compradora (nombre_unidad_compradora,numero_unidad)VALUES(?,?)");
$statement->bindParam(1, $nombre_unidad_compradora);
$statement->bindParam(2, $numero_unidad);
$statement->execute();
   
  
 
 if($statement){
echo "listo";
}
 $conn=null;       
?>


