<?php
    $con = mysqli_connect("localhost:3306", "root", "YZvwx-00", "sisco"); 
if( isset($_POST["descripcion"]) ) {
       $id_contrato = $_POST["id_contrato"];
       $fecha_entrega = $_POST["fecha_entrega"];
      $nombre_entregable = $_POST["nombre_entregable"];
     $fecha_entrega_maxima = $_POST["fecha_entrega_maxima"];
     $cantidad_entregable = $_POST["cantidad_entregable"];
	$direccion_entregable = $_POST["direccion_entregable"];                   
      $descripcion = $_POST["descripcion"];    
}
    $statement = mysqli_prepare($con, "INSERT INTO entregables ( id_contrato,fecha_entrega,nombre_entregable,fecha_entrega_maxima,cantidad_entregable,direccion_entregable,descripcion) VALUES (?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "isssiss", $id_contrato, $fecha_entrega, $nombre_entregable,
     $fecha_entrega_maxima,$cantidad_entregable, $direccion_entregable, $descripcion  );
    mysqli_stmt_execute($statement);
     
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>