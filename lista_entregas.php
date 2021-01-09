<?php

require_once("conexion.php");
require_once("url.php");
$contrato=$_POST["contrato"];

$query=$conn->prepare("SELECT id_entregable,nombre_entregable,fecha_entrega FROM entregables AS e INNER JOIN contrato AS c ON e.id_contrato = c.id_contrato WHERE c.numero_contrato= ?");
$query->bindValue(1,$contrato);
$query->execute();
if($query){
while($row=$query->fetch()){
$flag7[]=$row;
}
$valor7=serialize($flag7);

if($flag7==null){

      return;
       }

}else{

}
      
foreach ($flag7 as $key => $val) {

echo "<option value=".$val['id_entregable'].'>'. $val['nombre_entregable'].' '.$val["fecha_entrega"].'</option>';
        
    }
?>