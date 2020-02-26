<?php
    $con = mysqli_connect("localhost:3306", "root", "YZvwx-00", "sisco"); 
if( isset($_POST["notificacion_adjudicada"]) ) {
    $notificacion_adjudicada = $_POST["notificacion_adjudicada"];    
    $formalizacion_contrato = $_POST["formalizacion_contrato"];
    $inicio_vigencia = $_POST["inicio_vigencia"];
    $fin_vigencia = $_POST["fin_vigencia"];
    $sat = $_POST["sat"];
    $imss = $_POST["imss"];
    $infonavit = $_POST["infonavit"];
    $garantia_cumplimiento = $_POST["garantia_cumplimiento"];
    $fecha_entrega = $_POST["fecha_entrega"];
    $suficiencia = $_POST["suficiencia"];
    $requisicion_contrato = $_POST["requisicion_contrato"];
    $resicion_contrato = $_POST["resicion_contrato"];           
}
$statement = mysqli_prepare($con, "INSERT INTO contrato_fechas(notificacion_adjudicada, formalizacion_contrato,inicio_vigencia,fin_vigencia,sat,imss,infonavit,garantia_cumplimiento,fecha_entrega,suficiencia,requisicion_contrato,resicion_contrato) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement,"ssssssssssss",$notificacion_adjudicada, $formalizacion_contrato,$inicio_vigencia,$fin_vigencia,$sat,$imss,$infonavit,$garantia_cumplimiento,$fecha_entrega,$suficiencia,$requisicion_contrato,$resicion_contrato);
    mysqli_stmt_execute($statement);
     
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>