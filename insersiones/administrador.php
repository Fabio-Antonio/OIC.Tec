<?php
    $con = mysqli_connect("localhost:3306", "root", "YZvwx-00", "sisco"); 
if( isset($_POST['nombre']) ) {
        $nombre = $_POST['nombre']; 	           
    $apellido_paterno = $_POST["apellido_paterno"];
    $apellido_materno = $_POST["apellido_materno"];
  $email = $_POST["email"];   
}
    $statement = mysqli_prepare($con, "INSERT INTO administrador( nombre, apellido_paterno, apellido_materno,email) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "ssss", $nombre,$apellido_paterno, $apellido_materno, $email );
    mysqli_stmt_execute($statement);
     
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>



