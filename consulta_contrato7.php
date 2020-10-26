<?php
  require_once("conexion.php");
  require_once("url.php");
  
  $partida_presupuestal=$_GET["partida_presupuestal"]; 

   $query=$conn->prepare("SELECT id_unidad_compradora,nombre_unidad_compradora FROM partidas_presupuestales
   AS pp INNER JOIN unidad_compradora AS uc ON pp.id_unidad = uc.id_unidad_compradora INNER JOIN 
   partida_presupuesto AS po ON po.id = pp.id_presupuesto WHERE po.id = ?");
$query->bindValue(1,$partida_presupuestal);
 $query->execute();
if($query){
while($row=$query->fetch()){
$flag[]=$row;
}
$valor=serialize($flag);

 if($flag==null){
        echo "<script>alert('Debe ingresar una unidad compradora')
window.location.replace('principal2.php');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal2.php');</script>";
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
window.location.replace('principal2.php');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal2.php');</script>";
}


$query=$conn->prepare("SELECT id_requirente,unidad FROM unidad_requirente");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag3[]=$row;
}
$valor3=serialize($flag3);

 if($flag3==null){
        echo "<script>alert('Debe Ingresar una unidad requirente')
window.location.replace('principal2.php');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal2.php');</script>";
}


$query=$conn->prepare("SELECT id_administrador,nombre,apellido_paterno,apellido_materno FROM administrador");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag4[]=$row;
}
$valor4=serialize($flag4);

 if($flag4==null){
        echo "<script>alert('Debe ingresar un administrador de contrato')
window.location.replace('principal2.php');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal2.php');</script>";
}




$query=$conn->prepare("SELECT id_proveedor,nombre FROM proveedor_adjudicado");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag6[]=$row;
}
$valor6=serialize($flag6);

 if($flag6==null){
        echo "<script>alert('Debe ingresar un provedor adjudicado')
window.location.replace('principal2.php');</script>";
       return;
        }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal2.php');</script>";
}

$query=$conn->prepare("SELECT id_consolidado,unidad,licitacion FROM consolidado AS co INNER JOIN unidad_requirente AS ur ON co.id_requirente = ur.id_requirente");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag8[]=$row;
}
$valor8=serialize($flag8);
}else{
      $valor8="vacio";  
}
$conn=null;

$ch = curl_init();
 $url=$path."/besa/contrato.php";
// definimos la URL a la que hacemos la petición
curl_setopt($ch, CURLOPT_URL,$url);
// indicamos el tipo de petición: POST
curl_setopt($ch, CURLOPT_POST, TRUE);
// definimos cada uno de los parámetros
curl_setopt($ch, CURLOPT_POSTFIELDS, "flag=$valor&flag2=$valor2&flag3=$valor3&flag4=$valor4&flag6=$valor6&partida=$partida_presupuestal&flag8=$valor8");
curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5');


 curl_exec ($ch);
 $error= curl_error($ch);
 echo $error;
// cerramos la sesión cURL
curl_close ($ch);

?>
