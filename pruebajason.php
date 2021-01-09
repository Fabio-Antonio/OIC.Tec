<?php



$miArray = array("nombre"=>"fabio", "email"=>"ing.fabio.a@gmail.com","contrato"=>"BR6745","mensaje"=>"pruebas de tiempo");
$conn=null;
$data = json_encode($miArray);
$ch = curl_init();
 $url="http://192.168.1.70:3000/api/usuarios/";
// definimos la URL a la que hacemos la petición
curl_setopt($ch, CURLOPT_URL,$url);
// indicamos el tipo de petición: POST
curl_setopt($ch, CURLOPT_POST, TRUE);
// definimos cada uno de los parámetros
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5');


 curl_exec ($ch);
 $error= curl_error($ch);
 echo $error;
// cerramos la sesión cURL
curl_close ($ch);


?>