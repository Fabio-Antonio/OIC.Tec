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
 
$sql =$conn->prepare("UPDATE  contrato SET pdf= ? WHERE numero_contrato= ? ");



$sql->bindParam(1, $subir_archivo);
 $sql->bindParam(2, $numero_contrato);
$sql->execute();
 
 $path = "uploads/$numero_contrato.pdf";  
 
 if($sql){
 
 
 echo "<script>alert('Subido correctamente a $numero_contrato')
window.location.replace('lectura.html');</script>";
 }else{ echo "<script>alert('Error al cargar el archivo')
window.location.replace('lectura.html');</script>" ;}
 
 
$conn = null;
 
?>
