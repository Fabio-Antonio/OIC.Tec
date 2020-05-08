<?php
    require_once("conexion.php");

       $fundamento = $_POST["fundamento"];  
       $fecha = $_POST["fecha"];
       $opcion = $_POST["opcion"];
   
 $statement = $conn->prepare("INSERT INTO fundamento_legal (fundamento,fecha,opcion)VALUES(?,?,?)");
$statement->bindParam(1, $fundamento);
$statement->bindParam(2, $fecha);
$statement->bindParam(3, $opcion);
$statement->execute();      

  

 if($statement){
echo "<script>alert('Datos ingresados correctamente')
window.location.replace('consulta_fundamento.php');</script> ";

}else{
echo "<script>alert('Revisar la conexión con el servidor')
window.location.replace('consulta_fundamento.php');</script> ";

}
 $conn = null;


?>


