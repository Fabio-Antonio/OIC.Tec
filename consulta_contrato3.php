<?php
  require_once("conexion.php");


   $query=$conn->prepare("SELECT id_contrato,numero_contrato FROM contrato");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag[]=$row;
}
$valor=serialize($flag);
 if($flag==null){
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
curl_setopt($ch,CURLOPT_URL,"http://besa-pruebas.com:8888/besa/entregables.php");
curl_setopt($ch,CURLOPT_POST,TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS,"flag=$valor");
curl_exec($ch);
curl_close($ch);
?>
