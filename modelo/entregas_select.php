<?php

class listar{
    
 function lista_entregables(){   
require_once("conexion.php");
$numero_contrato=$_POST["numero_contrato"];

$query=$conn->prepare("SELECT id_entrega,fecha_maxima FROM entregas_m AS m INNER JOIN contrato AS c ON c.id_contrato = m.id_contrato WHERE c.id_contrato = ?");
$query->bindParam(1,$numero_contrato);
$query->execute();
$flag_se=[];
if($query){
while($row=$query->fetch()){
$flag_se[]=$row;
}
;
}

      
foreach ($flag_se as $key => $val) {

echo "<option value=".$val['id_entrega'].'>'. $val['fecha_maxima'].'</option>';
        
    }

}

public function lista_entregas(){
  
require_once("conexion.php");
$contrato=$_POST["contrato"];

$query=$conn->prepare("SELECT id_entregable,nombre_entregable,fecha_entrega FROM entregables AS e INNER JOIN contrato AS c ON e.id_contrato = c.id_contrato WHERE c.numero_contrato= ?");
$query->bindValue(1,$contrato);
$query->execute();
if($query){
while($row=$query->fetch()){
$flag7[]=$row;
}
;

if($flag7==null){

      return;
       }

}else{

}
      
foreach ($flag7 as $key => $val) {

echo "<option value=".$val['id_entregable'].'>'. $val['nombre_entregable'].' '.$val["fecha_entrega"].'</option>';
        
    }

}
public function lista_articulos(){
    require_once("conexion.php");
$procedimiento=$_POST["procedimiento"];

$query=$conn->prepare("SELECT id_fundamento_legal,articulo FROM fundamento_legal AS fl INNER JOIN procedimientos_contratacion AS pc ON fl.id_procedimientos_contratacion = pc.id_procedimiento_contratacion WHERE pc.id_procedimiento_contratacion= ?");
$query->bindValue(1,$procedimiento);
$query->execute();

$flag7=[];
if($query){
while($row=$query->fetch()){
$flag7[]=$row;
}

}
      
foreach ($flag7 as $key => $val) {

echo "<option value=".$val['id_fundamento_legal'].'>'. $val['articulo'].'</option>';
        
    }
}

}
?>