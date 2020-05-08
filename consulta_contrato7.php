<?php
  require_once("conexion.php");


   $query=$conn->prepare("SELECT id_unidad_compradora,nombre_unidad_compradora FROM unidad_compradora");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag[]=$row;
}
$valor=serialize($flag);

}

 $query=$conn->prepare("SELECT id_procedimiento_contratacion,procedimientos FROM procedimientos_contratacion");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag2[]=$row;
}
$valor2=serialize($flag2);

}

$query=$conn->prepare("SELECT id_requirente,unidad FROM unidad_requirente");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag3[]=$row;
}
$valor3=serialize($flag3);

}

$query=$conn->prepare("SELECT id_administrador,nombre FROM administrador");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag4[]=$row;
}
$valor4=serialize($flag4);

}


$query=$conn->prepare("SELECT id_monto_no_iva,total FROM monto_no_iva");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag5[]=$row;
}
$valor5=serialize($flag5);

}

$query=$conn->prepare("SELECT id_proveedor,proveedor FROM proveedor_adjudicado");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag6[]=$row;
}
$valor6=serialize($flag6);

}


$query=$conn->prepare("SELECT id__fecha,descripcion FROM contrato_fechas");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag7[]=$row;
}
$valor7=serialize($flag7);

}

$query=$conn->prepare("SELECT id_consolidado,procedimiento FROM consolidado");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag2[]=$row;
}
$valor2=serialize($flag2);

}




header("Location:contrato.php?flag=$valor&&flag2=$valor2&&flag3=$valor3&&flag4=$valor4&&flag5=$valor5&&flag6=valor6");


$conn=null;
?>
