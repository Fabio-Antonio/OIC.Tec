<?php
   require_once("conexion.php");
   $nombre_unidad_compradora=$_GET["nombre_unidad_compradora"];

 $statement = $conn->prepare("SELECT clave,presupuesto,(presupuesto*70)/100 AS setenta,(presupuesto*30)/100 AS treinta,
nombre_unidad_compradora, numero_unidad
FROM partidas_presupuestales AS pp
INNER JOIN partida_presupuesto AS pp2 ON pp.id_unidad = pp2.id
INNER JOIN unidad_compradora AS uc ON pp.id_unidad = uc.id_unidad_compradora
WHERE uc.nombre_unidad_compradora = ?;");    
$statement->bindParam(1,$nombre_unidad_compradora);    
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){   
        $cli=$row["clave"];
	$totals=$row["presupuesto"];
	$setenta=$row["setenta"];
	$treinta=$row["treinta"];
	$unidad=$row["nombre_unidad_compradora"];
	$numero_unidad=$row['numero_unidad'];
    } 
    if($cl=null){
	echo "<script>alert('No se encontraron resultados')
window.location.replace('principal.php');</script>";
       return;
	} 
  
}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal.php');</script>";
}

 $statement = $conn->prepare("SELECT SUM(monto_max) AS total FROM partidas_presupuestales AS pp
INNER JOIN unidad_compradora AS uc ON pp.id_unidad = uc.id_unidad_compradora
INNER JOIN contrato AS c ON c.id_unidad_compradora = uc.id_unidad_compradora
INNER JOIN procedimientos_contratacion AS pc ON c.id_procedimiento_contratacion = pc.id_procedimiento_contratacion
INNER JOIN partida_presupuesto AS ppr ON pp.id_presupuesto = ppr.id WHERE pc.id_procedimiento_contratacion >= 2 AND pc.id_procedimiento_contratacion
<= 4 AND uc.nombre_unidad_compradora = ?;");

$statement->bindParam(1,$nombre_unidad_compradora);
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $total=$row["total"];
    }
    if($total==null){
        echo "<script>alert('No se encontraron resultados')
window.location.replace('principal.php');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal.php');</script>";
}



 $statement = $conn->prepare("SELECT SUM(monto_max) AS total FROM partidas_presupuestales AS pp
INNER JOIN unidad_compradora AS uc ON pp.id_unidad = uc.id_unidad_compradora
INNER JOIN contrato AS c ON c.id_unidad_compradora = uc.id_unidad_compradora
INNER JOIN procedimientos_contratacion AS pc ON c.id_procedimiento_contratacion = pc.id_procedimiento_contratacion
INNER JOIN partida_presupuesto AS ppr ON pp.id_presupuesto
= ppr.id WHERE (pc.id_procedimiento_contratacion = 1 OR (pc.id_procedimiento_contratacion >= 5 AND pc.id_procedimiento_contratacion <= 9)) AND uc.nombre_unidad_compradora = ?;");
$statement->bindParam(1,$nombre_unidad_compradora);
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $total2=$row["total"];
    }
    if($total2==null){
        echo "<script>alert('No se encontraron resultados5')
window.location.replace('principal.php');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal.php');</script>";
}



 $conn=null;

$ch =curl_init();
curl_setopt($ch,CURLOPT_URL,"http://besa-pruebas.com:8888/besa/informe70-30.php");
curl_setopt($ch,CURLOPT_POST,TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS,"totals=$totals&setenta=$setenta&treinta=$treinta&total=$total&total2=$total2&cli=$cli&unidad=$unidad&numero_unidad=$numero_unidad");
curl_exec($ch);
$error=curl_error($ch);
curl_close($ch);
if($error){
echo "<script>alert('Los datos no se enviaron correctamente')
window.location.replace('principal.html');</script>";
        }

?>





