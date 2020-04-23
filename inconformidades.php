<?php
    require_once("conexion.php");
     
    $numero_contrato = $_GET["numero_contrato"];
     $motivo = $_GET["motivo"];
	$nombre_inconforme = $_GET["nombre_inconforme"];
	$sentido_resolucion=$_GET["sentido_resolucion"];
	
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

$query=$conn->prepare("SELECT id_motivo FROM motivos_inconformidad  WHERE motivo=?");
$query->bindParam(1, $motivo);
$query->execute();

if($query)
{
while($row=$query->fetch())
        {
$dato2=$row['id_motivo'];


}


}


$statement = $conn->prepare("INSERT INTO inconformidades (id_motivo,id_contrato,nombre_inconforme,sentido_resolucion)VALUES(?,?,?,?)");
$statement->bindValue(1, $dato2);
$statement->bindValue(2, $dato);
$statement->bindParam(3, $nombre_inconforme);
$statement->bindParam(4, $sentido_resolucion);

$statement->execute();
   
  
 
 if($statement){
echo "<script>alert('Datos ingresados correctamente')
window.location.replace('consulta_contrato2.php');</script>";
}else{
echo "<script>alert('Error al ingresar los datos')
window.location.replace('consulta_contrato2.php');</script>";
}

 $conn=null;       
?>
