<?php
require_once('conexion.php');
$directorio = 'uploads/contratos/';
$subir_archivo = $directorio.basename($_FILES['pdf_archivo']['name']);

if(preg_match("/.pdf$/",$subir_archivo)==0)
{
  echo "<script>alert('El archivo no es .pdf')
  window.location.replace('lectura.php');</script>";
  return;
}

if (move_uploaded_file($_FILES['pdf_archivo']['tmp_name'], $subir_archivo)) 
{
      
}else{ 
            echo json_encode(array("success"=>false));
            return;
      }    

$numero_contrato = $_POST['numero_contrato']; 
$sql =$conn->prepare("UPDATE  contrato SET pdf= ? WHERE numero_contrato= ? ");
$sql->bindParam(1, $subir_archivo);
$sql->bindParam(2, $numero_contrato);
$sql->execute();
   
 if($sql)
 {
      echo json_encode(array("success"=>true));
 }else{ 
      echo json_encode(array("success"=>false));
 }       
$conn = null;
 
?>
