<?php 
 try {
    $conn = new PDO("mysql:dbname=sisco;host=127.0.0.1:3306;charset=UTF8","root","");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "<script> alert ('Revise la conexión al servidor')
window.location.replace('index.php');</script>";
;
    }

    
?>