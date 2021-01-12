<?php
require_once("conexion.php");

$clave=$_GET["clave"];
$statement = $conn->prepare("SELECT numero_contrato,objeto_contratacion,monto_max,nombre FROM contrato AS c INNER JOIN partida_presupuesto AS pp ON c.id_partida = pp.id WHERE pp.clave = ?");

$statement->bindParam(1,$clave);
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