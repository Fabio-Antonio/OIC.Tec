<?php
  require_once("conexion.php");
  require_once("url.php");

 $query=$conn->prepare("SELECT id_requirente,unidad FROM unidad_requirente");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag[]=$row;
}
$valor=serialize($flag);

if($flag==null){
    echo "<script>alert('Debe regitrar al menos una unidad requirente')
window.location.replace('principal2.php');</script>";
   return;
    }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal2.php');</script>";
                                
}

$query=$conn->prepare("SELECT id_proveedor,nombre FROM proveedor_adjudicado");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag2[]=$row;
}
$valor2=serialize($flag2);

if($flag2==null){
    echo "<script>alert('Debe regitrar al menos un proveedor adjudicado')
window.location.replace('principal2.php');</script>";
   return;
    }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal2.php');</script>";
                                
}

$conn=null;

$ch =curl_init();
$url=$path."/besa/captura_pro_mont2.php";
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS,"flag=$valor&flag2=$valor2");
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
window.location.replace('principal2.php');</script>";
        }
       
?>