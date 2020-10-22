<?php
require_once("conexion.php");

$consolidador=$_POST["consolidador"];
$proveedor=$_POST["proveedor"];
$requirente=$_POST["requirente"];
$minimo=$_POST["minimo"];
$maximo=$_POST["maximo"];
$monto=$_POST["monto"];

$query=$conn->prepare("SELECT id_consolidado FROM consolidado  WHERE id_requirente=? AND id_proveedor=?");
$query->bindValue(1, $consolidador);
$query->bindValue(2, $proveedor);
$query->execute();

if($query)
{
while($row=$query->fetch())
        {
$dato=$row['id_consolidado'];

}

}

$statement = $conn->prepare("INSERT INTO agregados (id_consolidado,id_requierente,minimo,maximo,monto)VALUES(?,?,?,?,?)");
$statement->bindValue(1, $dato);
$statement->bindValue(2, $requirente);
$statement->bindValue(3, $minimo);
$statement->bindValue(4,$maximo);
$statement->bindValue(5,$monto);

$statement->execute();
 $conn=null;      


?>