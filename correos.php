<?php


$desde="From:"."sisco_servidor";

$asunto="Pronta vigencia de contrato";


require_once("conexion.php");


$query=$conn->prepare($con,"SELECT numero_contrato,fin_vigencia,nombre,apellido_paterno,email FROM contrato INNER JOIN contrato_fechas ON contrato.id_fechas = contrato_fechas.id_fecha INNER JOIN administrador ON contrato.id_administrador = administrador.id_administrador");
$time=time()+259200;
$time2=time()+1296000;
$time3=time()+2419200;
$dat=date("Y-m-d",$time);
$dat2=date("Y-m-d",$time2);
$dat3=date("Y-m-d",$time3);


$query->execute();


if($query)
{
while($row=$query->fetch())
	{
	$fe=$row['fin_vigencia'];
        $contrat=$row['numero_contrato'];
        $nom=$row['nombre'];
        $ape=$row['apellido_paterno'];
        $email=$row['email'];
         if($fe==$dat){
                $mensaje="Estimado ".$nom." ".$ape.", su contrato No.".$contrat." expira en la fecha".$fe; 
		 mail($email,$asunto,$mensaje,$desde);
               	echo "listo";
		}
          if($fe==$dat2){
                $mensaje="Estimado ".$nom." ".$ape.", su contrato No.".$contrat." expira en la fecha".$fe; 
		 mail($email,$asunto,$mensaje,$desde);
               	echo "listo";
		}
		if($fe==$dat3){
                $mensaje="Estimado ".$nom." ".$ape.", su contrato No.".$contrat." expira en la fecha".$fe; 
		 mail($email,$asunto,$mensaje,$desde);
               	echo "listo";
		}

	}

  
}

$conn = null;
?>