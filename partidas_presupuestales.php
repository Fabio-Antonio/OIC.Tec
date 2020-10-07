<?php
    require_once("conexion.php");
     
    $nombre_unidad_compradora = $_POST["nombre_unidad_compradora"];
   		
     $clave_partida = $_POST["clave_partida"];
	 


$statement = $conn->prepare("INSERT INTO partidas_presupuestales (id_unidad,id_presupuesto)VALUES(?,?)");
$statement->bindValue(1, $nombre_unidad_compradora);
$statement->bindValue(2, $clave_partida);
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
