<?php
  require_once("conexion.php");


$query=$conn->prepare("SELECT id_fundamento_legal,fundamento FROM fundamento_legal");

$query->execute();

if($query)
{
while($row=$query->fetch())
	{
$flag[]=$row;
}

$valor=serialize($flag);
header("Location:fundamentos_procedimientos.php?flag=$valor");
	}

$conn = null;
?>
