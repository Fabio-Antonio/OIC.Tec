<?php

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
$valor_se=serialize($flag_se);
}

      echo $numero_contrato;
      print_r($flag_se);
      
foreach ($flag_se as $key => $val) {

echo "<option value=".$val['id_entrega'].'>'. $val['fecha_maxima'].'</option>';
        
    }
?>