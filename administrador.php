<?php
    require_once("conexion.php");     
    $nombre = $_POST["nombre"];
    $apellido_paterno = $_POST["apellido_materno"]; 
	 $apellido_materno = $_POST["apellido_materno"];
    $email = $_POST["email"]; 
     
    $sql =  $conn->prepare("INSERT INTO administrador (nombre, apellido_paterno, apellido_materno,email)
VALUES (?, ?, ?, ?)");
        
	$sql->bindParam( 1, $nombre);
	$sql->bindParam( 2, $apellido_paterno);
	$sql->bindParam( 3, $apellido_materno);
	$sql->bindParam( 4, $email);
$sql->execute();
if ($sql)  {
    echo "<script>alert('Datos ingresados correctamente')
window.location.replace('admin.html');</script> ";

} else {
    echo "<script>alert('Revisar la conexion con el servidor')
window.location.replace('admin.html');</script> ";

}
   $conn = null;
        
?>
