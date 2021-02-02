<?php
   require_once("conexion.php");
  require_once("url.php");

   $id_unidad_compradora=$_GET["id_unidad_compradora"];
  

$statement = $conn->prepare("SELECT nombre_unidad_compradora, numero_unidad, SUM(presupuesto) AS presupuesto, (SUM(presupuesto)*70)/100 AS setenta,(SUM(presupuesto)*30)/100 AS treinta FROM partidas_presupuestales AS pp
INNER JOIN partida_presupuesto AS pp2 ON pp.id_presupuesto = pp2.id
INNER JOIN unidad_compradora AS uc ON pp.id_unidad = uc.id_unidad_compradora
WHERE uc.id_unidad_compradora = ?;");    
$statement->bindParam(1,$id_unidad_compradora);   
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){   
	$totals=$row["presupuesto"];
	$setenta=$row["setenta"];
        $treinta=$row["treinta"];
	$unidad=$row["nombre_unidad_compradora"];
	$numero_unidad=$row['numero_unidad'];
    } 
    if($cl=null){
	echo "<script>alert('No se encontraron resultados')
window.location.replace('../vista/principal2.php');</script>";
       return;
	} 
  
}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('../vista/principal2.php');</script>";
}

 $statement = $conn->prepare("SELECT SUM(monto_max) AS total FROM contrato AS c INNER JOIN fundamento_legal AS fl ON c.id_fundamento_legal = fl.id_fundamento_legal INNER JOIN unidad_compradora AS uc ON c.id_unidad_compradora = uc.id_unidad_compradora WHERE fl.setenta_treinta = 30 AND uc.id_unidad_compradora = ? ");

$statement->bindParam(1,$id_unidad_compradora);

$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $total=$row["total"];
     
    }
    if($total==null){
        echo "<script>alert('No se encontraron resultados')
window.location.replace('../vista/principal2.php');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('../vista/principal2.php');</script>";
}



 $statement = $conn->prepare("SELECT SUM(monto_max) AS total FROM contrato AS c INNER JOIN fundamento_legal AS fl ON c.id_fundamento_legal = fl.id_fundamento_legal INNER JOIN unidad_compradora AS uc ON c.id_unidad_compradora = uc.id_unidad_compradora WHERE fl.setenta_treinta = 70 AND uc.id_unidad_compradora = ?");
$statement->bindParam(1,$id_unidad_compradora);
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $total2=$row["total"];
    }
    if($total2==null){
        echo "<script>alert('No se encontraron resultados5')
window.location.replace('../vista/principal2.php');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('../vista/principal2.php');</script>";
}



 $conn=null;

$ch =curl_init();
header_remove("X-Frame-Options");
$url=$path."/besa/vista/informe70-30.php";
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS,"totals=$totals&setenta=$setenta&treinta=$treinta&total=$total&total2=$total2&unidad=$unidad&numero_unidad=$numero_unidad");
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
window.location.replace('principa2.php');</script>";
        }

?>





