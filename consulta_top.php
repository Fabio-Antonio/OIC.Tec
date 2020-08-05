<?php
  require_once("conexion.php");


   $query=$conn->prepare("SELECT  numero_contrato, unidad, nombre, monto_max  FROM contrato AS c INNER JOIN unidad_requirente AS ur ON c.id_unidad_requirente = ur.id_requirente INNER JOIN proveedor_adjudicado AS pa ON c.id_proveedor_adjudicado = pa.id_proveedor ORDER BY monto_max DESC LIMIT 10;");

 $query->execute();
if($query){
while($row=$query->fetch(PDO::FETCH_ASSOC)){
$flag[]=$row;
}
$valor=serialize($flag);

}

$conn=null;
$ch=null;
$ch= curl_init();
curl_setopt($ch,CURLOPT_URL,"http://192.168.1.68:8888/besa/top_por_contratos.php");
curl_setopt($ch,CURLOPT_POST,TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS,"flag=$valor");
curl_exec($ch);
curl_close($ch);

?>
