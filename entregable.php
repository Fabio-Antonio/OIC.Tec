<?php
    require_once("conexion.php");
       
     
    $numero_contrato = $_POST["numero_contrato"];
     $fecha_entrega = $_POST["fecha_entrega"];
	$nombre_entregable = $_POST["nombre_entregable"];
	$cantidad_entregable=$_POST["cantidad_entregable"];
	$direccion_entregable=$_POST["direccion_entregable"];
	$descripcion=$_POST['descripcion'];
	$unitario=$_POST['unitario'];
	$porcentaje=$_POST['porcentaje'];
	$unitario=str_replace(['$',','],"",$unitario);
	$porcentaje=str_replace(['%',','],"",$porcentaje);

function comprobar($conn,$cantidad_entregable,$numero_contrato)
{

	$cantidad=null;
	$total=null;
	$statement = $conn->prepare("SELECT numero_contrato,cantidad,SUM(cantidad_entregable) AS total
	FROM contrato AS c INNER JOIN entregas_m AS em ON c.id_contrato = em.id_contrato INNER JOIN
	entregables AS e ON c.id_contrato = e.id_contrato WHERE c.id_contrato = ? ");
  	$statement->bindValue(1, $numero_contrato);
  	$statement->execute();


	if($statement)
	{
		while($row=$statement->fetch())
		{
			$cantidad=$row['cantidad'];
			$total=$row['total'];       
	
		}
	if($cantidad_entregable<=$cantidad&&$cantidad_entregable+$total<=$cantidad)
		{
	 		return true;
		}else{
	  		return false;
		}

	}
	 	return false;
}


if(comprobar($conn,$cantidad_entregable,$numero_contrato)==true)
{
	$statement = $conn->prepare("INSERT INTO entregables (id_contrato,fecha_entrega,nombre_entregable,cantidad_entregable,direccion_entregable,descripcion,precio_unitario,porcentaje)VALUES(?,?,?,?,?,?,?,?)");
	$statement->bindValue(1, $numero_contrato);
	$statement->bindParam(2, $fecha_entrega);
	$statement->bindParam(3, $nombre_entregable);
	$statement->bindValue(4, $cantidad_entregable);
	$statement->bindParam(5, $direccion_entregable);
	$statement->bindParam(6, $descripcion);
	$statement->bindValue(7,$unitario);
	$statement->bindValue(8,$porcentaje);

	$statement->execute();
 
 	if($statement)
 	{
		echo json_encode(array("success"=>true));
	}else{
		echo json_encode(array("success"=>false));
}
}else{
	echo json_encode(array("success"=>false));
}    
?>
