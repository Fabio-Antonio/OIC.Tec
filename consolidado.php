<?php
    require_once("conexion.php");

       $procedimiento = $_POST["procedimiento"];  
       $monto_total = $_POST["monto_total"];
       
 $statement = $conn->prepare("INSERT INTO consolidado (procedimiento,monto_total)VALUES(?,?)");
$statement->bindParam(1, $procedimiento);
$statement->bindParam(2, $monto_total);
$statement->execute();      

  

 if($statement){
echo "<script>alert('Datos ingresados correctamente')
window.location.replace('captura_pro_mont.html');</script> ";

}else{
echo "<script>alert('Revisar la conexión con el servidor')
window.location.replace('captura_pro_mont.html');</script> ";

}
 $conn = null;


?>


