<?php
  require_once("conexion.php");
  require_once("url.php");
  $numero_contrato=$_GET["numero_contrato"];

   $query=$conn->prepare("SELECT numero_contrato,contrato_compranet,objeto_contratacion,nombre,SUM(cantidad) AS cantidad FROM `contrato`AS c INNER JOIN proveedor_adjudicado AS pro ON c.id_proveedor_adjudicado = pro.id_proveedor INNER JOIN entregas_m AS em ON c.id_contrato = em.id_contrato WHERE c.numero_contrato = ?");
   $query->bindParam(1,$numero_contrato);  
 $query->execute();
if($query){
while($row=$query->fetch()){
$numero_contrato=$row["numero_contrato"];
$contrato_compranet=$row["contrato_compranet"];
$objeto_contratacion=$row["objeto_contratacion"];
$nombre=$row["nombre"];
$cantidad=$row["cantidad"];

}
 if($numero_contrato==null){
        echo "<script>alert('No se han registrado contratos')
window.location.replace('../vista/principal2.php');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('../vista/principal2.php');</script>";
}


$query=$conn->prepare("SELECT SUM(cantidad_entregable) AS total FROM entregables AS em INNER JOIN contrato AS c ON em.id_contrato = c.id_contrato WHERE c.numero_contrato = ?");
$query->bindParam(1,$numero_contrato);  
 $query->execute();
if($query){
while($row=$query->fetch()){
    $total=$row["total"];
}
 if($total==null){
        echo "<script>alert('No se han registrado contratos')
window.location.replace('../vista/principal2.php');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('../vista/principal2.php');</script>";
}



$conn=null;

$ch=null;
$ch= curl_init();
$url=$path."/besa/vista/fechas_entregables.php";
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS,"numero_contrato=$numero_contrato&contrato_compranet=$contrato_compranet&objeto_contratacion=$objeto_contratacion&nombre=$nombre&cantidad=$cantidad&total=$total");
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
window.location.replace('../vista/principa2.php');</script>";
        }

   ?>     