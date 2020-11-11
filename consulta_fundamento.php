<?php
  require_once("conexion.php");
  require_once("url.php");

$query=$conn->prepare("SELECT id_fundamento_legal,fundamento FROM fundamento_legal");

$query->execute();

if($query)
{
while($row=$query->fetch())
	{
$flag[]=$row;
}

$valor=serialize($flag);

	}




$conn = null;

$ch = curl_init();
header_remove("X-Frame-Options");
$url=$path."/besa/informe70-30.php";
// definimos la URL a la que hacemos la petición
curl_setopt($ch, CURLOPT_URL,$url);
// indicamos el tipo de petición: POST
curl_setopt($ch, CURLOPT_POST, TRUE);
// definimos cada uno de los parámetros
curl_setopt($ch, CURLOPT_POSTFIELDS, "flag=$valor");
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
window.location.replace('principa2.php');</script>";
        }

?>
