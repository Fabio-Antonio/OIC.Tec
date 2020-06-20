<?php
$directorio = 'uploads/';

$subir_archivo = $directorio.basename($_FILES['pdf']['name']);

if(preg_match("/.pdf$/",$subir_archivo)==0){
 echo "<script>alert('El archivo no es .pdf')
window.location.replace('lectura.html');</script>";
return;
}

if (move_uploaded_file($_FILES['pdf']['tmp_name'], $subir_archivo)) {
      echo "<script>alert('El archivo se subió correctamente')
window.location.replace('lectura.html');</script>";
	   
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
