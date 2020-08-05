<?php 
 $servername = "192.168.1.67:3306";
$username = "root";
$password = "yzvwx-00";
 
 try {
    $conn = new PDO("mysql:dbname=sisco;host=192.168.1.67:3306;charset=UTF8","root","yzvwx-00");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "<script> alert ('Revise la conexión al servidor')
window.location.replace('index.php');</script>";
;
    }

    
