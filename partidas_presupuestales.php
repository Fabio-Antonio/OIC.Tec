<?php
    require_once("conexion.php");
     
    $numero_contrato = $_GET["numero_contrato"];
   		
     $clave_partida = $_GET["clave_partida"];
	 

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


$query=$conn->prepare("SELECT id FROM partida_presupuesto  WHERE clave=?");
$query->bindParam(1, $clave_partida);
$query->execute();

if($query)
{
while($row=$query->fetch())
        {
$dato2=$row['id'];

}

}



$statement = $conn->prepare("INSERT INTO partidas_presupuestales (id_contrato,id_presupuesto)VALUES(?,?)");
$statement->bindValue(1, $dato);
$statement->bindValue(2, $dato2);
$statement->execute();
   
  
 
 if($statement){
echo "<script>alert('Datos insertados correctamente')
window.location.replace('consulta_contrato4.php');</script>";
}else{
echo "<script>alert('Revise la conexión con el servidor e intente de nuevo')
window.location.replace('consulta_contrato4.php');</script>";

}
 $conn=null;       
?>
