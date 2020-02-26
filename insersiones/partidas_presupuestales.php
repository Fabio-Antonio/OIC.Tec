<?php
    $con = mysqli_connect("localhost:3306", "root", "YZvwx-00", "sisco"); 
if( isset($_POST["id_contrato"]) ) {
        $id_contrato = $_POST["id_contrato"];
        $clave_partida = $_POST["clave_partida"];
}
    $statement = mysqli_prepare($con, "INSERT INTO partidas_presupuestales( id_contrato,clave_partida) VALUES (?, ?)");
    mysqli_stmt_bind_param($statement, "ii", $id_contrato, $clave_partida);
    mysqli_stmt_execute($statement);
     
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>