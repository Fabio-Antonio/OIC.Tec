<?php
    require_once("conexion.php");

    $notificacion_adjudicada = $_POST["innotificacionadjudicadaf"];
    $formalizacion_contrato = $_POST["informalizacioncontratof"];
    $requisicion_contrato = $_POST["inrequisicioncontratof"];
    $garantia_cumplimiento =$_POST["ingarantiacumplimientof"];
   $resicion_contrato =$_POST["resicion_contrato"];
   $inicio_vigencia = $_POST["inicio_vigencia"];
   $sat = $_POST["insatf"];
   $imms = $_POST["inimssf"];
   $infonavit = $_POST["ininfonavitf"];
   $fecha_entrega = $_POST["infechaentregaf"];
   $suficiencia = $_POST["suficiencia"];
   $fin_vigencia = $_POST["infinvigenciaf"];
   $descripcion = $_POST["infechadescripcion"]

     $clave_requirente = $_POST["clave_requirente"];
    $statement = $conn->prepare("INSERT INTO unidad_requirente (clave_requirente,unidad)VALUES(?,?)");
$statement->bindParam(1, $clave_requirente);
$statement->bindParam(2, $unidad);
$statement->bindParam(3, $clave_requirente);
$statement->bindParam(4, $unidad);
$statement->bindParam(5, $clave_requirente);
$statement->bindParam(6, $unidad);
$statement->bindParam(7, $clave_requirente);
$statement->bindParam(8, $unidad);
$statement->bindParam(9, $clave_requirente);
$statement->bindParam(10, $unidad);
$statement->bindParam(11, $clave_requirente);
$statement->bindParam(12, $unidad);
$statement->bindParam(13, $clave_requirente);


$statement->execute();
   
  
 
 if($statement){
echo "<script>alert('Datos ingresados correctamente')
window.location.replace('requirente_compradora_captura.html');</script> ";
}else{
echo "<script>alert('Revisar la conexión al servidor')
window.location.replace('requirente_compradora_captura.html');</script> ";


}
 $conn=null;       
?>


