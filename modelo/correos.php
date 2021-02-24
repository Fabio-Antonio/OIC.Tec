<?php
require_once("conexion.php");
function enviar($miArray){  
$headers = "From: ing.fabio.a@gmail.com\r\n";
$headers .= "CC: ing.fabio.a@gmail.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    mail($miArray["email"], "Organo Interno de Control en la Secretaría de Educación Pública", "<html>
    <link href='https://cdn.datos.gob.mx/assets/css/main.css' rel='stylesheet'>
<link href='https://cdn.datos.gob.mx/bower_components/polymer/polymer.html' rel='import'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title></title>

    <link rel=shortcut icon href=https://cdn.datos.gob.mx/assets/img/favicon.ico>
    <link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
    <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css2?family=Mukta:wght@300;400;700&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='../vista/css/normalize.css'>
    <link rel='stylesheet' href='../vista/css/estile.css'>
</head>
    <body>
    <header class='site-header'>
        <div class='contenedor encabezado'>
            <p>
                B.E.S.A
            </p>
            <div class='imagen-header'>
                <img src='../vista/img/lf.png' alt='FuncionPublica'>
            </div>
            <span></span>
        </div>
    </header>
    <h1>Organo Interno de Control en la Secretaría de Educación Pública</h1>
    <span> Estimado ".$miArray["nombre"].". Por este medio se le informa, que su contrato con número ".$miArray["contrato"].", se encuentra en estatus: </span>
    <p>".$miArray["mensaje"]."</p>
    </body>
    </html>", $headers);
}
$statement = $conn->prepare("SELECT numero_contrato, monto_max, nombre,fin_vigencia,apellido_paterno, apellido_materno, email FROM contrato AS c INNER JOIN contrato_fechas AS cf ON
c.id_contrato = cf.id_contrato INNER JOIN administrador AS a ON
c.id_administrador = a.id_administrador WHERE cf.fin_vigencia =  DATE_SUB(CURDATE(), INTERVAL 5 DAY);");       
$statement->execute();
if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){   
    $nombre=$row["nombre"];
    $apellido_paterno=$row["apellido_paterno"];
    $apellido_materno=$row["apellido_materno"];
    $email=$row["email"];
    $numero_contrato=$row["numero_contrato"];
    $fin_vigencia=$row["fin_vigencia"];

    $miArray = array("nombre"=>$nombre." ".$apellido_paterno." ".$apellido_materno, "email"=>$email,"contrato"=>$numero_contrato,"mensaje"=>"Este contrato esta próximo a vencer en la fecha ".$fin_vigencia.", por favor contacte al departamento correspondiente para la culminación de su tramite.");
    enviar($miArray);
} 
    if($nombre=null){
	
	} 
  
}else{

}

$statement = $conn->prepare("SELECT numero_contrato,notificacion_adjudicada,formalizacion_contrato, nombre, apellido_paterno, apellido_materno, email FROM contrato AS c INNER JOIN contrato_fechas AS cf ON c.id_contrato = cf.id_contrato INNER JOIN administrador AS a ON c.id_administrador = a.id_administrador WHERE cf.formalizacion_contrato >(DATE_ADD(cf.notificacion_adjudicada, INTERVAL 15 DAY))");       
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){   
    $nombre=$row["nombre"];
    $apellido_paterno=$row["apellido_paterno"];
    $apellido_materno=$row["apellido_materno"];
    $email=$row["email"];
    $numero_contrato=$row["numero_contrato"];
    $formalización_contrato=$row["formalizacion_contrato"];
    $miArray = array("nombre"=>$nombre." ".$apellido_paterno." ".$apellido_materno, "email"=>$email,"contrato"=>$numero_contrato,"mensaje"=>"La fecha de formalización es incorrecta: ".$formalización_contrato.", ya que la fecha supera los 15 días de la fecha de notificación, por favor contacte al departamento correspondiente para su solución.");
    enviar($miArray);
   
} 
    if($nombre=null){
	
	} 
  
}else{

}


