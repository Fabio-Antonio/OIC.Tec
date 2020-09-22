<?php
  require_once("conexion.php");
 require_once("url.php");

   $query=$conn->prepare("SELECT id_unidad_compradora,nombre_unidad_compradora FROM unidad_compradora");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag[]=$row;
}
$valor=serialize($flag);

 if($flag==null){
        echo "<script>alert('Debe regitrar al menos una unidad compradora')
window.location.replace('principal');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal');</script>";
}




 $query=$conn->prepare("SELECT id,clave FROM partida_presupuesto");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag2[]=$row;
}
$valor2=serialize($flag2);

 if($flag==null){
        echo "<script>alert('Debe crear una partida presupuestal')
window.location.replace('principal');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal');</script>";
}




$conn=null;
$ch=null;
$ch= curl_init();
$url=$path."/besa/partidas_presupuestales_partida.php";

curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS,"flag=$valor&flag2=$valor2");
curl_exec($ch);
 $error= curl_error($ch);
 echo $error;

curl_close($ch);

?>
