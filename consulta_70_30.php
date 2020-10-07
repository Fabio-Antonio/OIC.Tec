<?php
   require_once("conexion.php");
  require_once("url.php");

   $nombre_unidad_compradora=$_GET["nombre_unidad_compradora"];
   $id_partida=$_GET["id_partida"];

 $statement = $conn->prepare("SELECT clave,presupuesto,(presupuesto*70)/100 AS setenta,(presupuesto*30)/100 AS treinta,
nombre_unidad_compradora, numero_unidad
FROM partidas_presupuestales AS pp
INNER JOIN partida_presupuesto AS pp2 ON pp.id_presupuesto = pp2.id
INNER JOIN unidad_compradora AS uc ON pp.id_unidad = uc.id_unidad_compradora
WHERE uc.nombre_unidad_compradora = ? AND pp2.id = ? ;");    
$statement->bindParam(1,$nombre_unidad_compradora); 
$statement->bindValue(2,$id_partida);   
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
window.location.replace('principal2.php');</script>";
       return;
	} 
  
}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal2.php');</script>";
}

 $statement = $conn->prepare("SELECT SUM(monto_max) AS total FROM partidas_presupuestales AS pp
INNER JOIN unidad_compradora AS uc ON pp.id_unidad = uc.id_unidad_compradora
INNER JOIN contrato AS c ON c.id_unidad_compradora = uc.id_unidad_compradora
INNER JOIN procedimientos_contratacion AS pc ON c.id_procedimiento_contratacion = pc.id_procedimiento_contratacion
INNER JOIN partida_presupuesto AS ppr ON pp.id_presupuesto = ppr.id WHERE pc.setenta_treinta = 30 AND uc.nombre_unidad_compradora = ? AND  ppr.id = ?
 AND c.id_partida = ? ;");

$statement->bindParam(1,$nombre_unidad_compradora);
$statement->bindValue(2,$id_partida);
$statement->bindParam(3,$id_partida);

$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $total=$row["total"];
     
    }
    if($total==null){
        echo "<script>alert('No se encontraron resultados')
window.location.replace('principal2.php');</script>";
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
= ppr.id WHERE pc.setenta_treinta = 70  AND uc.nombre_unidad_compradora = ? AND ppr.id = ?;");
$statement->bindParam(1,$nombre_unidad_compradora);
$statement->bindParam(2,$id_partida);
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

$url=$path."/besa/informe70-30.php";
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS,"totals=$totals&setenta=$setenta&treinta=$treinta&total=$total&total2=$total2&cli=$cli&unidad=$unidad&numero_unidad=$numero_unidad&id_partida=$id_partida");
curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5');

curl_exec($ch);
$error=curl_error($ch);
curl_close($ch);
if($error){
echo "<script>alert('Los datos no se enviaron correctamente')
window.location.replace('principal.html');</script>";
        }

?>