$statement = $conn->prepare("SELECT numero_contrato, objeto_contratacion,requisicion_contrato, nombre, apellido_paterno, apellido_materno, email FROM contrato AS c INNER JOIN contrato_fechas AS cf ON c.id_contrato = cf.id_contrato INNER JOIN administrador AS a ON c.id_administrador = a.id_administrador WHERE cf.requisicion_contrato >cf.formalizacion_contrato");       
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){   
    $nombre=$row["nombre"];
    $apellido_paterno=$row["apellido_paterno"];
    $apellido_materno=$row["apellido_materno"];
    $email=$row["email"];
    $numero_contrato=$row["numero_contrato"];
    $requisicion_contrato=$row["requisicion_contrato"];
    $miArray = array("nombre"=>$nombre." ".$apellido_paterno." ".$apellido_materno, "email"=>$email,"contrato"=>$numero_contrato,"mensaje"=>"La fecha de requisición del contrato es incorrecta: ".$requisicion_contrato.", ya que la fecha supera a la fecha de formalización de contrato, por favor contacte al departamento correspondiente para su solución.");
    enviar($miArray);
   
} 
    if($nombre=null){
	
	} 
  
}else{

}

$statement = $conn->prepare("SELECT numero_contrato,notificacion_adjudicada,requisicion_contrato, nombre, apellido_paterno, apellido_materno, email FROM contrato AS c INNER JOIN contrato_fechas AS cf ON c.id_contrato = cf.id_contrato INNER JOIN administrador AS a ON c.id_administrador = a.id_administrador WHERE cf.requisicion_contrato<(DATE_ADD(cf.formalizacion_contrato, INTERVAL -10 DAY))");       
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){   
    $nombre=$row["nombre"];
    $apellido_paterno=$row["apellido_paterno"];
    $apellido_materno=$row["apellido_materno"];
    $email=$row["email"];
    $numero_contrato=$row["numero_contrato"];
    $requisicion_contrato=$row["requisicion_contrato"];
    $miArray = array("nombre"=>$nombre." ".$apellido_paterno." ".$apellido_materno, "email"=>$email,"contrato"=>$numero_contrato,"mensaje"=>"La fecha de requisición del contrato es incorrecta: ".$requisicion_contrato.", ya que la fecha supera los diez días anteriores a la fecha de formalización de contrato, por favor contacte al departamento correspondiente para su solución.");
    enviar($miArray);
   
} 
    if($nombre=null){
	
	} 
  
}else{

}


$statement = $conn->prepare("SELECT numero_contrato, objeto_contratacion,suficiencia, nombre, apellido_paterno, apellido_materno, email FROM contrato AS c INNER JOIN contrato_fechas AS cf ON c.id_contrato = cf.id_contrato INNER JOIN administrador AS a ON c.id_administrador = a.id_administrador WHERE cf.suficiencia >cf.formalizacion_contrato");       
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){   
    $nombre=$row["nombre"];
    $apellido_paterno=$row["apellido_paterno"];
    $apellido_materno=$row["apellido_materno"];
    $email=$row["email"];
    $numero_contrato=$row["numero_contrato"];
    $suficiencia=$row["suficiencia"];
    $miArray = array("nombre"=>$nombre." ".$apellido_paterno." ".$apellido_materno, "email"=>$email,"contrato"=>$numero_contrato,"mensaje"=>"La fecha de suficiencia del contrato es incorrecta: ".$suficiencia.", ya que la fecha supera a la fecha de formalización de contrato, por favor contacte al departamento correspondiente para su solución.");
    enviar($miArray);
   
} 
    if($nombre=null){
	
	} 
  
}else{

}

$statement = $conn->prepare("SELECT numero_contrato,notificacion_adjudicada,suficiencia, nombre, apellido_paterno, apellido_materno, email FROM contrato AS c INNER JOIN contrato_fechas AS cf ON c.id_contrato = cf.id_contrato INNER JOIN administrador AS a ON c.id_administrador = a.id_administrador WHERE cf.suficiencia<(DATE_ADD(cf.formalizacion_contrato, INTERVAL -10 DAY))");       
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){   
    $nombre=$row["nombre"];
    $apellido_paterno=$row["apellido_paterno"];
    $apellido_materno=$row["apellido_materno"];
    $email=$row["email"];
    $numero_contrato=$row["numero_contrato"];
    $suficiencia=$row["suficiencia"];
    $miArray = array("nombre"=>$nombre." ".$apellido_paterno." ".$apellido_materno, "email"=>$email,"contrato"=>$numero_contrato,"mensaje"=>"La fecha de suficiencia del contrato es incorrecta: ".$suficiencia.", ya que la fecha supera los diez días anteriores a la fecha de formalización de contrato, por favor contacte al departamento correspondiente para su solución.");
    enviar($miArray);
   
} 
    if($nombre=null){
	
	} 
  
}else{

}

