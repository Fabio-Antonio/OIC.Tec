<?php
require_once("conexion.php");
$consolidador=$_GET["consolidador"];
$proveedor=$_GET["proveedor"];

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

$query=$conn->prepare("SELECT unidad,licitacion,maximo,minimo,monto From agregados AS ag INNER JOIN unidad_requirente as ur ON ag.id_requierente = ur.id_requirente INNER JOIN consolidado AS co ON co.id_consolidado = ag.id_consolidado WHERE ag.id_consolidado = ?");
$query->bindValue(1, $dato);
$query->execute();

if($query){
while($row=$query->fetch(PDO::FETCH_ASSOC)){
$flag[]=$row;
}
}

$results = array(
"sEcho" => 1,
"iTotalRecords" => count($flag),
"iTotalDisplayRecords" => count($flag),
"aaData"=>$flag);
echo json_encode($results);


?>
