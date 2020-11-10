<?php
require_once("conexion.php");

$unidada=$_GET["unidada"];
$statement = $conn->prepare("SELECT numero_contrato, monto_max, procedimientos,nombre FROM contrato AS c INNER JOIN unidad_compradora AS uc ON c.id_unidad_compradora = uc.id_unidad_compradora INNER JOIN partida_presupuesto AS pp ON c.id_partida = pp.id INNER JOIN procedimientos_contratacion AS pc ON c.id_procedimiento_contratacion = pc.id_procedimiento_contratacion WHERE pc.setenta_treinta = 70 AND uc.nombre_unidad_compradora = ?;");

$statement->bindParam(1,$unidada);
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
