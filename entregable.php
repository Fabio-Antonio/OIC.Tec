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
	$id_intrega_m=$_POST['id_intrega_m'];
	$unitario=str_replace(['$',','],"",$unitario);
	$porcentaje=str_replace(['%',','],"",$porcentaje);

function comprobar($conn,$cantidad_entregable,$numero_contrato)
{

	$cantidad=0;
	$total=0;
	$statement = $conn->prepare("SELECT numero_contrato,SUM(cantidad) AS cantidad FROM entregas_m AS em INNER JOIN contrato AS c ON c.id_contrato = em.id_contrato  WHERE c.id_contrato = ? ");
  	$statement->bindValue(1, $numero_contrato);
  	$statement->execute();


	if($statement)
	{
		while($row=$statement->fetch())
		{
			$cantidad=$row['cantidad'];     
	
		}
	}

	$statement = $conn->prepare("SELECT SUM(cantidad_entregable) AS total FROM entregables AS e INNER JOIN contrato AS c ON c.id_contrato = e.id_contrato WHERE c.id_contrato = ?");
  	$statement->bindValue(1, $numero_contrato);
  	$statement->execute();

	if($statement)
	{
		while($row=$statement->fetch())
		{
			$total=$row['total'];     
	
		}
	}


	if($cantidad_entregable<=$cantidad&&$cantidad_entregable+$total<=$cantidad)
		{
	 		return true;
		}else{
	  		return false;
		}
	}


if(comprobar($conn,$cantidad_entregable,$numero_contrato)==true)
{
	$statement = $conn->prepare("INSERT INTO entregables (id_contrato,fecha_entrega,nombre_entregable,cantidad_entregable,direccion_entregable,descripcion,precio_unitario,porcentaje,id_intrega_m)VALUES(?,?,?,?,?,?,?,?,?)");
	$statement->bindValue(1, $numero_contrato);
	$statement->bindParam(2, $fecha_entrega);
	$statement->bindParam(3, $nombre_entregable);
	$statement->bindValue(4, $cantidad_entregable);
	$statement->bindParam(5, $direccion_entregable);
	$statement->bindParam(6, $descripcion);
	$statement->bindValue(7,$unitario);
	$statement->bindValue(8,$porcentaje);
	$statement->bindValue(9,$id_intrega_m);

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
