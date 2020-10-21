<?php
    require_once("conexion.php");

       $consolidador = $_POST["consolidador"];  
       $proveedor = $_POST["proveedor"];
       $licitacion = $_POST["licitacion"];
       $monto = $_POST["monto"];
 $statement = $conn->prepare("INSERT INTO consolidado (id_requirente,id_proveedor,licitacion,monto_total)VALUES(?,?,?,?)");
$statement->bindValue(1, $consolidador);
$statement->bindValue(2, $proveedor);
$statement->bindParam(1, $licitacion);
$statement->bindValue(2, $monto);


$statement->execute();      

  

 if($statement){
echo "<script>alert('Datos ingresados correctamente')
window.location.replace('consulta_requirente.php');</script> ";

}else{
echo "<script>alert('Revisar la conexión con el servidor')
window.location.replace('consulta_requirente.php');</script> ";

}
 $conn = null;


?>


