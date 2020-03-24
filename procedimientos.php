<?php
    require_once("conexion.php");
     
    $procedimiento = $_GET["procedimientos"];
   		
     $fundamento = $_GET["fundamento"];
echo "bandera";
$query=$conn->prepare("SELECT id_fundamento_legal FROM fundamento_legal WHERE fundamento=?");
$query->bindParam(1, $fundamento);
$query->execute();

if($query)
{
while($row=$query->fetch())
        {
$dato=$row['id_fundamento_legal'];

echo $dato;
}

echo $dato;
}




$statement = $conn->prepare("INSERT INTO procedimientos_contratacion (id_fundamento_legal,procedimientos)VALUES(?,?)");
$statement->bindValue(1, $dato);
$statement->bindParam(2, $procedimiento);
$statement->execute();
   
  
 
 if($statement){
echo "listo";
}
 $conn=null;       
?>
