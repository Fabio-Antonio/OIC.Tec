<?php
    require_once("conexion.php");

    $notificacion_adjudicada = $_POST["innotificacionadjudicadaf"];
    $formalizacion_contrato = $_POST["informalizacioncontratof"];
    $requisicion_contrato = $_POST["inrequesicioncontratof"];
    $garantia_cumplimiento =$_POST["ingarantiacumplimientof"];
   $inicio_vigencia = $_POST["ininiciovigenciaf"];
   $sat = $_POST["insatf"];
   $imss = $_POST["inimssf"];
   $infonavit = $_POST["ininfonavitf"];
   $suficiencia = $_POST["insuficienciaf"];
   $fin_vigencia = $_POST["infinvigenciaf"];
   $numero_contrato = $_POST["infechadescripcion"];

$query=$conn->prepare("SELECT id_contrato FROM contrato WHERE numero_contrato=?");
$query->bindParam(1,$numero_contrato);
$query->execute();
if($query){
while($row=$query->fetch()){
$dato=$row['id_contrato'];
}
}

    
 $statement = $conn->prepare("INSERT INTO contrato_fechas (id_contrato,notificacion_adjudicada,formalizacion_contrato,inicio_vigencia,fin_vigencia,sat,imss,
infonavit,garantia_cumplimiento,suficiencia,requisicion_contrato)VALUES(?,?,?,?,?,?,?,?,?,?,?)");
$statement->bindValue(1, $dato);
$statement->bindParam(2, $notificacion_adjudicada);
$statement->bindParam(3, $formalizacion_contrato);
$statement->bindParam(4, $inicio_vigencia);
$statement->bindParam(5, $fin_vigencia);
$statement->bindParam(6, $sat);
$statement->bindParam(7, $imss);
$statement->bindParam(8, $infonavit);
$statement->bindParam(9, $garantia_cumplimiento);
$statement->bindParam(10, $suficiencia);
$statement->bindParam(11, $requisicion_contrato);


$statement->execute();
   
  
 
 if($statement){
echo "<script>alert('Datos ingresados correctamente')
window.location.replace('fechas.php');</script> ";
}else{
echo "<script>alert('Revisar la conexión al servidor')
window.location.replace('fechas.php');</script> ";


}
 $conn=null;       
?>


