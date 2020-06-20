<?php
$row = 1; 
$directorio = 'uploads/';
$subir_archivo = $directorio.basename($_FILES['uploadedfile']['name']);
if(preg_match("/.csv$/",$subir_archivo)==0){
echo "<script>alert('el archivo no es .csv')
window.location.replace('lectura.html');</script>";
return;
}

if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $subir_archivo)) {
     
  } else {
       echo $comparar_js = "<script type='text/javascript'>confirm('La subida ha fallado desea intentarlo de nuevo?')</script>";
if($comparar_js){ // Si true=="<script type='text...."
    header("location:lectura.html"); // Esto no se puede dar nunca
}else{
    header("location:principal.html"); // Salida: "No entra en el if"
};
    }    




	 require_once("conexion.php");

	
	

	$fp = fopen ($subir_archivo,"r"); 
while ($data = fgetcsv ($fp, 1000, ",")) 
{ 
$num = count ($data); 

$row++;
 
echo "<script>alert('Datos ingresados correctamente $data[0],$data[1],$data[2],$data[3]')
window.location.replace('lectura.html');</script>";
$insertar="INSERT INTO administrador( nombre, apellido_paterno, apellido_materno,email) VALUE ( '$data[0]', '$data[1]','$data[2]','$data[3]')"; 

$stmt = $conn->prepare($insertar);

 $stmt->execute();



} 

fclose ($fp); 
    
        
?>
