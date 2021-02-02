<?php
    require_once("conexion.php");
     
    $numero_contrato = $_GET["numero_contrato"];
   		
     $monto_maximo = $_GET["monto_maximo"];
	$monto_minimo = $_GET["monto_minimo"];
	$inicio_vigencia=$_GET["inicio_vigencia"];
	$fin_vigencia=$_GET["fin_vigencia"];
	$fecha_entrega=$_GET["fecha_entrega"];

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




$statement = $conn->prepare("INSERT INTO convenios_modificados (id_contrato,monto_maximo,monto_minimo,inicio_vogencia,fin_vigencia,fecha_entrega)VALUES(?,?,?,?,?,?)");
$statement->bindValue(1, $dato);
$statement->bindParam(2, $monto_maximo);
$statement->bindParam(3, $monto_minimo);
$statement->bindParam(4, $inicio_vigencia);
$statement->bindParam(5, $fin_vigencia);
$statement->bindParam(6, $fecha_entrega);



$statement->execute();
   
  
 
 if($statement){
echo "<script>alert('Datos ingresados correctamente')
window.location.replace('consulta_contrato.php');</script> ";

}else{
echo "<script>alert('Revisar la conexión con el servidor')
window.location.replace('consulta_contrato.php');</script> ";

}
 $conn=null;       
?>
