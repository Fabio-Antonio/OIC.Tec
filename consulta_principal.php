<?php
  require_once("conexion.php");


 $query=$conn->prepare("SELECT id_unidad_compradora,nombre_unidad_compradora FROM unidad_compradora");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag[]=$row;
}
$valor=serialize($flag);

}


?>
