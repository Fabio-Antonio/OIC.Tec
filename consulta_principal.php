<?php
  require_once("conexion.php");

$array=null;
 $query=$conn->prepare("SELECT id_unidad_compradora,nombre_unidad_compradora FROM unidad_compradora");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag[]=$row;
}
$valor=serialize($flag);

}


$query=$conn->prepare("SELECT id_consolidado,licitacion FROM consolidado");
 $query->execute();
 $flag2=[];
if($query){
while($row=$query->fetch()){
$flag2[]=$row;
}
$valor2=serialize($flag2);
}

$query=$conn->prepare("SELECT numero_contrato FROM contrato");
 $query->execute();
if($query){
while($row=$query->fetch()){
$flag3[]=$row;
}
$valor3=serialize($flag3);



}

if(!$flag3==null){
foreach ($flag3 as $key => $val) {
$array[]=$val["numero_contrato"];
}
}

 
$query=$conn->prepare("SELECT id, clave, nombre FROM partida_presupuesto");

$query->execute();
if($query){
while($row=$query->fetch()){
$flag4[]=$row;
}

}




?>
