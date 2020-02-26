<?php
    $con = mysqli_connect("localhost:3306", "root", "YZvwx-00", "sisco"); 
if( isset($_POST["fecha_entrega"]) ) {
       $id_contrato = $_POST["id_contrato"];
       $monto_maximo = $_POST["monto_maximo"];
       $monto_minimo = $_POST["monto_minimo"];
      $inicio_vigencia = $_POST["inicio_vigencia"];
     $fin_vigencia = $_POST["fin_vigencia"];
     $fecha_entrega = $_POST["fecha_entrega"];
	   
}
    $statement = mysqli_prepare($con, "INSERT INTO convenios_modificados ( id_contrato,monto_maximo,monto_minimo,inicio_vigencia,fin_vigencia,fecha_entrega) VALUES (?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "isssss", $id_contrato,$monto_maximo,$monto_minimo, $inicio_vigencia,$fin_vigencia,$fecha_entrega);
    mysqli_stmt_execute($statement);
     
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>