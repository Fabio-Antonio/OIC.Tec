<?php
    require_once("conexion.php");
     
    $nombre = $_POST["nombre"];
    $apellido_paterno = $_POST["apellido_paterno"];
    $apellido_materno = $_POST["apellido_materno"]; 		
     $password = $_POST["password"];
	$permiso = $_POST["permiso"];  
	$email = $_POST["email"];
    $statement = $conn->prepare("INSERT INTO  login (nombre,apellido_paterno,apellido_materno,password,permiso,email) VALUES (?,?,?,?,?,?)");

$statement->bindParam(1, $nombre);
$statement->bindParam(2, $apellido_paterno);
$statement->bindParam(3, $apellido_materno);
$statement->bindParam(4, $password);
$statement->bindParam(5, $permiso);
$statement->bindParam(6, $email);
$statement->execute();
   
   
      
   
    $response = array();
   
    $response["success"] = false;  
   if($statement){
echo "listo";
}
       

      
   $conn = null;
        
?>
