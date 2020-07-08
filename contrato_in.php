<?php
    require_once("conexion.php");
     
    $nombre_unidad_compradora = $_POST["nombre_unidad_compradora"];
   $procedimientos=$_POST["procedimientos"];		
     $unidad_requirente = $_POST["unidad_requirente"];
        $nombre = $_POST["nombre"];
     $proveedor = $_POST["proveedor"];
   $procedimiento=$_POST["procedimiento"];
     $numero_contrato = $_POST["numero_contrato"];
 $procedimiento_compranet = $_POST["procedimiento_compranet"];
   $contrato_compranet=$_POST["contrato_compranet"];
     $convenio_interno = $_POST["convenio_interno"];
 $objeto_contratacion = $_POST["objeto_contratacion"];
   $contrato_abierto="1";
     $documentacion_descripcion = $_POST["documentacion_descripcion"];
 	$monto_maximo= $_POST["monto_maximo"];
	$monto_minimo= $_POST["monto_minimo"];
 
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


$query=$conn->prepare("SELECT id_procedimiento_contratacion FROM procedimientos_contratacion  WHERE procedimientos=?");
$query->bindParam(1, $procedimientos);
$query->execute();

if($query)
{
while($row=$query->fetch())
        {
$dato2=$row['id_procedimiento_contratacion'];

}

}

$query=$conn->prepare("SELECT id_requirente FROM unidad_requirente  WHERE unidad=?");
$query->bindParam(1, $unidad_requirente);
$query->execute();

if($query)
{
while($row=$query->fetch())
        {
$dato3=$row['id_requirente'];

}

}

$query=$conn->prepare("SELECT id_administrador  FROM administrador  WHERE nombre=?");
$query->bindParam(1, $nombre);
$query->execute();

if($query)
{
while($row=$query->fetch())
        {
$dato4=$row['id_administrador'];

}

}





$query=$conn->prepare("SELECT id_proveedor  FROM proveedor_adjudicado  WHERE nombre=?");
$query->bindParam(1, $proveedor);
$query->execute();

if($query)
{
while($row=$query->fetch())
        {
$dato6=$row['id_proveedor'];

}

}


$query=$conn->prepare("SELECT id_consolidado  FROM consolidado  WHERE procedimiento=?");
$query->bindParam(1, $procedimiento);
$query->execute();

if($query)
{
while($row=$query->fetch())
        {
$dato8=$row['id_consolidado'];

}

}



$statement = $conn->prepare("INSERT INTO contrato (id_unidad_compradora,id_procedimiento_contratacion,id_unidad_requirente,id_administrador,
id_proveedor_adjudicado,id_consolidado,numero_contrato,procedimiento_compranet,contrato_compranet,convenio_interno
,objeto_contratacion,contrato_abierto,documentacion_descirpcion,monto_max,monto_min)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$statement->bindValue(1, $dato);
$statement->bindValue(2, $dato2);
$statement->bindValue(3, $dato3);
$statement->bindValue(4, $dato4);
$statement->bindValue(5, $dato6);
$statement->bindValue(6, $dato8);
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
   
  
 
 if($statement){


}else{
echo "<script>alert('Revise la conexión con el servidor e intente de nuevo')
window.location.replace('consulta_contrato.php');</script>";

}
 $conn=null;       
?>
