<?php
    require_once("conexion.php");
     
    $numero_contrato = $_GET["numero_contrato"];
   		
     $fecha_entrega = $_GET["fecha_entrega"];
	$nombre_entregable = $_GET["nombre_entregable"];
	$fecha_entrega_maxima=$_GET["fecha_entrega_maxima"];
	$cantidad_entregable=$_GET["cantidad_entregable"];
	$direccion_entregable=$_GET["direccion_entregable"];
	$descripcion=$_GET['descripcion'];

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




$statement = $conn->prepare("INSERT INTO entregables (id_contrato,fecha_entrega,nombre_entregable,fecha_entrega_maxima,cantidad_entregable,direccion_entregable,descripcion)VALUES(?,?,?,?,?,?,?)");
$statement->bindValue(1, $dato);
$statement->bindParam(2, $fecha_entrega);
$statement->bindParam(3, $nombre_entregable);
$statement->bindParam(4, $fecha_entrega_maxima);
$statement->bindValue(5, $cantidad_entregable);
$statement->bindParam(6, $direccion_entregable);
$statement->bindParam(7, $descripcion);




$statement->execute();
   
  
 
 if($statement){
echo "<script>alert('Datos agregados correctamente')
window.location.replace('consulta_contrato3.php');</script>";
}else{
echo "<script>alert('Error de conexion')
window.location.replace('consulta_contrato3.php');</script>";
}
 $conn=null;       
?>
