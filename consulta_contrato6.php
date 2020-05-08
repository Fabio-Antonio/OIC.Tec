<?php
  require_once("conexion.php");


   $query=$conn->prepare("SELECT id_contrato,numero_contrato FROM contrato");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag[]=$row;
}
$valor=serialize($flag);

}

 $query=$conn->prepare("SELECT id_requirente,unidad FROM unidad_requirente");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag2[]=$row;
}
$valor2=serialize($flag2);
header("Location:recepcion_terminacion_anticipada.php?flag=$valor&&flag2=$valor2");

}



$conn=null;
?>
