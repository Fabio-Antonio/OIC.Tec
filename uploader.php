<?php
$row = 1; 
$directorio = 'uploads/';
$subir_archivo = $directorio.basename($_FILES['uploadedfile']['name']);

if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $subir_archivo)) {
      echo "El archivo es válido y se cargó correctamente";
	   
    } else {
       echo "La subida ha fallado";
    }    




	 require_once("conexion.php");

	
	

	$fp = fopen ($subir_archivo,"r"); 
while ($data = fgetcsv ($fp, 1000, ",")) 
{ 
$num = count ($data); 

$row++; 
echo "$row- ".$data[0].$data[1].$data[2].$data[3]; 
$insertar="INSERT INTO administrador( nombre, apellido_paterno, apellido_materno,email) VALUE ( '.$data[0]', '.$data[1]','.$data[2]','.$data[3]')"; 

$stmt = $conn->prepare($insertar);

 $stmt->execute();
} 
fclose ($fp); 
    
        
?>
