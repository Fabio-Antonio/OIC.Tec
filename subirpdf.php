<?php
$directorio = 'uploads/';
$subir_archivo = $directorio.basename($_FILES['pdf']['name']);

if (move_uploaded_file($_FILES['pdf']['tmp_name'], $subir_archivo)) {
      echo "El archivo es válido y se cargó correctamente";
	   
    } else {
       echo "La subida ha fallado";
    }    
 
require_once('conexion.php');
 $numero_contrato = $_POST['numero_contrato']; 
echo "".$numero_contrato;
 
$sql =$conn->prepare("INSERT  INTO contrato (pdf) VALUES (?) WHERE numero_contrato= ? ");



$sql->bindParam(1, $subir_archivo);
 $sql->bindParam(2, $numero_contrato);
$sql->execute();
 
 $path = "uploads/$numero_contrato.pdf";  
 
 if($sql){
 
 
 echo "Subio pdf Correctamente";
 }else{ echo "ERROR";}
 
 
$conn = null;
 
?>
