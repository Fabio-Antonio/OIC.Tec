<?php
    require_once("conexion.php");
     
    $numero_contrato = $_GET["numero_contrato"];
   		
     $fecha_documento = $_GET["fecha_documento"];
	$descripcion = $_GET["descripcion"];

$query=$conn->prepare("SELECT id_contrato FROM contrato  WHERE numero_contrato=?");
$query->bindParam(1, $numero_contrato);
$query->execute();

if($query)
{
while($row=$query->fetch())
        {
$dato=$row['id_contrato'];

echo $dato;
}

echo $dato;
}




$statement = $conn->prepare("INSERT INTO documentos_adicionales (id_contrato,fecha_documento,descripcion)VALUES(?,?,?)");
$statement->bindValue(1, $dato);
$statement->bindParam(2, $fecha_documento);
$statement->bindParam(3, $descripcion);
   
  
 
 if($statement){
echo "<script>alert('Datos ingresados correctamente')
window.location.replace('consulta_contrato.php');</script> ";

}else{
echo "<script>alert('Revisar la conexión con el servidor')
window.location.replace('consulta_contrato.php');</script> ";

}
 $conn=null;       
?>
