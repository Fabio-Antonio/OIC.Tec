<?php
    require_once("conexion.php");

       $monto_maximo = $_POST["monto_maximo"];  
       $monto_minimo = $_POST["monto_minimo"];
       $total = $_POST["total"];
 
 $statement = $conn->prepare("INSERT INTO monto_no_iva (monto_maximo,monto_minimo,total)VALUES(?,?,?)");
$statement->bindParam(1, $monto_maximo);
$statement->bindParam(2, $monto_minimo);
$statement->bindParam(3, $total);
$statement->execute();      

  

 if($statement){
echo "<script>alert('Datos ingresados correctamente')
window.location.replace('captura_pro_mont.html');</script> ";

}else{
echo "<script>alert('Revisar conexion con el servidor')
window.location.replace('captura_pro_motn.html');</script> ";

}
 $conn = null;


?>


