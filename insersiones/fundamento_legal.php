<?php
    $con = mysqli_connect("localhost:3306", "root", "YZvwx-00", "sisco"); 
if( isset($_POST["fundamento"]) ) {
       $fundamento = $_POST["fundamento"];
        $fecha = $_POST["fecha"];           
    $opcion = $_POST["opcion"];    
}
    $statement = mysqli_prepare($con, "INSERT INTO fundamento_legal( fundamento, fecha , opcion) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($statement, "sss", $fundamento, $fecha, $opcion);
    mysqli_stmt_execute($statement);
     
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>