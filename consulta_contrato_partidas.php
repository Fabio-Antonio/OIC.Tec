<?php
  require_once("conexion.php");
  require_once("url.php");
  $partida=$_GET["id_partida"];

   $query=$conn->prepare("SELECT clave,nombre,presupuesto,sum(c.monto_max) AS total FROM `partida_presupuesto` AS pp INNER JOIN contrato AS c ON pp.id = c.id_partida WHERE pp .id = ?");
   $query->bindParam(1,$partida);  
 $query->execute();
if($query){
while($row=$query->fetch()){
$clave=$row["clave"];
$nombre=$row["nombre"];
$presupuesto=$row["presupuesto"];
$total=$row["total"];

}
 if($clave==null){
        echo "<script>alert('No se han registrado contratos')
window.location.replace('principal2.php');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal2.php');</script>";
}




$conn=null;

$ch=null;
$ch= curl_init();
$url=$path."/besa/consulta_contratos_partidas.php";
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS,"clave=$clave&nombre=$nombre&presupuesto=$presupuesto&total=$total");
curl_setopt($ch, CURLOPT_HEADER, 0);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5');

curl_exec($ch);
$error=curl_error($ch);
curl_close($ch);
if($error){
echo "<script>alert('Los datos no se enviaron correctamente')
window.location.replace('principa2.php');</script>";
        }
