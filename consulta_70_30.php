<?php
   require_once("conexion.php");
   
    $statement = $conn->prepare("SELECT inicio_administracion, titular, total, setenta, treinta FROM presupuesto WHERE YEAR(inicio_administracion) = YEAR(NOW())");    
    
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){   
       $inicio_adminitracion=$row["inicio_administracion"];
         $titular=$row["titular"];
	$totals=$row["total"];
	$setenta=$row["setenta"];
	$treinta=$row["treinta"];
    } 
    if($inicio_administracion=null){
	echo "<script>alert('No se encontraron resultados')
window.location.replace('principl.html');</script>";
       return;
	} 
  
}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal.html');</script>";
}


 $statement = $conn->prepare("SELECT numero_contrato, monto_max, procedimientos FROM contrato INNER JOIN procedimientos_contratacion
ON contrato.id_procedimiento_contratacion = procedimientos_contratacion.id_procedimiento_contratacion 
WHERE procedimientos_contratacion.id_fundamento_legal = 1;");

$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $flag[]=$row;
    }
    if($flag==null){
        echo "<script>alert('No se encontraron resultados')
window.location.replace('principl.html');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal.html');</script>";
}

$valor=serialize($flag);
 $statement = $conn->prepare("SELECT numero_contrato, monto_max, procedimientos FROM contrato INNER JOIN procedimientos_contratacion
ON contrato.id_procedimiento_contratacion = procedimientos_contratacion.id_procedimiento_contratacion
WHERE procedimientos_contratacion.id_fundamento_legal = 2;");

$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $flag2[]=$row;
    }
    if($flag2==null){
        echo "<script>alert('No se encontraron resultados')
window.location.replace('principl.html');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal.html');</script>";
}


$valor2=serialize($flag2);


 $statement = $conn->prepare("SELECT SUM(monto_max)AS total FROM contrato INNER JOIN procedimientos_contratacion
ON contrato.id_procedimiento_contratacion = procedimientos_contratacion.id_procedimiento_contratacion
WHERE procedimientos_contratacion.id_fundamento_legal = 1;");

$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $total=$row["total"];
    }
    if($total==null){
        echo "<script>alert('No se encontraron resultados')
window.location.replace('principal.html');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal.html');</script>";
}



 $statement = $conn->prepare("SELECT SUM(monto_max)AS total FROM contrato INNER JOIN procedimientos_contratacion
ON contrato.id_procedimiento_contratacion = procedimientos_contratacion.id_procedimiento_contratacion
WHERE procedimientos_contratacion.id_fundamento_legal = 2;");

$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $total2=$row["total"];
    }
    if($total2==null){
        echo "<script>alert('No se encontraron resultados')
window.location.replace('principal.html');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal.html');</script>";
}



 $conn=null;

$ch =curl_init();
curl_setopt($ch,CURLOPT_URL,"http://192.168.1.68:8888/besa/informe70-30.php");
curl_setopt($ch,CURLOPT_POST,TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS,"inicio_administracion=$inicio_adminitracion&titular=$titular&totals=$totals&setenta=$setenta&treinta=$treinta&valor=$valor&valor2=$valor2&total=$total&total2=$total2");
curl_exec($ch);
$error=curl_error($ch);
curl_close($ch);
if($error){
echo "<script>alert('Los datos no se enviaron correctamente')
window.location.replace('principal.html');</script>";
        }

?>





