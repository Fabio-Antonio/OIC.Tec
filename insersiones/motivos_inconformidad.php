<?php
    $con = mysqli_connect("localhost:3306", "root", "YZvwx-00", "sisco"); 
if( isset($_POST["motivo"]) ) {
        $motivo = $_POST["motivo"];
        
}
    $statement = mysqli_prepare($con, "INSERT INTO motivos_inconformidad( motivo) VALUES (?)");
    mysqli_stmt_bind_param($statement, "s", $motivo);
    mysqli_stmt_execute($statement);
     
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>