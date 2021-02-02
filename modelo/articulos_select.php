<?php

require_once("conexion.php");
$procedimiento=$_POST["procedimiento"];

$query=$conn->prepare("SELECT id_fundamento_legal,articulo FROM fundamento_legal AS fl INNER JOIN procedimientos_contratacion AS pc ON fl.id_procedimientos_contratacion = pc.id_procedimiento_contratacion WHERE pc.id_procedimiento_contratacion= ?");
$query->bindValue(1,$procedimiento);
$query->execute();
if($query){
while($row=$query->fetch()){
$flag7[]=$row;
}
$valor7=serialize($flag7);

if($flag7==null){
       echo "<script>alert('Debe ingresar un articulo normativo')
window.location.replace('principal2.php');</script>";
      return;
       }

}else{
echo "<script>alert('La consulta a la base de datos es incorrecta')
window.location.replace('principal2.php');</script>";
}
      
foreach ($flag7 as $key => $val) {

echo "<option value=".$val['id_fundamento_legal'].'>'. $val['articulo'].'</option>';
        
    }
?>