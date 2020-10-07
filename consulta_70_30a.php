<?php
require_once("conexion.php");

$unidada=$_GET["unidada"];
$id_partida=$_GET["id_partida"];
$statement = $conn->prepare("SELECT DISTINCT  numero_contrato, monto_max, procedimientos FROM partidas_presupuestales AS pp
INNER JOIN unidad_compradora AS uc ON pp.id_unidad = uc.id_unidad_compradora
INNER JOIN contrato AS c ON c.id_unidad_compradora = uc.id_unidad_compradora
INNER JOIN procedimientos_contratacion AS pc ON c.id_procedimiento_contratacion = pc.id_procedimiento_contratacion
INNER JOIN partida_presupuesto AS ppr ON pp.id_presupuesto = ppr.id
WHERE pc.setenta_treinta = 70  AND uc.nombre_unidad_compradora = ? AND c.id_partida = ? ;");

$statement->bindParam(1,$unidada);
$statement->bindValue(2,$id_partida);
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $flag[]=$row;
    }
    if($flag==null){
        echo "<script>alert('No se encontraron resultados')
window.location.replace('principal.php');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal.php');</script>";
}

$results = array(
"sEcho" => 1,
"iTotalRecords" => count($flag),
"iTotalDisplayRecords" => count($flag),
"aaData"=>$flag);
echo json_encode($results);



?>
