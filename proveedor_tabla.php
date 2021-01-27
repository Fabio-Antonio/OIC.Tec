<?php
require_once("conexion.php");

$statement = $conn->prepare("SELECT numero_contrato,contrato_compranet,objeto_contratacion,monto_max,nombre,rfc FROM contrato AS c INNER JOIN proveedor_adjudicado AS pa ON c.id_proveedor_adjudicado = pa.id_proveedor");

$statement->execute();
$flag=[];
if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
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