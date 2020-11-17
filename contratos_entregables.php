<?php
require_once("conexion.php");

$numero_contrato=$_GET["numero_contrato"];
$statement = $conn->prepare("SELECT numero_contrato,fecha_entrega,nombre_entregable,cantidad_entregable,direccion_entregable,descripcion FROM `entregables`AS e INNER JOIN contrato AS c ON c.id_contrato= e.id_contrato WHERE c.numero_contrato =?");

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
