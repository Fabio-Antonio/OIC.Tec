<?php
    require_once("conexion.php");
     
    $numero_contrato = $_GET["numero_contrato"];
   $unidad=$_GET["unidad"];		
     $descripcion = $_GET["descripcion"];
	 
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


$query=$conn->prepare("SELECT id_requirente FROM unidad_requirente  WHERE unidad=?");
$query->bindParam(1, $unidad);
$query->execute();

if($query)
{
while($row=$query->fetch())
        {
$dato2=$row['id_requirente'];

}

}





$statement = $conn->prepare("INSERT INTO recepcion (id_contrato,id_requirente,descripcion)VALUES(?,?,?)");
$statement->bindValue(1, $dato);
$statement->bindValue(2, $dato2);
$statement->bindParam(3, $descripcion);
$statement->execute();
   
  
 
 if($statement){
echo "<script>alert('Datos insertados correctamente')
window.location.replace('consulta_contrato6.php');</script>";
}else{
echo "<script>alert('Revise la conexión con el servidor e intente de nuevo')
window.location.replace('consulta_contrato4.php');</script>";

}
 $conn=null;       
?>
