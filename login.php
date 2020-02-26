<?php
    require_once("conexion.php");
     
    $nombre = $_POST["nombre"];
    $password = $_POST["password"];  		
    
    $statement = $conn->prepare("SELECT permiso FROM login WHERE nombre = ?  AND password = ? ");

$statement->bindParam(1, $nombre);
$statement->bindParam(2, $password);
$statement->execute();
   
   
      
   
    $response = array();
   
    $response["success"] = false;  
    
    while ($row = $statement->fetch()){
    $response["success"] = true; 
        
        if($row['permiso']=="administrador"){
        header("location:consultas.html");
       
	}else if($row['permiso']=="empleado"){
	header("location:lectura.html");
	}
       
}
      
   $conn = null;
        
?>