<?php
    $con = mysqli_connect("localhost:3306", "root", "YZvwx-00", "sisco"); 
if( isset($_POST["fecha"]) ) {
       $id_contrato = $_POST["id_contrato"];
       $tipo_pena = $_POST["tipo_pena"];
       $descripcion_pena = $_POST["descripcion_pena"];
       $monto = $_POST["monto"];
       $fecha = $_POST["fecha"];
	   
}
    $statement = mysqli_prepare($con, "INSERT INTO penalizaciones( id_contrato,tipo_pena,descripcion_pena,monto,fecha) VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "issss", $id_contrato,$tipo_pena,$descripcion_pena,$monto, $fecha);
    mysqli_stmt_execute($statement);
     
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>