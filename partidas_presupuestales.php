<?php
    require_once("conexion.php");
     
    $nombre_unidad_compradora = $_POST["nombre_unidad_compradora"];
   		
     $clave_partida = $_POST["clave_partida"];
	 

$query=$conn->prepare("SELECT id_unidad_compradora FROM unidad_compradora  WHERE nombre_unidad_compradora=?");
$query->bindParam(1, $nombre_unidad_compradora);
$query->execute();

if($query)
{
while($row=$query->fetch())
        {
$dato=$row['id_unidad_compradora'];

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



$statement = $conn->prepare("INSERT INTO partidas_presupuestales (id_unidad,id_presupuesto)VALUES(?,?)");
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
