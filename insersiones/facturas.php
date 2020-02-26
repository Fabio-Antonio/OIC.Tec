<?php
    $con = mysqli_connect("localhost:3306", "root", "YZvwx-00", "sisco"); 
if( isset($_POST["monto"]) ) {
       $id_contrato = $_POST["id_contrato"]; 
	$numero_factura = $_POST["numero_factura"];
	$monto = $_POST["monto"];        
        $fecha_factura = $_POST["fecha_factura"];           
         $fecha_pago = $_POST["fecha_pago"]; 
	 $descripcion_factura = $_POST["descripcion_factura"]; 
}
    $statement = mysqli_prepare($con, "INSERT INTO facturas( id_contrato,numero_factura,monto,fecha_factura,fecha_pago,descripcion_factura) VALUES (?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "iissss", $id_contrato,$numero_factura, $monto,$fecha_factura,$fecha_pago,$descripcion_factura);
    mysqli_stmt_execute($statement);
     
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>