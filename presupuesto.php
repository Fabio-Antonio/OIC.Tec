<?php
   require_once("conexion.php");

   $titular=$_POST["titular"];
 $presupuesto=$_POST["presupuesto"];
   
    $statement = $conn->prepare("CALL fecha_presupuesto(DATE(NOW()),?,?)");    
    $statement->bindParam(1,$titular);
	 $statement->bindValue(2,$presupuesto);

$statement->execute();

if($statement){
     
  
}else{
echo "<script>alert('La insersion a la base de datos es incorrecta')
window.location.replace('principal.html');</script>";
}


 $conn=null;



?>





