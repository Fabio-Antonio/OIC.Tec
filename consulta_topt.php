<?php
  require_once("conexion.php");


   $query=$conn->prepare("SELECT  numero_contrato, unidad, nombre, monto_max  FROM contrato AS c INNER JOIN unidad_requirente AS ur ON c.id_unidad_requirente = ur.id_requirente INNER JOIN proveedor_adjudicado AS pa ON c.id_proveedor_adjudicado = pa.id_proveedor ORDER BY monto_max DESC LIMIT 10;");

 $query->execute();

if($query){
while($row=$query->fetch(PDO::FETCH_ASSOC)){
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
