<?php
    require_once("conexion.php");

       $procedimiento = $_POST["procedimiento"];  
       $monto_total = $_POST["monto_total"];
       
 $statement = $conn->prepare("INSERT INTO consolidado (procedimiento,monto_total)VALUES(?,?)");
$statement->bindParam(1, $procedimiento);
$statement->bindParam(2, $monto_total);
$statement->execute();      

  

 if($statement){
echo "listo";
}
 $conn = null;


?>


