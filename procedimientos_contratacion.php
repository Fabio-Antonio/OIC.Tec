<?php
require_once("conexion.php");

$statement = $conn->prepare("SELECT procedimientos,Articulo,setenta_treinta FROM `fundamento_legal` AS fl INNER JOIN procedimientos_contratacion AS pc ON fl.id_procedimientos_contratacion = pc.id_procedimiento_contratacion");

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