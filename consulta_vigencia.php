<?php
   require_once("conexion.php");

	 require_once("url.php");

$total=0;
$total1=0;
$total2=0;
$total3=0;



   $statement = $conn->prepare("SELECT COUNT(*) AS total FROM contrato AS c
INNER JOIN unidad_requirente AS u ON c.id_unidad_requirente = u.id_requirente INNER JOIN contrato_fechas AS f ON c.id_contrato = f.id_contrato");

$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $total=$row["total"];

    }

 if($total==null){
        echo "<script>alert('No se encontraron resultados')
window.location.replace('consulta_vigencia.php');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal.php');</script>";
}



 $statement = $conn->prepare("SELECT COUNT(*) AS total FROM contrato AS c
INNER JOIN unidad_requirente AS u ON c.id_unidad_requirente = u.id_requirente
INNER JOIN contrato_fechas AS f ON c.id_contrato = f.id_contrato
WHERE f.fin_vigencia > DATE(NOW()) AND f.fin_vigencia < DATE(NOW()) + INTERVAL 3 MONTH");

$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $total1=$row["total"];

    }
    if($total1==null){
        echo "<script>alert('No se encontraron resultados')
window.location.replace('consulta_vigencia.php');</script>";
       return;
        }
   
}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal.php');</script>";
}

  $statement = $conn->prepare("SELECT COUNT(*) AS total FROM contrato AS c
INNER JOIN unidad_requirente AS u ON c.id_unidad_requirente = u.id_requirente
INNER JOIN contrato_fechas AS f ON c.id_contrato = f.id_contrato
WHERE f.fin_vigencia > DATE(NOW())+ INTERVAL 3 MONTH  AND f.fin_vigencia < DATE(NOW()) + INTERVAL 6 MONTH");

$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $total2=$row["total"];

    }
    if($total2==null){
        echo "<script>alert('No se encontraron resultados')
window.location.replace('consulta_vigencia.php');</script>";
       return;
        }
   
}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal2.php');</script>";
}

$statement = $conn->prepare("SELECT COUNT(*) AS total FROM contrato AS c
INNER JOIN unidad_requirente AS u ON c.id_unidad_requirente = u.id_requirente
INNER JOIN contrato_fechas AS f ON c.id_contrato = f.id_contrato
WHERE f.fin_vigencia < DATE(NOW())");

$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $total3=$row["total"];
      
    }

 if($total3==null){
        echo "<script>alert('No se encontraron resultados')
window.location.replace('consulta_vigencia.php');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal2.php');</script>";
}

$archivo = 'consulta_vigenciat.php';
$abrir = fopen($archivo,'r+');
$contenido = fread($abrir,filesize($archivo));
fclose($abrir);

// Separar linea por linea
$contenido = explode("\n",$contenido);

// Modificar linea deseada ( 2 )
$contenido[4] = "SELECT c.numero_contrato, u.unidad, f.inicio_vigencia, f.fin_vigencia FROM contrato AS c INNER JOIN unidad_requirente AS u ON c.id_unidad_requirente = u.id_requirente INNER JOIN contrato_fechas AS f ON c.id_contrato = f.id_contrato');";

// Unir archivo
$contenido = implode(PHP_EOL,$contenido);

// Guardar Archivo
$abrir = fopen($archivo,'w');
fwrite($abrir,$contenido);
fclose($abrir);


$conn=null;

$ch =curl_init();
$url=$path."/besa/consulta_por_vigencia.php";
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS,"total=$total&total1=$total1&total2=$total2&total3=$total3");
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
window.location.replace('principal2.php');</script>";
        }

?>





