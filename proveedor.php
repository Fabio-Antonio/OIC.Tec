<?php
    require_once("conexion.php");

       $nombre = $_POST["nombre"];  
       $rfc = $_POST["rfc"];
   
 $statement = $conn->prepare("INSERT INTO proveedor_adjudicado (nombre,rfc)VALUES(?,?)");
$statement->bindParam(1, $nombre);
$statement->bindParam(2, $rfc);
$statement->execute();      

  

 if($statement){
echo "listo";
}
 $conn = null;


?>


