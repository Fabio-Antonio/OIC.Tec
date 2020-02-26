<?php
    $con = mysqli_connect("localhost:3306", "root", "YZvwx-00", "sisco"); 
if( isset($_POST["nombre_unidad_compradora"]) ) {
        $nombre_unidad_compradora = $_POST["nombre_unidad_compradora"];
        $numero_unidad= $_POST["numero_unidad"];  
      echo "variable" .  $nombre_unidad_compradora;
	  echo "variable" .  $numero_unidad;		       
           
}
    $statement = mysqli_prepare($con, "INSERT INTO unidad_compradora(nombre_unidad_compradora ,numero_unidad) VALUES (?, ?)");
    mysqli_stmt_bind_param($statement, "ss", $nombre_unidad_compradora, $numero_unidad);
    mysqli_stmt_execute($statement);
     
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>