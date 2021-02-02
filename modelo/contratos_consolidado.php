<?php
require_once("conexion.php");

$id_consolidado=$_GET["id_consolidado"];
$statement = $conn->prepare("SELECT nombre_unidad_compradora,procedimientos,unidad,pro.nombre AS nombre2,pa.nombre,licitacion,numero_contrato,contrato_compranet,objeto_contratacion,monto_max FROM `contrato`AS c INNER JOIN unidad_compradora AS uc ON c.id_unidad_compradora = uc.id_unidad_compradora INNER JOIN procedimientos_contratacion AS pc ON c.id_procedimiento_contratacion = pc.id_procedimiento_contratacion INNER JOIN unidad_requirente AS ur ON c.id_unidad_requirente = ur.id_requirente INNER JOIN proveedor_adjudicado AS pro ON c.id_proveedor_adjudicado= pro.id_proveedor INNER JOIN partida_presupuesto AS pa ON c.id_partida= pa.id
INNER JOIN consolidado AS con ON c.id_consolidado = con.id_consolidado WHERE con.id_consolidado= ?");

$statement->bindParam(1,$id_consolidado);
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












