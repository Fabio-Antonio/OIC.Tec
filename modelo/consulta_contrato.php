<?php
  require_once("conexion.php");


   $query=$conn->prepare("SELECT id_contrato,numero_contrato FROM contrato");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag[]=$row;
}
$valor=serialize($flag);
header("Location:comprobacion_conveniosm_documentosa.php?flag=$valor");

}

$conn=null;
?>
