<?php


$statement = $conn->prepare("SELECT numero_contrato, objeto_contratacion, monto_max, nombre, apellido_paterno, apellido_materno, email FROM contrato AS c INNER JOIN contrato_fechas AS cf ON
c.id_contrato = cf.id_contrato INNER JOIN administrador AS a ON
c.id_administrador = a.id_administrador WHERE fin_vigencia =  DATE_SUB(CURDATE(), INTERVAL 5 DAY);");       
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){   
    $nombre=$row["nombre"];
    $apellido_paterno=$row["apellido_paterno"];
    $apellido_materno=$row["apellido_materno"];
    $email=$row["email"];
    $numero_contrato=$row["numero_contrato"];
    $objeto_contratacion=$row["objeto_contratacion"];

    $miArray = array("nombre"=>$nombre." ".$apellido_paterno." ".$apellido_materno, "email"=>$email,"contrato"=>$numero_contrato,"mensaje"=>$objeto_contratacion.". Este contrato esta próximo a vencer, por favor contacte a la parte de correspondiente para la culminación de su tramite.");
    enviar($miArray);
   
} 
    if($nombre=null){
	
	} 
  
}else{

}

$conn=null;


function enviar ($miArray){
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

}


?>