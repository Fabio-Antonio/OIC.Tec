<?php
    require_once("conexion.php");
     
    $procedimiento = $_POST["procedimientos"];
   		
     $fundamento = $_POST["fundamento"];
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
echo "<script>alert('Datos ingresados correctamente')
window.location.replace('consulta_fundamento.php');</script> ";

}else{
echo "<script>alert('Revisar la conexión al servidor')
window.location.replace('consulta_fundamento.php');</script> ";

}
 $conn=null;       
?>
