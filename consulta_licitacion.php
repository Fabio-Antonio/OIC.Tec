<?php
  require_once("conexion.php");
  require_once("url.php");
  $id_consolidado=$_GET["id_consolidado"];

   $query=$conn->prepare("SELECT clave_requirente,unidad,licitacion,monto_total,descripcion FROM consolidado AS c INNER JOIN unidad_requirente AS ur ON c.id_requirente = ur.id_requirente WHERE c.id_consolidado = ?");
   $query->bindParam(1,$id_consolidado);  
 $query->execute();
if($query){
while($row=$query->fetch()){
$clave_requirente=$row["clave_requirente"];
$unidad=$row["unidad"];
$licitacion=$row["licitacion"];
$monto_total=$row["monto_total"];
$descripcion=$row["descripcion"];
}
 if($clave_requirente==null){
        echo "<script>alert('No se han registrado contratos')
window.location.replace('principal2.php');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal2.php');</script>";
}


$query=$conn->prepare("SELECT SUM(monto_max) AS total FROM contrato AS c INNER JOIN consolidado AS co ON c.id_consolidado = co.id_consolidado WHERE co.id_consolidado = ?");
$query->bindParam(1,$id_consolidado);  
 $query->execute();
if($query){
while($row=$query->fetch()){
    $total=$row["total"];
}
 if($total==null){
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
$url=$path."/besa/informe_consolidado.php";
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS,"clave_requirente=$clave_requirente&unidad=$unidad&licitacion=$licitacion&monto_total=$monto_total&descripcion=$descripcion&total=$total&id_consolidado=$id_consolidado");
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

?>
