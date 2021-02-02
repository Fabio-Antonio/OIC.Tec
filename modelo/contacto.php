<?php


$desde="From:"."sisco_servidor";

$asunto="Problema";

$mensaje=$_POST['mensaje'];
$email=$_POST['mail'];
          
 mail($email,$asunto,$mensaje,$desde);
               	
?>
