<?php
require_once("conexion.php");

$clav=$_GET["clavest"];
 $statement = $conn->prepare("SELECT numero_contrato, monto_max, procedimientos FROM partidas_presupuestales AS pp INNER JOIN contrato AS c ON pp.id_contrato
 = c.id_contrato INNER JOIN procedimientos_contratacion AS pc ON c.id_procedimiento_contratacion = pc.id_procedimiento_contratacion INNER JOIN partida_presupuesto
 AS ppr ON pp.id_presupuesto = ppr.id WHERE pc.id_procedimiento_contratacion >= 4 AND pc.id_procedimiento_contratacion <= 7 AND ppr.clave = ?");

$statement->bindParam(1,$clav);
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $flag[]=$row;
    }
    if($flag==null){
        echo "<script>alert('No se encontraron resultados2')
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
