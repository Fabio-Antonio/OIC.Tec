<?php 
 $servername = "192.168.1.63:3306";
$username = "root";
$password = "YZvwx-00";
 
 try {
    $conn = new PDO("mysql:host=$servername;dbname=sisco", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "<script> alert ('Revise la conexión al servidor')
window.location.replace('index.php');</script>";
;
    }

    
