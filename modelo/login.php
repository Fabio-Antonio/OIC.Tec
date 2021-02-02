<?php


class login {
    
    
  public function iniciar($nombre,$password){

    require_once('conexion.php');
     
    $query ="SELECT permiso FROM login WHERE nombre = ?  AND password = ?";
    $statement = $conn->prepare($query);
    $statement->bindParam(1, $nombre);
    $statement->bindParam(2, $password);
    $statement->execute();

        session_start(); 

       if($statement->rowCount()>0){
        while ($row = $statement->fetch()){

            if($row['permiso']=="administrador"){
            
                $_SESSION['usuario']=$nombre;
                 header("location:../vista/principal2.php");
	        }else if($row['permiso']=="empleado"){
	            header("location:../vista/principal2.php");
	        }       

        }

	    }else {
            $conn = null;
          echo "<script>
                alert('el usuario no fue encontrado')
                window.location=('../index.php');
            </script>";
	    }


    }


    public function cerrar(){
        session_start();
        session_destroy();   
        header("location:../index.php");
    }

}
?>