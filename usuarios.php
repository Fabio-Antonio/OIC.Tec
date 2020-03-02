<?php
    require_once("conexion.php");
     
    $nombre = $_POST["nombre"];
   		
     $password = $_POST["password"];
	$permiso = $_POST["permiso"];  
	
    $statement = $conn->prepare("INSERT IN TO  login (nombre,password,permiso)VALUES(?,?,?)");
$statement->bindParam(1, $nombre);
$statement->bindParam(2, $password);
$statement->bindParam(3, $permiso);

$statement->execute();
   
   
      
   
    $response = array();
   
    $response["success"] = false;  
   if($statement){
echo "listo";
}
       

      
   $conn = null;
        
?>
