<?php

session_start();
$verificar=$_SESSION['usuario'];

if($verificar==null||$verificar==''){
 echo "<script> alert ('Debe iniciar sessión')
window.location.replace('index.php');</script>";

}

   require_once("conexion.php");
   $presupuesto=$_POST["presupuesto"];
 $clave=$_POST["clave"];
 $partida=$_POST["partida"];
   $presupuesto=str_replace([',','$'],"",$presupuesto);
    $statement = $conn->prepare("INSERT INTO partida_presupuesto(clave,nombre,presupuesto)VALUES(?,?,?)");    
    $statement->bindParam(1,$clave);
    $statement->bindParam(2,$partida);
    $statement->bindValue(3,$presupuesto);

$statement->execute();

if($statement){
     
  
}else{
echo "<script>alert('La insersion a la base de datos es incorrecta')
window.location.replace('principal.php');</script>";
}


 $conn=null;



?>





