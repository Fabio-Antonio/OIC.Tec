<?php
   require_once("conexion.php");
   $clav=$_GET["clav"];

 $statement = $conn->prepare("SELECT clave,presupuesto,(presupuesto*70) /100 AS setenta,(presupuesto*30 ) / 100 AS treinta FROM partida_presupuesto 
WHERE clave = ?;");    
$statement->bindParam(1,$clav);    
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){   
        $cl=$row["clave"];
	$totals=$row["presupuesto"];
	$setenta=$row["setenta"];
	$treinta=$row["treinta"];
    } 
    if($claves=null){
	echo "<script>alert('No se encontraron resultados 1')
window.location.replace('principl.php');</script>";
       return;
	} 
  
}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal.php');</script>";
}

 $statement = $conn->prepare("SELECT SUM(monto_max) AS total FROM partidas_presupuestales AS pp INNER JOIN contrato AS c ON pp.id_contrato = c.id_contrato INNER JOIN procedimientos_contratacion AS pc ON c.id_procedimiento_contratacion = pc.id_procedimiento_contratacion INNER JOIN partida_presupuesto AS ppr ON pp.id_presupuesto = ppr.id WHERE pc.id_procedimiento_contratacion >= 4 AND pc.id_procedimiento_contratacion <= 7 AND ppr.clave = ?");
$statement->bindParam(1,$clav);
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $total=$row["total"];
    }
    if($total==null){
        echo "<script>alert('No se encontraron resultados4')
window.location.replace('principal.html');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal.php');</script>";
}



 $statement = $conn->prepare("SELECT SUM(monto_max)AS  total FROM partidas_presupuestales AS pp INNER JOIN contrato AS c ON pp.id_contrato = c.id_contrato INNER JOIN procedimientos_contratacion AS pc ON c.id_procedimiento_contratacion = pc.id_procedimiento_contratacion INNER JOIN partida_presupuesto AS ppr ON pp.id_presupuesto = ppr.id WHERE (pc.id_procedimiento_contratacion = 3 OR (pc.id_procedimiento_contratacion >= 8 AND pc.id_procedimiento_contratacion <= 12)) AND ppr.clave = ?");
$statement->bindParam(1,$clav);
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
curl_setopt($ch,CURLOPT_POSTFIELDS,"totals=$totals&setenta=$setenta&treinta=$treinta&total=$total&total2=$total2&cl=$cl");
curl_exec($ch);
$error=curl_error($ch);
curl_close($ch);
if($error){
echo "<script>alert('Los datos no se enviaron correctamente')
window.location.replace('principal.html');</script>";
        }

?>





