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

$conn=null;

$ch=null;
$ch= curl_init();
curl_setopt($ch,CURLOPT_URL,"http://192.168.1.68:8888/besa/entregables.php");
curl_setopt($ch,CURLOPT_POST,TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS,"flag=$valor");
curl_exec($ch);
curl_close($ch);
?>
