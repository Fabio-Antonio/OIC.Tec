<?php

session_start();
$verificar=$_SESSION['usuario'];

if($verificar==null||$verificar==''){
 echo "<script> alert ('Debe iniciar sessión')
window.location.replace('index.php');</script>";

}

   require_once("conexion.php");
    $clave="";
   $presupuesto=$_POST["presupuesto"];
 $clave=$_POST["clave"];
   $presupuesto=str_replace(",","",$presupuesto);
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





