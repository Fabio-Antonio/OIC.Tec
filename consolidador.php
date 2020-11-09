<?php
    require_once("conexion.php");

       $consolidador = $_POST["consolidador"];  
       $descripcion = $_POST["descripcion"];
       $licitacion = $_POST["licitacion"];
       $monto = $_POST["monto"];
 $statement = $conn->prepare("INSERT INTO consolidado (id_requirente,descripcion,licitacion,monto_total)VALUES(?,?,?,?)");
$statement->bindValue(1, $consolidador);
$statement->bindParam(2, $descripcion);
$statement->bindParam(3, $licitacion);
$statement->bindValue(4, $monto);


$statement->execute();      


 $conn = null;


?>


