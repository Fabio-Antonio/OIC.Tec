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

$query=$conn->prepare("SELECT id_proveedor,nombre FROM proveedor_adjudicado");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag6[]=$row;
}
$valor6=serialize($flag6);

}



$query=$conn->prepare("SELECT id_consolidado,procedimiento FROM consolidado");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag8[]=$row;
}
$valor8=serialize($flag8);

}



//header("Location:contrato.php?flag=$valor&&flag2=$valor2&&flag3=$valor3&&flag4=$valor4&&flag5=$valor5&&flag6=$valor6&&flag8=$valor8");


$conn=null;

$ch = curl_init();
 
// definimos la URL a la que hacemos la petición
curl_setopt($ch, CURLOPT_URL,"http://192.168.1.68:8888/besa/contrato.php");
// indicamos el tipo de petición: POST
curl_setopt($ch, CURLOPT_POST, TRUE);
// definimos cada uno de los parámetros
curl_setopt($ch, CURLOPT_POSTFIELDS, "flag=$valor&flag2=$valor2&flag3=$valor3&flag4=$valor4&flag5=$valor5&flag6=$valor6&flag8=$valor8");
 

 curl_exec ($ch);
 $error= curl_error($ch);
 echo $error;
// cerramos la sesión cURL
curl_close ($ch);



?>
