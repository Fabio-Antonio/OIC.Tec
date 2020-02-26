<?php
    $con = mysqli_connect("localhost:3306", "root", "YZvwx-00", "sisco"); 
if( isset($_POST["procedimientos"]) ) {
        $id_fundamento_legal = $_POST["id_fundamento_legal"];
        $procedimientos= $_POST["procedimientos"];  
      echo "variable" .  $id_fundamento_legal;
	  echo "variable" .  $procedimientos;		       
           
}
    $statement = mysqli_prepare($con, "INSERT INTO procedimientos_contratacion( id_fundamento_legal,procedimientos) VALUES (?, ?)");
    mysqli_stmt_bind_param($statement, "is", $id_fundamento_legal, $procedimientos);
    mysqli_stmt_execute($statement);
     
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>