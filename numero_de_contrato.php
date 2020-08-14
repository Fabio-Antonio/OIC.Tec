<?php
  require_once("conexion.php");


$query=$conn->prepare("SELECT id_contrato,numero_contrato FROM contrato");

$query->execute();

if($query)
{
while($row=$query->fetch())
	{
$flag[]=$row;
}

$valor=serialize($flag);
//header("Location:consulta_numero_contrato.php?flag=$valor");
	}

$conn = null;


$ch = curl_init();

// definimos la URL a la que hacemos la petición
curl_setopt($ch, CURLOPT_URL,"http://192.168.0.38:8888/besa/consulta_numero_contrato.php");
// indicamos el tipo de petición: POST
curl_setopt($ch, CURLOPT_POST, TRUE);
// definimos cada uno de los parámetros
curl_setopt($ch, CURLOPT_POSTFIELDS, "flag=$valor");


 curl_exec ($ch);
 $error= curl_error($ch);
 echo $error;
// cerramos la sesión cURL
curl_close ($ch);


?>
