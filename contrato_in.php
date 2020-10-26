<?php
    require_once("conexion.php");
     $res=false;
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

        

function comprovar($consolidado,$unidad_requirente,$monto_maximo,$conn){
  $dato=null;
  $statement = $conn->prepare("SELECT id_consolidado From agregados WHERE id_consolidado = ? AND id_requierente = ? AND monto = ? ");
  $statement->bindValue(1, $consolidado);
$statement->bindValue(2, $unidad_requirente);
$statement->bindValue(3, $monto_maximo);
$statement->execute();
if($statement){

while($row=$statement->fetch())
{
$dato=$row['id_consolidado'];
 
}
if($dato==null){
  $conn=null; 
  return $result=false;
}
else{  
  return $result= true;
}

}
}


if($consolidado!=0){ 
echo json_encode(array("success"=>comprovar($consolidado,$unidad_requirente,$monto_maximo,$conn)));
$res= comprovar($consolidado,$unidad_requirente,$monto_maximo,$conn);
}

if($res==true){
  $statement = $conn->prepare("INSERT INTO contrato (id_unidad_compradora,id_procedimiento_contratacion,id_unidad_requirente,id_administrador,
  id_proveedor_adjudicado,id_consolidado,id_partida,numero_contrato,procedimiento_compranet,contrato_compranet,convenio_interno
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
   $conn=null; 
  }      
   if($consolidado==0){
    $statement = $conn->prepare("INSERT INTO contrato (id_unidad_compradora,id_procedimiento_contratacion,id_unidad_requirente,id_administrador,
  id_proveedor_adjudicado,id_partida,numero_contrato,procedimiento_compranet,contrato_compranet,convenio_interno
  ,objeto_contratacion,contrato_abierto,documentacion_descirpcion,monto_max,monto_min)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
  $statement->bindValue(1, $nombre_unidad_compradora);
  $statement->bindValue(2, $procedimientos);
  $statement->bindValue(3, $unidad_requirente);
  $statement->bindValue(4, $nombre);
  $statement->bindValue(5, $proveedor);
  $statement->bindValue(6, $partida);
  $statement->bindParam(7, $numero_contrato);
  $statement->bindParam(8, $procedimiento_compranet);
  $statement->bindParam(9, $contrato_compranet);
  $statement->bindParam(10, $convenio_interno);
  $statement->bindParam(11, $objeto_contratacion);
  $statement->bindParam(12, $contrato_abierto);
  $statement->bindParam(13, $documentacion_descripcion);
  $statement->bindValue(14, $monto_maximo);
  $statement->bindValue(15, $monto_minimo);
  $statement->execute();
   $conn=null; 
   echo json_encode(array("success"=>true));
   }
?>
