<?php
   require_once("conexion.php");

   $presupuesto=$_POST["presupuesto"];
 $clave=$_POST["clave"];
   
    $statement = $conn->prepare("INSERT INTO partida_presupuesto(clave,presupuesto)VALUES(?,?)");    
    $statement->bindParam(1,$clave);
	 $statement->bindValue(2,$presupuesto);

$statement->execute();

if($statement){
     
  
}else{
echo "<script>alert('La insersion a la base de datos es incorrecta')
window.location.replace('principal.php');</script>";
}


 $conn=null;



?>





