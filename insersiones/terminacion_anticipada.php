<?php
    $con = mysqli_connect("localhost:3306", "root", "YZvwx-00", "sisco"); 
if( isset($_POST["monto_finiquito"]) ) {
       $id_contrato = $_POST["id_contrato"];	   
        $fecha_terminacion = $_POST["fecha_terminacion"];           
         $gastos_no_recuperables = $_POST["gastos_no_recuperables"]; 
	 $monto_finiquito = $_POST["monto_finiquito"]; 
}
    $statement = mysqli_prepare($con, "INSERT INTO terminacion_anticipada( id_contrato,fecha_terminacion,gastos_no_recuperables,monto_finiquito) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "isss", $id_contrato,$fecha_terminacion,$gastos_no_recuperables,$monto_finiquito );
    mysqli_stmt_execute($statement);
     
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>