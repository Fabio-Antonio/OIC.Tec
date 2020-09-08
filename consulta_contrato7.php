<?php
  require_once("conexion.php");


   $query=$conn->prepare("SELECT id_unidad_compradora,nombre_unidad_compradora FROM unidad_compradora");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag[]=$row;
}
$valor=serialize($flag);

 if($flag==null){
        echo "<script>alert('Debe ingresar una unidad compradora')
window.location.replace('principal.php');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal.php');</script>";
}


 $query=$conn->prepare("SELECT id_procedimiento_contratacion,procedimientos FROM procedimientos_contratacion");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag2[]=$row;
}
$valor2=serialize($flag2);

 if($flag==null){
        echo "<script>alert('No se encontraron procedimientos de contratación')
window.location.replace('principal.php');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal.php');</script>";
}


$query=$conn->prepare("SELECT id_requirente,unidad FROM unidad_requirente");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag3[]=$row;
}
$valor3=serialize($flag3);

 if($flag==null){
        echo "<script>alert('Debe Ingresar una unidad requirente')
window.location.replace('principal.php');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal.php');</script>";
}


$query=$conn->prepare("SELECT id_administrador,nombre FROM administrador");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag4[]=$row;
}
$valor4=serialize($flag4);

 if($flag==null){
        echo "<script>alert('Debe ingresar un administrador de contrato')
window.location.replace('principal.php');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal.php');</script>";
}




$query=$conn->prepare("SELECT id_proveedor,nombre FROM proveedor_adjudicado");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag6[]=$row;
}
$valor6=serialize($flag6);

 if($flag==null){
        echo "<script>alert('Debe ingresar un provedor adjudicado')
window.location.replace('principal.php');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal.php');</script>";
}




$query=$conn->prepare("SELECT id_consolidado,procedimiento FROM consolidado");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag8[]=$row;
}
$valor8=serialize($flag8);

 if($flag==null){
        echo "<script>alert('No se encontraron consolidados')
window.location.replace('principal.php');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal.php');</script>";
}





$conn=null;

$ch = curl_init();
 
// definimos la URL a la que hacemos la petición
curl_setopt($ch, CURLOPT_URL,"http://besa-pruebas.com:8888/besa/contrato.php");
// indicamos el tipo de petición: POST
curl_setopt($ch, CURLOPT_POST, TRUE);
// definimos cada uno de los parámetros
curl_setopt($ch, CURLOPT_POSTFIELDS, "flag=$valor&flag2=$valor2&flag3=$valor3&flag4=$valor4&flag6=$valor6&flag8=$valor8");
 

 curl_exec ($ch);
 $error= curl_error($ch);
 echo $error;
// cerramos la sesión cURL
curl_close ($ch);



?>
