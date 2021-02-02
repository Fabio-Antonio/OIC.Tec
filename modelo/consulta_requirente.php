<?php
  require_once("conexion.php");
 
 $query=$conn->prepare("SELECT id_requirente,unidad FROM unidad_requirente");

 $query->execute();
if($query){
while($row=$query->fetch()){
$flag[]=$row;
}
$valor=serialize($flag);

if($flag==null){
    echo "<script>alert('Debe regitrar al menos una unidad requirente')
window.location.replace('principal2.php');</script>";
   return;
    }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal2.php');</script>";
                                
}



       
?>