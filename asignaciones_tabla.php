<?php
require_once("conexion.php");

$statement = $conn->prepare("SELECT nombre_unidad_compradora,numero_unidad,nombre,presupuesto FROM partidas_presupuestales AS pp INNER
JOIN unidad_compradora AS uc ON pp.id_unidad = uc.id_unidad_compradora INNER JOIN partida_presupuesto AS pap ON pp.id_presupuesto= pap.id");

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
