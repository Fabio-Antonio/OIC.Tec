<?php
    require_once("conexion.php");
     
    $procedimiento = $_POST["procedimientos"];
   		
     $fundamento = $_POST["fundamento"];
	$informe=$_POST["informe"];
echo $procedimiento.$fundamento.$informe;

$statement = $conn->prepare("INSERT INTO procedimientos_contratacion (id_fundamento_legal,procedimientos,setenta_treinta)VALUES(?,?,?)");
$statement->bindValue(1, $fundamento);
$statement->bindParam(2, $procedimiento);
$statement->bindParam(3, $informe);
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
