<?php
 require_once("conexion.php");

$statement = $conn->prepare('
SELECT c.numero_contrato, u.unidad, f.inicio_vigencia, f.fin_vigencia FROM contrato AS c INNER JOIN unidad_requirente AS u ON c.id_unidad_requirente = u.id_requirente INNER JOIN contrato_fechas AS f ON c.id_contrato = f.id_contrato');
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $flag[]=$row;

    }
    if($flag==null){
        echo "<script>alert('No se encontraron resultados')
window.location.replace('consulta_vigencia.php');</script>";
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