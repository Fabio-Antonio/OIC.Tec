<?php
    require_once("conexion.php");
session_start();
     
    
    $nombre = $_POST["nombre"];
    $password = $_POST["password"];  		
    
    $statement = $conn->prepare("SELECT permiso FROM login WHERE nombre = ?  AND password = ? ");

$statement->bindParam(1, $nombre);
$statement->bindParam(2, $password);
$statement->execute();
       if($statement->rowCount()>0){
       while ($row = $statement->fetch()){

        if($row['permiso']=="administrador"){
       
     $_SESSION['usuario']=$nombre;


 header("location:principal.php");
	}else if($row['permiso']=="empleado"){
	header("location:principal.php");
	}       

}

	}else {
          echo "<script>
                alert('el usuario no fue encontrado')
                window.location=('index.php');
    </script>";
	}


  $conn = null;
        
?>
