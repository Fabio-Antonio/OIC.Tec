<?php
    require_once("conexion.php");

        $motivo  = $_GET["motivo"];
 
 $statement = $conn->prepare("INSERT INTO motivos_inconformidad (motivo)VALUES(?)");
$statement->bindParam(1, $motivo);
$statement->execute();      

  

 if($statement){
echo "<script>alert('Datos ingresados correctamente') 
window.location.replace('consulta_contrato2.php');</script>";
}else{
echo  "<script>alert('Error de conexion')
window.location.replace('consulta_contrato2.php');</script>";
}
 $conn = null;


?>


