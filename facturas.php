<?php
    require_once("conexion.php");
     
    $numero_contrato = $_GET["numero_contrato"];
     $numero_factura = $_GET["numero_factura"];
	 $monto = $_GET["monto"];
          $fecha_factura = $_GET["fecha_factura"];
	 $fecha_pago = $_GET["fecha_pago"];
	$descripcio_factura =$_GET["descripcio_factura"];
	
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




$statement = $conn->prepare("INSERT INTO facturas (id_contrato,numero_factura,monto,fecha_factura,fecha_pago,descripcio_factura)VALUES(?,?,?,?,?,?)");
$statement->bindValue(1, $dato);
$statement->bindValue(2, $numero_factura);
$statement->bindValue(3, $monto);
$statement->bindParam(4, $fecha_factura);
$statement->bindParam(5, $fecha_pago);
$statement->bindParam(6, $descripcio_factura);

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
