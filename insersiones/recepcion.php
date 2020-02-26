<?php
    $con = mysqli_connect("localhost:3306", "root", "YZvwx-00", "sisco"); 
if( isset($_POST["descripcion"]) ) {
       $id_contrato = $_POST["id_contrato"];
       $id_requirente = $_POST["id_requirente"];                  
    $descripcion = $_POST["descripcion"];    
}
    $statement = mysqli_prepare($con, "INSERT INTO recepcion( id_contrato,id_requirente,descripcion) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($statement, "iis", $id_contrato, $id_requirente, $descripcion);
    mysqli_stmt_execute($statement);
     
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>