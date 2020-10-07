<?php
  require_once("conexion.php");
 require_once("url.php");


 $query=$conn->prepare("SELECT id, clave, nombre FROM partida_presupuesto");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag2[]=$row;
}

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal.php');</script>";
}

?>