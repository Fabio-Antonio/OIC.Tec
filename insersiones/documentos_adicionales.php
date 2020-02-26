<?php
    $con = mysqli_connect("localhost:3306", "root", "YZvwx-00", "sisco"); 
if( isset($_POST["descripcion"]) ) {
       $id_contrato = $_POST["id_contrato"];
       $fecha_documento = $_POST["fecha_documento"];                  
    $descripcion = $_POST["descripcion"];    
}
    $statement = mysqli_prepare($con, "INSERT INTO documentos_adicionales( id_contrato,fecha_documento,descripcion) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($statement, "iss", $id_contrato, $fecha_documento, $descripcion);
    mysqli_stmt_execute($statement);
     
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>