<?php
require_once("conexion.php");
$numero_contrato=$_POST["contrato"];
$fecha_maxima=$_POST["fecha_maxima"];
$cantidadm=$_POST["cantidadm"];
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




$statement = $conn->prepare("INSERT INTO entregas_m (id_contrato,fecha_maxima,cantidad)VALUES(?,?,?)");
$statement->bindValue(1, $dato);
$statement->bindParam(2, $fecha_maxima);
$statement->bindValue(3, $cantidadm);

$statement->execute();
   
  
 
 if($statement){
echo "<script>alert('Datos ingresados correctamente')
window.location.replace('consulta_contrato.php');</script> ";

}else{
echo "<script>alert('Revisar la conexión con el servidor')
window.location.replace('consulta_contrato.php');</script> ";

}
 $conn=null; 