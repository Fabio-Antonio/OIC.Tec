<?php
   require_once("conexion.php");
   
    $statement = $conn->prepare("SELECT SUM(monto_max) as total FROM contrato;");    
    $flag=0;
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){   
       $flag=$row["total"];
         
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


 $conn=null;

$ch =curl_init();
curl_setopt($ch,CURLOPT_URL,"http://192.168.1.68:8888/besa/informe70-30.php");
curl_setopt($ch,CURLOPT_POST,TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS,"flag=$flag");
curl_exec($ch);
$error=curl_error($ch);
curl_close($ch);
if($error){
echo "<script>alert('Los datos no se enviaron correctamente')
window.location.replace('principal.html');</script>";
        }

?>





