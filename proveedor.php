<?php
    require_once("conexion.php");

       $nombre = $_POST["nombre"];  
       $rfc = $_POST["rfc"];
   
 $statement = $conn->prepare("INSERT INTO proveedor_adjudicado (nombre,rfc)VALUES(?,?)");
$statement->bindParam(1, $nombre);
$statement->bindParam(2, $rfc);
$statement->execute();      

  

 if($statement){
echo "<script>alert('Datos ingresados correctamente')
window.location.replace('captura_pro_mont.html');</script> ";

}else{
echo "<script>alert('Revisar conexión con el servidor')
window.location.replace('captura_pro_mont.html');</script> ";

}
 $conn = null;


?>


