<?php
    require_once("conexion.php");
     
    $numero_contrato = $_POST["numero_contrato"];
     $fecha_entrega = $_POST["fecha_entrega"];
	$nombre_entregable = $_POST["nombre_entregable"];
	$cantidad_entregable=$_POST["cantidad_entregable"];
	$direccion_entregable=$_POST["direccion_entregable"];
	$descripcion=$_POST['descripcion'];



$statement = $conn->prepare("INSERT INTO entregables (id_contrato,fecha_entrega,nombre_entregable,cantidad_entregable,direccion_entregable,descripcion)VALUES(?,?,?,?,?,?)");
$statement->bindValue(1, $numero_contrato);
$statement->bindParam(2, $fecha_entrega);
$statement->bindParam(3, $nombre_entregable);
$statement->bindValue(4, $cantidad_entregable);
$statement->bindParam(5, $direccion_entregable);
$statement->bindParam(6, $descripcion);




$statement->execute();
 
 if($statement){
	echo json_encode(array("success"=>true));
}else{
	echo json_encode(array("success"=>false));
}
    
?>
