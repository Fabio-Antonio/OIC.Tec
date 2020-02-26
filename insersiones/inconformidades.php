<?php
    $con = mysqli_connect("localhost:3306", "root", "YZvwx-00", "sisco"); 
if( isset($_POST["nombre_inconforme"]) ) {
        $id_motivo = $_POST["id_motivo"];
        $id_contrato = $_POST["id_contrato"];
	$nombre_inconforme = $_POST["nombre_inconforme"];
	$sentido_resolucion = $_POST["sentido_resolucion"];
}
    $statement = mysqli_prepare($con, "INSERT INTO inconformidades( id_motivo,id_contrato,nombre_inconforme,sentido_resolucion) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "iiss", $id_motivo,$id_contrato,$nombre_inconforme,$sentido_resolucion);
    mysqli_stmt_execute($statement);
     
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>