<?php
    require_once("conexion.php");
     
    $nombre_unidad_compradora = $_POST["nombre_unidad_compradora"];
   $procedimientos=$_POST["procedimientos"];		
     $unidad_requirente = $_POST["unidad_requirente"];
        $nombre = $_POST["nombre"];
     $proveedor = $_POST["proveedor"];
     $numero_contrato = $_POST["numero_contrato"];
 $procedimiento_compranet = $_POST["procedimiento_compranet"];
   $contrato_compranet=$_POST["contrato_compranet"];
     $convenio_interno = $_POST["convenio_interno"];
 $objeto_contratacion = $_POST["objeto_contratacion"];
   $contrato_abierto=$_POST["contrato_abierto"];
     $documentacion_descripcion = $_POST["documentacion_descripcion"];
 	$monto_maximo= $_POST["monto_maximo"];
	$monto_minimo= $_POST["monto_minimo"];
        $consolidado=$_POST["consolidado"]; 
        $partida=$_POST["partida"];



        
$statement = $conn->prepare("INSERT INTO contrato (id_unidad_compradora,id_procedimiento_contratacion,id_unidad_requirente,id_administrador,
id_proveedor_adjudicado,id_partida,numero_contrato,procedimiento_compranet,contrato_compranet,convenio_interno
,objeto_contratacion,contrato_abierto,documentacion_descirpcion,monto_max,monto_min)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$statement->bindValue(1, $nombre_unidad_compradora);
$statement->bindValue(2, $procedimientos);
$statement->bindValue(3, $unidad_requirente);
$statement->bindValue(4, $nombre);
$statement->bindValue(5, $proveedor);
$statement->bindValue(6, $consolidado);
$statement->bindValue(7, $partida);
$statement->bindParam(8, $numero_contrato);
$statement->bindParam(9, $procedimiento_compranet);
$statement->bindParam(10, $contrato_compranet);
$statement->bindParam(11, $convenio_interno);
$statement->bindParam(12, $objeto_contratacion);
$statement->bindParam(13, $contrato_abierto);
$statement->bindParam(14, $documentacion_descripcion);
$statement->bindValue(15, $monto_maximo);
$statement->bindValue(16, $monto_minimo);
$statement->execute();
   
  
 
 if($statement){


}else{
echo "<script>alert('Revise la conexión con el servidor e intente de nuevo')
window.location.replace('consulta_contrato.php');</script>";

}
 $conn=null;       
?>
