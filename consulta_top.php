<?php
  require_once("conexion.php");
   require_once("url.php");


   $query=$conn->prepare("SELECT  numero_contrato, unidad, nombre, monto_max  FROM contrato AS c INNER JOIN unidad_requirente AS ur ON c.id_unidad_requirente = ur.id_requirente INNER JOIN proveedor_adjudicado AS pa ON c.id_proveedor_adjudicado = pa.id_proveedor ORDER BY monto_max DESC LIMIT 10;");

 $query->execute();

if($query){
while($row=$query->fetch(PDO::FETCH_ASSOC)){
$flag[]=$row;
}



 if($flag==null){
        echo "<script>alert('No se encontraron resultados')
window.location.replace('principal.php');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal.php');</script>";
}



$valor=serialize($flag);

$conn=null;
$ch=null;
$ch= curl_init();

$url=$path."/besa/top_por_contratos.php";

curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS,"flag=$valor");
curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5');
curl_exec($ch);
 $error= curl_error($ch);
 echo $error;
curl_close($ch);

?>

