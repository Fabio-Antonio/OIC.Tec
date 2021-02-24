<?php
     require_once("conexion.php");
      $url = $_GET["url_constancia"];
    
          
       	$mi_pdf=$url;       
        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename="'.$mi_pdf.'"');
        readfile($mi_pdf); 
             
           
          
   
     
?>
