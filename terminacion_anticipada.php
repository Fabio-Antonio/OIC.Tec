<?php
    require_once("conexion.php");
     
    $numero_contrato = $_GET["numero_contrato"];
   $fecha_terminacion=$_GET["fecha_terminacion"];		
     $gastos_no_recuperables = $_GET["gastos_no_recuperables"];
     $monto_finiquito=$_GET["monto_finiquito"];
	 
$query=$conn->prepare("SELECT id_contrato FROM contrato  WHERE numero_contrato=?");
$query->bindParam(1, $numero_contrato);
$query->execute();

if($query)
{
while($row=$query->fetch())
        {
$dato=$row['id_contrato'];

}

}

$statement = $conn->prepare("INSERT INTO terminacion_anticipada (id_contrato,fecha_terminacion,gastos_no_recuperables,monto_finiquito)VALUES(?,?,?,?)");
$statement->bindValue(1, $dato);
$statement->bindValue(2, $fecha_terminacion);
$statement->bindParam(3, $gastos_no_recuperables);
$statement->bindParam(4, $monto_finiquito);

$statement->execute();
   
  
 
 if($statement){
echo "<script>alert('Datos insertados correctamente')
window.location.replace('consulta_contrato6.php');</script>";
}else{
echo "<script>alert('Revise la conexión con el servidor e intente de nuevo')
window.location.replace('consulta_contrato6.php');</script>";

}
 $conn=null;       
?>
