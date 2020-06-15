<?php
    require_once("conexion.php");

    $notificacion_adjudicada = $_POST["innotificacionadjudicadaf"];
    $formalizacion_contrato = $_POST["informalizacioncontratof"];
    $requisicion_contrato = $_POST["inrequesicioncontratof"];
    $garantia_cumplimiento =$_POST["ingarantiacumplimientof"];
   $resicion_contrato =$_POST["inresicioncontratof"];
   $inicio_vigencia = $_POST["ininiciovigenciaf"];
   $sat = $_POST["insatf"];
   $imms = $_POST["inimssf"];
   $infonavit = $_POST["ininfonavitf"];
   $fecha_entrega = $_POST["infechaentregaf"];
   $suficiencia = $_POST["insuficienciaf"];
   $fin_vigencia = $_POST["infinvigenciaf"];
   $descripcion = $_POST["infechadescripcion"];

     
 $statement = $conn->prepare("INSERT INTO contrato_fechas (notificacion_adjudicada,formalizacion_contrato,inicio_vigencia,fin_vigencia,sat,imss,
infonavit,garantia_cumplimiento,fecha_entrega,suficiencia,requisicion_contrato,resicion_contrato,descripcion)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
$statement->bindParam(1, $notificacion_adjudicada);
$statement->bindParam(2, $formalizacion_contrato);
$statement->bindParam(3, $inicio_vigencia);
$statement->bindParam(4, $fin_vigencia);
$statement->bindParam(5, $sat);
$statement->bindParam(6, $imss);
$statement->bindParam(7, $infonavit);
$statement->bindParam(8, $garantia_cumplimiento);
$statement->bindParam(9, $fecha_entrega);
$statement->bindParam(10, $suficiencia);
$statement->bindParam(11, $requisicion_contrato);
$statement->bindParam(12, $resicion_contrato);
$statement->bindParam(13, $descripcion);

$statement->execute();
   
  
 
 if($statement){
echo "<script>alert('Datos ingresados correctamente')
window.location.replace('fechas.html');</script> ";
}else{
echo "<script>alert('Revisar la conexión al servidor')
window.location.replace('fechas.html');</script> ";


}
 $conn=null;       
?>


