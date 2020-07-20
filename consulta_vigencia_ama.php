<?php
   require_once("conexion.php");
   require_once("consultas_vigencia.php");

    $statement = $conn->prepare("SELECT c.numero_contrato, u.unidad, f.inicio_vigencia, f.fin_vigencia FROM contrato AS c
INNER JOIN unidad_requirente AS u ON c.id_unidad_requirente = u.id_requirente
INNER JOIN contrato_fechas AS f ON c.id_contrato = f.id_contrato
WHERE f.fin_vigencia > DATE(NOW()) AND f.fin_vigencia < DATE(NOW()) + INTERVAL 3 MONTH");    
    
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){   
       $flag[]=$row;
         
    } 
    if($flag==null){
	echo "<script>alert('No se encontraron resultados')
window.location.replace('consulta_vigencia.php');</script>";
       return;
	} 
   $valor=serialize($flag);
}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal.html');</script>";
}





$conn=null;

$ch =curl_init();
curl_setopt($ch,CURLOPT_URL,"http://192.168.1.68:8888/besa/consulta_por_vigencia.php");
curl_setopt($ch,CURLOPT_POST,TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS,"flag=$valor&total1=$total1&total2=$total2&total3=$total3&total=$total");
curl_exec($ch);
$error=curl_error($ch);
curl_close($ch);
if($error){
echo "<script>alert('Los datos no se enviaron correctamente')
window.location.replace('principal.html');</script>";
        }

?>





