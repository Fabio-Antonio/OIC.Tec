<?php
require_once("conexion.php");

$numero_contrato=$_GET["numero_contrato"];
$statement = $conn->prepare("SELECT numero_contrato,fecha_entrega,fecha_maxima,nombre_entregable,cantidad_entregable,direccion_entregable,descripcion,((porcentaje*precio_unitario)*cantidad_entregable)*(DATEDIFF(e.fecha_entrega,em.fecha_maxima)) AS penalizacion,porcentaje,precio_unitario, (DATEDIFF(e.fecha_entrega,em.fecha_maxima)) AS dias,url_constancia FROM entregables AS e INNER JOIN contrato AS c ON c.id_contrato= e.id_contrato INNER JOIN entregas_m AS em ON c.id_contrato = em.id_contrato INNER JOIN recepcion AS r ON r.id_entregable = e.id_entregable WHERE em.id_entrega = e.id_intrega_m AND c.numero_contrato = ?");
$statement->bindParam(1,$numero_contrato);
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
