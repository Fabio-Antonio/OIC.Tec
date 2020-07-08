<?php
   require_once("conexion.php");
    $numero_contrato = $_GET['numero_contrato'];
    $flag=$_GET['flag'];
    $res=json_decode($flag,true);
   echo $numero_contrato;
    $statement = $conn->prepare("SELECT numero_contrato,contrato_compranet,nombre_unidad_compradora,numero_unidad,procedimiento,monto_total,unidad,
clave_requirente,monto_max,monto_min,objeto_contratacion,procedimientos,(SELECT fundamento FROM fundamento_legal WHERE fundamento_legal.id_fundamento_legal =
procedimientos_contratacion.id_fundamento_legal)as fundamento,suficiencia,inicio_vigencia,fin_vigencia,notificacion_adjudicada,formalizacion_contrato,resicion_contrato
,sat,imss,infonavit,garantia_cumplimiento FROM contrato  INNER JOIN unidad_compradora ON contrato.id_unidad_compradora=unidad_compradora.id_unidad_compradora
INNER JOIN consolidado ON contrato.id_consolidado =consolidado.id_consolidado INNER JOIN unidad_requirente ON contrato.id_unidad_requirente=unidad_requirente.
id_requirente INNER JOIN procedimientos_contratacion ON contrato.id_procedimiento_contratacion=procedimientos_contratacion.id_procedimiento_contratacion INNER JOIN
  contrato_fechas ON contrato.id_contrato =contrato_fechas.id_contrato WHERE  numero_contrato= ? ");

$statement->bindParam(1, $numero_contrato);
$statement->execute();
             
   
    $response = array();
   
    $response["success"] = false;  
    
    
    while($row = $statement->fetch()){   
 	
        $numero_contrato=$row["numero_contrato"];
	$contrato_compranet=$row["contrato_compranet"];    
 	$nombre_unidad_compradora=$row["nombre_unidad_compradora"];
	$numero_unidad=$row["numero_unidad"];
	$procedimiento=$row["procedimiento"];
	$monto_total=$row["monto_total"];
	$unidad=$row["unidad"];
	$clave_requirente=$row["clave_requirente"];
	$monto_maximo=$row["monto_max"];
	$monto_minimo=$row["monto_min"];
	$objeto_contratacion=$row["objeto_contratacion"];
	$procedimientos=$row["procedimientos"];
	$fundamento=$row["fundamento"];
	$suficiencia=$row["suficiencia"];
	$inicio_vigencia=$row["inicio_vigencia"];
	$fin_vigencia=$row["fin_vigencia"];
	$notificacion_adjudicada=$row["notificacion_adjudicada"];
	$formalizacion_contrato=$row["formalizacion_contrato"];
	$resicion_contrato=$row["resicion_contrato"];
	$sat=$row["sat"];
	$imss=$row["imss"];
	$infonavit=$row["infonavit"];
	$garantia_cumplimiento=$row["garantia_cumplimiento"];
	
	
    $response["success"] = true; 
        
   $valor=serialize($res);
  header("location: consulta_numero_contrato.php?numero_contrato=$numero_contrato&contrato_compranet=$contrato_compranet&nombre_unidad_compradora=$nombre_unidad_compradora&numero_unidad=$numero_unidad&procedimiento=$procedimiento&monto_total=$monto_total&unidad=$unidad&clave_requirente=$clave_requirente&monto_maximo=$monto_maximo&monto_minimo=$monto_minimo&objeto_contratacion=$objeto_contratacion&procedimientos=$procedimientos&fundamento=$fundamento&suficiencia=$suficiencia&inicio_vigencia=$inicio_vigencia&fin_vigencia=$fin_vigencia&notificacion_adjudicada=$notificacion_adjudicada&formalizacion_contrato=$formalizacion_contrato&resicion_contrato=$resicion_contrato&sat=$sat&imss=$imss&infonavit=$infonavit&garantia_cumplimiento=$garantia_cumplimiento&flag=$valor") ;
       
   
    }  
   
   
        
?>





