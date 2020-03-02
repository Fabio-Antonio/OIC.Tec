<?php
  require_once("conexion.php");


$query=$conn->prepare("SELECT id_contrato,numero_contrato FROM contrato");

$query->execute();

if($query)
{
while($row=$query->fetchAll())
	{
      $flag[]=$row;        
}  
$valor=serialize($flag);
header("Location:consulta_numero_contrato.php?flag=$valor");
	}

$conn = null;
?>
