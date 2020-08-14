<?php
   require_once("conexion.php");
   $clav=$_GET["clav"];
 $statement = $conn->prepare("SELECT clave,presupuesto,(presupuesto*70) /100 AS setenta,(presupuesto*30 ) / 100 AS treinta FROM partida_presupuesto 
WHERE clave = ?;");    
$statement->bindParam(1,$clav);    
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){   
        $claves=$row["clave"];
	$totals=$row["presupuesto"];
	$setenta=$row["setenta"];
	$treinta=$row["treinta"];
    } 
    if($clave=null){
	echo "<script>alert('No se encontraron resultados 1')
window.location.replace('principl.html');</script>";
       return;
	} 
  
}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal.php');</script>";
}


 $statement = $conn->prepare("SELECT numero_contrato, monto_max, procedimientos FROM contrato AS c INNER JOIN procedimientos_contratacion AS pc
ON c.id_procedimiento_contratacion = pc.id_procedimiento_contratacion
INNER JOIN partidas_presupuestales AS ppr ON c.id_contrato = ppr.id_contrato
INNER JOIN partida_presupuesto AS pprr ON ppr.id_presupuesto = pprr.id
WHERE pprr.clave = ? AND pc.id_procedimiento_contratacion >= 4 AND pc.id_procedimiento_contratacion <= 7;");
$statement->bindParam(1,$clav);
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $flag[]=$row;
    }
    if($flag==null){
        echo "<script>alert('No se encontraron resultados2')
window.location.replace('principl.html');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal.php');</script>";
}

$valor=serialize($flag);
 $statement = $conn->prepare("SELECT numero_contrato, monto_max, procedimientos FROM contrato AS c INNER JOIN procedimientos_contratacion AS pc
ON c.id_procedimiento_contratacion = pc.id_procedimiento_contratacion
INNER JOIN partidas_presupuestales AS ppr ON c.id_contrato = ppr.id_contrato
INNER JOIN partida_presupuesto AS pprr ON ppr.id_presupuesto = pprr.id
WHERE pprr.clave = ? AND pc.id_procedimiento_contratacion = 3 OR (pc.id_procedimiento_contratacion >= 8 AND pc.id_procedimiento_contratacion <= 12);");
$statement->bindParam(1,$clav);
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $flag2[]=$row;
    }
    if($flag2==null){
        echo "<script>alert('No se encontraron resultados3')
window.location.replace('principl.html');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal.php');</script>";
}


$valor2=serialize($flag2);


 $statement = $conn->prepare("SELECT SUM(monto_max) AS total FROM contrato AS c INNER JOIN procedimientos_contratacion AS pc
ON c.id_procedimiento_contratacion = pc.id_procedimiento_contratacion
INNER JOIN partidas_presupuestales AS ppr ON c.id_contrato = ppr.id_contrato
INNER JOIN partida_presupuesto AS pprr ON ppr.id_presupuesto = pprr.id
WHERE pprr.clave = ? AND pc.id_procedimiento_contratacion >= 4 AND pc.id_procedimiento_contratacion <= 7;");
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



 $statement = $conn->prepare("SELECT SUM(monto_max)AS total FROM contrato AS c INNER JOIN procedimientos_contratacion AS pc
ON c.id_procedimiento_contratacion = pc.id_procedimiento_contratacion
INNER JOIN partidas_presupuestales AS ppr ON c.id_contrato = ppr.id_contrato
INNER JOIN partida_presupuesto AS pprr ON ppr.id_presupuesto = pprr.id
WHERE pprr.clave = ? AND pc.id_procedimiento_contratacion = 3 OR (pc.id_procedimiento_contratacion >= 8 AND pc.id_procedimiento_contratacion <= 12);");
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
curl_setopt($ch,CURLOPT_URL,"http://192.168.0.38:8888/besa/informe70-30.php");
curl_setopt($ch,CURLOPT_POST,TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS,"totals=$totals&setenta=$setenta&treinta=$treinta&valor=$valor&valor2=$valor2&total=$total&total2=$total2&claves=$claves");
curl_exec($ch);
$error=curl_error($ch);
curl_close($ch);
if($error){
echo "<script>alert('Los datos no se enviaron correctamente')
window.location.replace('principal.html');</script>";
        }

?>





