<?php
    require_once("conexion.php");
     
    $numero_contrato = $_GET["numero_contrato"];
   		
     $numero_sub_partida = $_GET["numero_sub_partida"];
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




$statement = $conn->prepare("INSERT INTO sub_partida (id_contrato,numero_sub_partida,descripcion)VALUES(?,?,?)");
$statement->bindValue(1, $dato);
$statement->bindValue(2, $numero_sub_partida);
$statement->bindParam(3, $descripcion);
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
