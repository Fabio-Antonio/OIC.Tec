<?php
  require_once("conexion.php");


   $query=$conn->prepare("SELECT id_contrato,numero_contrato FROM contrato");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag[]=$row;
}
}
 $query=$conn->prepare("SELECT id_motivo,motivo FROM motivos_inconformidad");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag2[]=$row;
}
}


$valor=serialize($flag);
$valor2=serialize($flag2);
header("Location:motivo_inconfor.php?flag=$valor&flag2=$valor2");


$conn=null;
?>
