<?php
    require_once("conexion.php");

       $consolidador = $_POST["consolidador"];  
       $proveedor = $_POST["proveedor"];
       $licitacion = $_POST["licitacion"];
       $monto = $_POST["monto"];
 $statement = $conn->prepare("INSERT INTO consolidado (id_requirente,id_proveedor,licitacion,monto_total)VALUES(?,?,?,?)");
$statement->bindValue(1, $consolidador);
$statement->bindValue(2, $proveedor);
$statement->bindParam(3, $licitacion);
$statement->bindValue(4, $monto);


$statement->execute();      


 $conn = null;


?>


