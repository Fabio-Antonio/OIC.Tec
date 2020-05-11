<?php
    require_once("conexion.php");
     
    $nombre_unidad_compradora = $_GET["nombre_unidad_compradora"];
   $procedimientos=$_GET["procedimientos"];		
     $unidad_requirente = $_GET["unidad_requirente"];
        $nombre = $_GET["nombre"];
   $total=$_GET["total"];
     $proveedor = $_GET["proveedor"];
 $descripcion = $_GET["descripcion"];
   $procedimiento=$_GET["procedimiento"];
     $numero_contrato = $_GET["numero_contrato"];
 $procedimiento_compranet = $_GET["procedimiento_compranet"];
   $contrato_compranet=$_GET["contrato_compranet"];
     $convenio_interno = $_GET["convenio_interno"];
 $objeto_contratacion = $_GET["objeto_contratacion"];
   $contrato_abierto=$_GET["contrato_abierto"];
     $documentacion_descripcion = $_GET["documentacion_descripcion"];
 	 
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

$query=$conn->prepare("SELECT id_monto_no_iva  FROM monto_no_iva  WHERE total=?");
$query->bindValue(1, $total);
$query->execute();

if($query)
{
while($row=$query->fetch())
        {
$dato5=$row['id_monto_no_iva'];

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


$query=$conn->prepare("SELECT id_fecha  FROM contrato_fechas  WHERE descripcion=?");
$query->bindParam(1, $descripcion);
$query->execute();

if($query)
{
while($row=$query->fetch())
        {
$dato7=$row['id_fecha'];

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
id_monto_no_iva,id_proveedor_adjudicado,id_fechas,id_consolidado,numero_contrato,procedimiento_compranet,contrato_compranet,convenio_interno
,objeto_contratacion,contrato_abierto,documentacion_descirpcion)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$statement->bindValue(1, $dato);
$statement->bindValue(2, $dato2);
$statement->bindValue(3, $dato3);
$statement->bindValue(4, $dato4);
$statement->bindValue(5, $dato5);
$statement->bindValue(6, $dato6);
$statement->bindValue(7, $dato7);
$statement->bindValue(8, $dato8);
$statement->bindParam(9, $numero_contrato);
$statement->bindParam(10, $procedimiento_compranet);
$statement->bindParam(11, $contrato_compranet);
$statement->bindParam(12, $convenio_interno);
$statement->bindParam(13, $objeto_contratacion);
$statement->bindParam(14, $contrato_abierto);
$statement->bindParam(15, $documentacion_descripcion);
$statement->execute();
   
  
 
 if($statement){
echo "<script>alert('Datos insertados correctamente')
window.location.replace('fechas.html');</script>";
}else{
echo "<script>alert('Revise la conexión con el servidor e intente de nuevo')
window.location.replace('fechas.html');</script>";

}
 $conn=null;       
?>
