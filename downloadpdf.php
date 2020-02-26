<?php
     require_once("conexion.php");
      $numero_contrato = $_GET["numero_contrato"];
	
    $statement = $conn->prepare($con, "SELECT pdf FROM contrato WHERE numero_contrato = ? ");  
 
    $statement->bindParam(1, $numero_contrato);
 
  $statement->execute();
        

    $response = array();

    $response["success"] = false; 
    
      
       
    while($row = $statement->fetch()){
        $pdf=$row['pdf'];    
       	$mi_pdf="$pdf";       
        header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="'.$mi_pdf.'"');
readfile($pdf); 
             
            }
           
          
   
     
?>