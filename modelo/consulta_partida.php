<?php
  require_once("conexion.php");
 
 $query=$conn->prepare("SELECT id, clave, nombre FROM partida_presupuesto");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag2[]=$row;
}

}

?>