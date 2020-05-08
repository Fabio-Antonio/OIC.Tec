<?php
    require_once("conexion.php");

    $nombre_unidad_compradora = $_POST["nombre_unidad_compradora"];

     $numero_unidad = $_POST["numero_unidad"];
    $statement = $conn->prepare("INSERT INTO unidad_compradora (nombre_unidad_compradora,numero_unidad)VALUES(?,?)");
$statement->bindParam(1, $nombre_unidad_compradora);
$statement->bindParam(2, $numero_unidad);
$statement->execute();
   
  
 
 if($statement){
echo "<script>alert('Datos ingresados correctamente')
window.location.replace('requirente_compradora_captura.html');</script> ";

}else{
echo "<script>alert('Revisar la conexión al servidor')
window.location.replace('requirente_compradora_captura.html');</script> ";

}
 $conn=null;       
?>