$statement = $conn->prepare("SELECT numero_contrato,notificacion_adjudicada,sat, nombre, apellido_paterno, apellido_materno, email FROM contrato AS c INNER JOIN contrato_fechas AS cf ON c.id_contrato = cf.id_contrato INNER JOIN administrador AS a ON c.id_administrador = a.id_administrador WHERE cf.sat<(DATE_ADD(cf.formalizacion_contrato, INTERVAL -30 DAY))");       
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){   
    $nombre=$row["nombre"];
    $apellido_paterno=$row["apellido_paterno"];
    $apellido_materno=$row["apellido_materno"];
    $email=$row["email"];
    $numero_contrato=$row["numero_contrato"];
    $sat=$row["sat"];
    $miArray = array("nombre"=>$nombre." ".$apellido_paterno." ".$apellido_materno, "email"=>$email,"contrato"=>$numero_contrato,"mensaje"=>"La fecha SAT del contrato es incorrecta: ".$sat.", ya que la fecha supera los 30 días anteriores a la fecha de formalización de contrato, por favor contacte al departamento correspondiente para su solución.");
    enviar($miArray);
   
} 
    if($nombre=null){
	
	} 
  
}else{

}


$statement = $conn->prepare("SELECT numero_contrato,notificacion_adjudicada,imss, nombre, apellido_paterno, apellido_materno, email FROM contrato AS c INNER JOIN contrato_fechas AS cf ON c.id_contrato = cf.id_contrato INNER JOIN administrador AS a ON c.id_administrador = a.id_administrador WHERE cf.imss<(DATE_ADD(cf.formalizacion_contrato, INTERVAL -30 DAY))");       
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){   
    $nombre=$row["nombre"];
    $apellido_paterno=$row["apellido_paterno"];
    $apellido_materno=$row["apellido_materno"];
    $email=$row["email"];
    $numero_contrato=$row["numero_contrato"];
    $imss=$row["imss"];
    $miArray = array("nombre"=>$nombre." ".$apellido_paterno." ".$apellido_materno, "email"=>$email,"contrato"=>$numero_contrato,"mensaje"=>"La fecha IMSS del contrato es incorrecta: ".$imss.", ya que la fecha supera los 30 días anteriores a la fecha de formalización de contrato, por favor contacte al departamento correspondiente para su solución.");
    enviar($miArray);
   
} 
    if($nombre=null){
	
	} 
  
}else{

}

$statement = $conn->prepare("SELECT numero_contrato,notificacion_adjudicada,infonavit, nombre, apellido_paterno, apellido_materno, email FROM contrato AS c INNER JOIN contrato_fechas AS cf ON c.id_contrato = cf.id_contrato INNER JOIN administrador AS a ON c.id_administrador = a.id_administrador WHERE cf.infonavit<(DATE_ADD(cf.formalizacion_contrato, INTERVAL -30 DAY))");       
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){   
    $nombre=$row["nombre"];
    $apellido_paterno=$row["apellido_paterno"];
    $apellido_materno=$row["apellido_materno"];
    $email=$row["email"];
    $numero_contrato=$row["numero_contrato"];
    $imss=$row["infonavit"];
    $miArray = array("nombre"=>$nombre." ".$apellido_paterno." ".$apellido_materno, "email"=>$email,"contrato"=>$numero_contrato,"mensaje"=>"La fecha INFONAVIT del contrato es incorrecta: ".$infonavit.", ya que la fecha supera los 30 días anteriores a la fecha de formalización de contrato, por favor contacte al departamento correspondiente para su solución.");
    enviar($miArray);
   
} 
    if($nombre=null){
	
	} 
  
}else{

}



$conn=null;

?>