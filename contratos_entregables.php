<?php
require_once("conexion.php");

$numero_contrato=$_GET["numero_contrato"];
$statement = $conn->prepare("SELECT numero_contrato,fecha_entrega,nombre_entregable,cantidad_entregable,direccion_entregable,descripcion,((porcentaje*precio_unitario)*cantidad_entregable)*(DATEDIFF(e.fecha_entrega,em.fecha_maxima)) AS penalizacion,porcentaje,precio_unitario, (DATEDIFF(e.fecha_entrega,em.fecha_maxima)) AS dias,url_constancia FROM entregables AS e INNER JOIN contrato AS c ON c.id_contrato= e.id_contrato INNER JOIN entregas_m AS em ON c.id_contrato = em.id_contrato INNER JOIN recepcion AS r ON r.id_entregable = e.id_entregable WHERE c.numero_contrato = ?");

$statement->bindParam(1,$numero_contrato);
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $flag[]=$row;
    }
    if($flag==null){
        echo "<script>alert('No se encontraron resultados')
window.location.replace('principal2.php');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal2.php');</script>";
}

$results = array(
"sEcho" => 1,
"iTotalRecords" => count($flag),
"iTotalDisplayRecords" => count($flag),
"aaData"=>$flag);
echo json_encode($results);



?>
