<?php
   require_once("conexion.php");
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
}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal2.php');</script>";
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
window.location.replace('principal2.php');</script>";
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






?>





