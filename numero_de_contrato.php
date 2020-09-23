<?php
  require_once("conexion.php");
  require_once("url.php");

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
$url=$path."/besa/consulta_numero_contrato";
// definimos la URL a la que hacemos la petición
curl_setopt($ch, CURLOPT_URL,$url);
// indicamos el tipo de petición: POST
curl_setopt($ch, CURLOPT_POST, TRUE);
// definimos cada uno de los parámetros
curl_setopt($ch, CURLOPT_POSTFIELDS, "flag=$valor");
/*curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5');
*/

 curl_exec ($ch);
 $error= curl_error($ch);
 echo $error;
// cerramos la sesión cURL
curl_close ($ch);


?>
