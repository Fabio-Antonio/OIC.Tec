<?php
   require_once("conexion.php");
   require_once("url.php");
    $numero_contrato = $_GET['numero_contrato'];
   
   
    $statement = $conn->prepare("SELECT numero_contrato,contrato_compranet,nombre_unidad_compradora,numero_unidad,unidad, clave_requirente,monto_max,monto_min,objeto_contratacion,procedimientos,suficiencia,inicio_vigencia,fin_vigencia,notificacion_adjudicada,formalizacion_contrato,requisicion_contrato ,sat,imss,infonavit,garantia_cumplimiento,licitacion,fecha_maxima,cantidad FROM contrato INNER JOIN unidad_compradora ON contrato.id_unidad_compradora=unidad_compradora.id_unidad_compradora INNER JOIN unidad_requirente ON contrato.id_unidad_requirente=unidad_requirente. id_requirente INNER JOIN procedimientos_contratacion ON contrato.id_procedimiento_contratacion=procedimientos_contratacion.id_procedimiento_contratacion INNER JOIN contrato_fechas ON contrato.id_contrato =contrato_fechas.id_contrato LEFT JOIN consolidado ON contrato.id_consolidado= consolidado.id_consolidado INNER JOIN entregas_m AS em ON contrato.id_contrato = em.id_contrato WHERE numero_contrato= ?");

$statement->bindParam(1, $numero_contrato);
$statement->execute();
             
   
      
    
    while($row = $statement->fetch()){   
 	
    $numero_contrato=$row["numero_contrato"];
	$contrato_compranet=$row["contrato_compranet"];    
 	$nombre_unidad_compradoras=$row["nombre_unidad_compradora"];
	$numero_unidad=$row["numero_unidad"];
	$unidad=$row["unidad"];
	$clave_requirente=$row["clave_requirente"];
	$monto_maximo=$row["monto_max"];
	$monto_minimo=$row["monto_min"];
	$objeto_contratacion=$row["objeto_contratacion"];
	$procedimientos=$row["procedimientos"];
	$suficiencia=$row["suficiencia"];
	$inicio_vigencia=$row["inicio_vigencia"];
	$fin_vigencia=$row["fin_vigencia"];
	$notificacion_adjudicada=$row["notificacion_adjudicada"];
	$formalizacion_contrato=$row["formalizacion_contrato"];
	$requisicion_contrato=$row["requisicion_contrato"];
	$sat=$row["sat"];
	$imss=$row["imss"];
	$infonavit=$row["infonavit"];
	$garantia_cumplimiento=$row["garantia_cumplimiento"];
	$licitacion=$row["licitacion"];
	$fecha_maxima=$row["fecha_maxima"];
	$cantidad=$row["cantidad"];


    }  
$conn=null;

$ch = curl_init();
$url=$path."/besa/consulta_numero_contrato.php";

curl_setopt($ch,CURLOPT_URL,$url);
// definimos la URL a la que hacemos la petición
// indicamos el tipo de petición: POST
curl_setopt($ch, CURLOPT_POST, TRUE);
// definimos cada uno de los parámetros
curl_setopt($ch, CURLOPT_POSTFIELDS, "numero_contrato=$numero_contrato&contrato_compranet=$contrato_compranet&nombre_unidad_compradoras=$nombre_unidad_compradoras&numero_unidad=$numero_unidad&unidad=$unidad
&clave_requirente=$clave_requirente&monto_maximo=$monto_maximo&monto_minimo=$monto_minimo&objeto_contratacion=$objeto_contratacion
&procedimientos=$procedimientos&suficiencia=$suficiencia&inicio_vigencia=$inicio_vigencia
&fin_vigencia=$fin_vigencia&notificacion_adjudicada=$notificacion_adjudicada&formalizacion_contrato=$formalizacion_contrato
&requisicion_contrato=$requisicion_contrato&sat=$sat&imss=$imss&infonavit=$infonavit&garantia_cumplimiento=$garantia_cumplimiento&licitacion=$licitacion&fecha_maxima=$fecha_maxima&cantidad=$cantidad");

curl_setopt($ch, CURLOPT_HEADER, 0);
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