<?php
    $con = mysqli_connect("localhost:3306", "root", "YZvwx-00", "sisco"); 
if( isset($_POST["monto_maximo"]) ) {
        $monto_maximo = $_POST["monto_maximo"];
        $monto_minimo= $_POST["monto_minimo"];           
        $total = $_POST["total"];    
}
    $statement = mysqli_prepare($con, "INSERT INTO monto_no_iva( monto_maximo, monto_minimo , total) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($statement, "sss", $monto_maximo, $monto_minimo, $total);
    mysqli_stmt_execute($statement);
     
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>