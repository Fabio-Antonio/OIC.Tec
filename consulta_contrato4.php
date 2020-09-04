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



 $query=$conn->prepare("SELECT id,clave FROM partida_presupuesto");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag2[]=$row;
}
$valor2=serialize($flag2);

}




$conn=null;
$ch=null;
$ch= curl_init();
curl_setopt($ch,CURLOPT_URL,"http://besa-pruebas.com:8888/besa/partidas_presupuestales_partida.php");
curl_setopt($ch,CURLOPT_POST,TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS,"flag=$valor&flag2=$valor2");
curl_exec($ch);
 $error= curl_error($ch);
 echo $error;

curl_close($ch);

?>
