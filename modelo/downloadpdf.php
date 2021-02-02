<?php
     require_once("conexion.php");
      $numero_contrato = $_GET["numero_contrato"];
      $statement = $conn->prepare("SELECT pdf FROM contrato WHERE numero_contrato = ? ");  
      $statement->bindParam(1, $numero_contrato);
      $statement->execute();
       
    while($row = $statement->fetch())
    {
        $pdf=$row['pdf'];    
       	$mi_pdf="../$pdf";       
        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename="'.$mi_pdf.'"');
        readfile($mi_pdf); 
             
    }
           
          
   
     
?>
