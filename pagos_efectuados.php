<?php
    require_once("conexion.php");
     
    $numero_contrato = $_GET["numero_contrato"];
	 $monto = $_GET["monto"];
         $fecha_pago = $_GET["fecha_pago"];
	$descripcion =$_GET["descripcion"];
	
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




$statement = $conn->prepare("INSERT INTO pagos_efectuados (id_contrato,monto,fecha_pago,descripcion)VALUES(?,?,?,?)");
$statement->bindValue(1, $dato);
$statement->bindValue(2, $monto);
$statement->bindValue(3, $fecha_pago);
$statement->bindParam(4, $descripcion);

$statement->execute();
   
  
 
 if($statement){
echo "<script>alert('Datos insertados correctamente')
window.location.replace('consulta_contrato5.php');</script>";
}else{
echo "<script>alert('Revise la conexión con el servidor e intente de nuevo')
window.location.replace('consulta_contrato5.php');</script>";

}
 $conn=null;       
?>
