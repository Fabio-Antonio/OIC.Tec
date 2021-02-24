<?php

class insersiones{
public function entregables(){
	require_once("conexion.php");
       
     
    $numero_contrato = $_POST["numero_contrato"];
     $fecha_entrega = $_POST["fecha_entrega"];
	$nombre_entregable = $_POST["nombre_entregable"];
	$cantidad_entregable=$_POST["cantidad_entregable"];
	$direccion_entregable=$_POST["direccion_entregable"];
	$descripcion=$_POST['descripcion'];
	$unitario=$_POST['unitario'];
	$porcentaje=$_POST['porcentaje'];
	$id_intrega_m=$_POST['id_intrega_m'];
	$unitario=str_replace(['$',','],"",$unitario);
	$porcentaje=str_replace(['%',','],"",$porcentaje);

function comprobar($conn,$cantidad_entregable,$numero_contrato)
{

	$cantidad=0;
	$total=0;
	$statement = $conn->prepare("SELECT numero_contrato,SUM(cantidad) AS cantidad FROM entregas_m AS em INNER JOIN contrato AS c ON c.id_contrato = em.id_contrato  WHERE c.id_contrato = ? ");
  	$statement->bindValue(1, $numero_contrato);
  	$statement->execute();


	if($statement)
	{
		while($row=$statement->fetch())
		{
			$cantidad=$row['cantidad'];     
	
		}
	}

	$statement = $conn->prepare("SELECT SUM(cantidad_entregable) AS total FROM entregables AS e INNER JOIN contrato AS c ON c.id_contrato = e.id_contrato WHERE c.id_contrato = ?");
  	$statement->bindValue(1, $numero_contrato);
  	$statement->execute();

	if($statement)
	{
		while($row=$statement->fetch())
		{
			$total=$row['total'];     
	
		}
	}


	if($cantidad_entregable<=$cantidad&&$cantidad_entregable+$total<=$cantidad)
		{
	 		return true;
		}else{
	  		return false;
		}
	}


if(comprobar($conn,$cantidad_entregable,$numero_contrato)==true)
{
	$statement = $conn->prepare("INSERT INTO entregables (id_contrato,fecha_entrega,nombre_entregable,cantidad_entregable,direccion_entregable,descripcion,precio_unitario,porcentaje,id_intrega_m)VALUES(?,?,?,?,?,?,?,?,?)");
	$statement->bindValue(1, $numero_contrato);
	$statement->bindParam(2, $fecha_entrega);
	$statement->bindParam(3, $nombre_entregable);
	$statement->bindValue(4, $cantidad_entregable);
	$statement->bindParam(5, $direccion_entregable);
	$statement->bindParam(6, $descripcion);
	$statement->bindValue(7,$unitario);
	$statement->bindValue(8,$porcentaje);
	$statement->bindValue(9,$id_intrega_m);

	$statement->execute();
 
 	if($statement)
 	{
		echo json_encode(array("success"=>true));
	}else{
		echo json_encode(array("success"=>false));
}
}else{
	echo json_encode(array("success"=>false));
}
}

public function requirente (){
	require_once("conexion.php");

    $unidad = $_POST["uni"];

     $clave_requirente = $_POST["claver"];



     function comprovar($clave_requirente,$conn){
        $dato="";
        $statement = $conn->prepare("SELECT clave_requirente FROM unidad_requirente WHERE clave_requirente = ? ");
      $statement->bindValue(1, $clave_requirente);
      $statement->execute();

      if($statement)
      {
      while($row=$statement->fetch())
              {
      $dato=$row['clave_requirente'];        
      
      }
      if($dato==""){
       return true;
      }else{
        return false;
      }

      }
       return false;
      }


if(comprovar($clave_requirente,$conn)==true){
$statement = $conn->prepare("INSERT INTO unidad_requirente (clave_requirente,unidad)VALUES(?,?)");
$statement->bindParam(1, $clave_requirente);
$statement->bindParam(2, $unidad);
$statement->execute();
   
  
 
 if($statement){
    echo json_encode(array("success"=>true));
}else{
    echo json_encode(array("success"=>false));
}
}else{
    echo json_encode(array("success"=>false));
}

 $conn=null;       
}

public function compradora(){

	require_once("conexion.php");

    $nombre_unidad_compradora = $_POST["nuc"];

     $numero_unidad = $_POST["un"];



     function comprovar2($numero_unidad,$conn){
        $dato="";
      $statement = $conn->prepare("SELECT numero_unidad FROM unidad_compradora WHERE numero_unidad = ? ");
      $statement->bindValue(1, $numero_unidad);
      $statement->execute();

      if($statement)
      {
      while($row=$statement->fetch())
              {
      $dato=$row['numero_unidad'];        
      
      }
      if($dato==""){
       return true;
      }else{
        return false;
      }

      }
       return false;
      }

if(comprovar2($numero_unidad,$conn)==true){
$statement = $conn->prepare("INSERT INTO unidad_compradora (nombre_unidad_compradora,numero_unidad)VALUES(?,?)");
$statement->bindParam(1, $nombre_unidad_compradora);
$statement->bindParam(2, $numero_unidad);
$statement->execute();
   
 if($statement){
    echo json_encode(array("success"=>true));
}else{
    echo json_encode(array("success"=>false));

}
}else{
    echo json_encode(array("success"=>false));
}
 $conn=null;       
}
public function administrador(){
	require_once("conexion.php");     
    $nombre = $_POST["nombre"];
    $apellido_paterno = $_POST["apellido_paterno"]; 
	 $apellido_materno = $_POST["apellido_materno"];
    $email = $_POST["email"]; 
     
    $sql =  $conn->prepare("INSERT INTO administrador (nombre, apellido_paterno, apellido_materno,email)
VALUES (?, ?, ?, ?)");
        
	$sql->bindParam( 1, $nombre);
	$sql->bindParam( 2, $apellido_paterno);
	$sql->bindParam( 3, $apellido_materno);
	$sql->bindParam( 4, $email);
$sql->execute();
if ($sql)  {
    echo "<script>alert('Datos ingresados correctamente')
window.location.replace('../vista/admin.html');</script> ";

} else {
    echo "<script>alert('Revisar la conexion con el servidor')
window.location.replace('../vista/admin.html');</script> ";

}
   $conn = null;
}

public function consolidado (){
	require_once("conexion.php");

	$consolidador = $_POST["consolidador"];  
	$descripcion = $_POST["descripcion"];
	$licitacion = $_POST["licitacion"];
	$monto = $_POST["monto"];
$statement = $conn->prepare("INSERT INTO consolidado (id_requirente,descripcion,licitacion,monto_total)VALUES(?,?,?,?)");
$statement->bindValue(1, $consolidador);
$statement->bindParam(2, $descripcion);
$statement->bindParam(3, $licitacion);
$statement->bindValue(4, $monto);


$statement->execute();      


$conn = null;
}

public function proveedor(){
	require_once("conexion.php");

       $nombre = $_POST["noo"];  
       $rfc = $_POST["rfc"];
   
 $statement = $conn->prepare("INSERT INTO proveedor_adjudicado (nombre,rfc)VALUES(?,?)");
$statement->bindParam(1, $nombre);
$statement->bindParam(2, $rfc);
$statement->execute();      

  

 if($statement){
echo "<script>alert('Datos ingresados correctamente')
window.location.replace('captura_pro_mont.html');</script> ";

}else{
echo "<script>alert('Revisar conexión con el servidor')
window.location.replace('captura_pro_mont.html');</script> ";

}
 $conn = null;
}
public function subir_cvs(){
	$row = 1; 
$directorio = '../uploads/';
$subir_archivo = $directorio.basename($_FILES['uploadedfile']['name']);
if(preg_match("/.csv$/",$subir_archivo)==0){
echo "<script>alert('el archivo no es .csv')
window.location.replace('../vista/lectura.php');</script>";
return;
}

if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $subir_archivo)) {
     
  } else {
       echo $comparar_js = "<script type='text/javascript'>confirm('La subida ha fallado desea intentarlo de nuevo?')</script>";
if($comparar_js){ // Si true=="<script type='text...."
    header("location:../vista/lectura.php"); // Esto no se puede dar nunca
}else{
    header("location:../vista/principal2.php"); // Salida: "No entra en el if"
};
    }    




	 require_once("conexion.php");

	
	

	$fp = fopen ($subir_archivo,"r"); 
while ($data = fgetcsv ($fp, 1000, ",")) 
{ 
$num = count ($data); 

$row++;
 
$insertar="INSERT INTO administrador( nombre, apellido_paterno, apellido_materno,email) VALUE ( '$data[0]', '$data[1]','$data[2]','$data[3]')"; 

$stmt = $conn->prepare($insertar);

 $stmt->execute();

if($stmt){
    echo json_encode(array("success"=>true));
}else{ 
  echo json_encode(array("success"=>false));
}

} 

fclose ($fp); 
}
public function subir_pdf(){

	require_once('conexion.php');
$directorio = '../uploads/contratos/';
$subir_archivo = $directorio.basename($_FILES['pdf']['name']);

if(preg_match("/.pdf$/",$subir_archivo)==0)
{echo json_encode(array("success"=>false));
  return;
}

if (move_uploaded_file($_FILES['pdf']['tmp_name'], $subir_archivo)) 
{
      
}else{ 
            echo json_encode(array("success"=>false));
            return;
      }    

$numero_contrato = $_POST['numero_contrato']; 
$sql =$conn->prepare("UPDATE  contrato SET pdf= ? WHERE numero_contrato= ? ");
$sql->bindParam(1, $subir_archivo);
$sql->bindParam(2, $numero_contrato);
$sql->execute();
   
 if($sql)
 {
      echo json_encode(array("success"=>true));
 }else{ 
      echo json_encode(array("success"=>false));
 }       
$conn = null;
}

public function recepcion(){

require_once('conexion.php');
$directorio = '../uploads/recepcion/';

$subir_archivo = $directorio.basename($_FILES['uploadedfile2']['name']);


 
 $entrega = $_POST['select-entregables-recepcion']; 


function comprobar3($entrega,$conn){
  $dato="";

  $sql =$conn->prepare("SELECT id_entregable FROM recepcion WHERE id_entregable = ?");
  $sql->bindValue(1, $entrega);
  $sql->execute();

  if($sql){
    while($row=$sql->fetch()){
      $dato=$row;
      }
  }else{
    return false;
  }

  if($dato == ""){
    return true;
  }else{
    return false;
  }


}

 if(comprobar3($entrega,$conn)==true){
$sql =$conn->prepare("INSERT INTO recepcion (url_constancia,id_entregable) VALUES(?,?) ");



$sql->bindParam(1, $subir_archivo);
 $sql->bindValue(2, $entrega);
$sql->execute();

if(preg_match("/.pdf$/",$subir_archivo)==0){
  echo json_encode(array("success"=>false));
return;
}

if (move_uploaded_file($_FILES['uploadedfile2']['tmp_name'], $subir_archivo)) {      
   
    
        }else{ 
          echo json_encode(array("success"=>false));
          return;
        }       
     
      echo json_encode(array("success"=>true));
}else{ 
  echo json_encode(array("success"=>false));
}
        
 
$conn = null;
 
}

public function asignaciones(){
	require_once("conexion.php");
     
    $nombre_unidad_compradora = $_POST["nombre_unidad_compradora"];
   		
     $clave_partida = $_POST["clave_partida"];


     function comprovar4($nombre_unidad_compradora,$clave_partida,$conn){
        $dato="";
        $statement = $conn->prepare("SELECT id_partida FROM `partidas_presupuestales` WHERE id_unidad = ? AND id_presupuesto = ?");
      $statement->bindValue(1, $nombre_unidad_compradora);
      $statement->bindValue(2, $clave_partida);

      $statement->execute();

      if($statement)
      {
      while($row=$statement->fetch())
              {
      $dato=$row['id_partida'];        
      
      }
      if($dato==""){
       return true;
      }else{
        return false;
      }

      }
       return false;
      }
	 
if(comprovar4($nombre_unidad_compradora,$clave_partida,$conn)==true){
$statement = $conn->prepare("INSERT INTO partidas_presupuestales (id_unidad,id_presupuesto)VALUES(?,?)");
$statement->bindValue(1, $nombre_unidad_compradora);
$statement->bindValue(2, $clave_partida);
$statement->execute();
   
 $conn=null;

 echo json_encode(array("success"=>true));
}else{

 echo json_encode(array("success"=>false));
}

}

public function presupuesto(){
	require_once("conexion.php");
	$presupuesto=$_POST["presupuesto"];
	$clave=$_POST["clave"];
	$partida=$_POST["partida"];
	$presupuesto=str_replace([',','$'],"",$presupuesto);
 
 
	function comprovar5($clave,$partida,$conn){
	 $dato="";
	 $statement = $conn->prepare("SELECT id FROM `partida_presupuesto` WHERE clave = ? OR nombre = ?");
   $statement->bindValue(1, $clave);
   $statement->bindValue(2, $partida);
 
   $statement->execute();
 
   if($statement)
   {
   while($row=$statement->fetch())
		   {
   $dato=$row['id'];        
   
   }
   if($dato==""){
	return true;
   }else{
	 return false;
   }
 
   }
	return false;
   }
 
 
 if(comprovar5($clave,$partida,$conn)==true){
	 $statement = $conn->prepare("INSERT INTO partida_presupuesto(clave,nombre,presupuesto)VALUES(?,?,?)");    
	 $statement->bindParam(1,$clave);
	 $statement->bindParam(2,$partida);
	 $statement->bindValue(3,$presupuesto);
 
 $statement->execute();
 
 if($statement){
	  
   
 }else{
 
 }
 
 
  $conn=null;
 
  echo json_encode(array("success"=>true));
 }else{
   echo json_encode(array("success"=>false));
 }
 
}

public function modificar_presupuesto(){

	require_once("conexion.php");
	$presupuesto=$_POST["presupuesto"];
	$clave=$_POST["clave"];
	$presupuesto=str_replace([',','$'],"",$presupuesto);
 
 
	function comprovar6($clave,$presupuesto,$conn){
	 $dato="";
	 $statement = $conn->prepare("SELECT presupuesto FROM `partida_presupuesto` WHERE clave = ?");
   $statement->bindValue(1, $clave);
 
   $statement->execute();
 
   if($statement)
   {
   while($row=$statement->fetch())
		   {
   $dato=$row['presupuesto'];        
   
   }
   if($presupuesto>$dato){
	return true;
   }else{
	 return false;
   }
 
   }
	return false;
   }
 
   if(comprovar6($clave,$presupuesto,$conn)==true){
 
	 $statement = $conn->prepare("UPDATE `partida_presupuesto` SET `presupuesto`= ? WHERE clave = ?");    
	 $statement->bindValue(1,$presupuesto);
	 $statement->bindValue(2,$clave);
 
 $statement->execute();
 
  $conn=null;
 
  echo json_encode(array("success"=>true));
 }else{
   echo json_encode(array("success"=>false));
 }
 
}

public function contrato_in(){
	require_once("conexion.php");

    $nombre_unidad_compradora = $_POST["nombre_unidad_compradora"];
   $procedimientos=$_POST["procedimientos"];		
     $unidad_requirente = $_POST["unidad_requirente"];
        $nombre = $_POST["nombre"];
     $proveedor = $_POST["proveedor"];
     $numero_contrato = $_POST["numero_contrato"];
 $procedimiento_compranet = $_POST["procedimiento_compranet"];
   $contrato_compranet=$_POST["contrato_compranet"];
     $convenio_interno = $_POST["convenio_interno"];
 $objeto_contratacion = $_POST["objeto_contratacion"];
   $contrato_abierto=$_POST["contrato_abierto"];
     $documentacion_descripcion = $_POST["documentacion_descripcion"];
 	$monto_maximo= $_POST["monto_maximo"];
	$monto_minimo= $_POST["monto_minimo"];
        $partida=$_POST["partida"];
        $consolidado=$_POST["consolidado"];
        $articulo=$_POST["articulo"];
        
        
        
        function comprovar7($numero_contrato,$conn){
          $dato="";
          $statement = $conn->prepare("SELECT numero_contrato FROM contrato WHERE numero_contrato = ? ");
        $statement->bindValue(1, $numero_contrato);
        $statement->execute();

        if($statement)
        {
        while($row=$statement->fetch())
                {
        $dato=$row['numero_contrato'];        
        
        }
        if($dato==""){
         return true;
        }else{
          return false;
        }

        }
         return false;
        }


        function comprovar_presupuesto($partida,$monto_maximo,$conn){
          $dato="";
          $dato2="";
          $statement = $conn->prepare("SELECT SUM(monto_max) AS total_contratos FROM contrato AS c INNER JOIN partida_presupuesto AS pp ON c.id_partida = pp.id WHERE pp.id = ?");
        $statement->bindValue(1, $partida);
        $statement->execute();

        if($statement)
        {
        while($row=$statement->fetch())
                {
        $dato=$row['total_contratos'];        
        
        }
      }else{
        return false;
      }


        $statement = $conn->prepare("SELECT presupuesto from partida_presupuesto AS pp  WHERE pp.id = ?");
        $statement->bindValue(1, $partida);
        $statement->execute();

        if($statement)
        {
        while($row=$statement->fetch())
                {
        $dato2=$row['presupuesto'];        
        
        }
      }else{
        return false;
      }

        if($monto_maximo+$dato<=$dato2){
         return true;

        }else{

          return false;
        }


        }


        if(comprovar7($numero_contrato,$conn)==true && $consolidado>0&&comprovar_presupuesto($partida,$monto_maximo,$conn)==true){
        $statement = $conn->prepare("INSERT INTO contrato (id_unidad_compradora,id_procedimiento_contratacion,id_unidad_requirente,id_administrador,
        id_proveedor_adjudicado,id_partida,id_consolidado,numero_contrato,procedimiento_compranet,contrato_compranet,convenio_interno
        ,objeto_contratacion,contrato_abierto,documentacion_descirpcion,monto_max,monto_min,id_fundamento_legal)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $statement->bindValue(1, $nombre_unidad_compradora);
        $statement->bindValue(2, $procedimientos);
        $statement->bindValue(3, $unidad_requirente);
        $statement->bindValue(4, $nombre);
        $statement->bindValue(5, $proveedor);
        $statement->bindValue(6, $partida);
        $statement->bindValue(7, $consolidado);
        $statement->bindParam(8, $numero_contrato);
        $statement->bindParam(9, $procedimiento_compranet);
        $statement->bindParam(10, $contrato_compranet);
        $statement->bindParam(11, $convenio_interno);
        $statement->bindParam(12, $objeto_contratacion);
        $statement->bindParam(13, $contrato_abierto);
        $statement->bindParam(14, $documentacion_descripcion);
        $statement->bindValue(15, $monto_maximo);
        $statement->bindValue(16, $monto_minimo);
        $statement->bindValue(17,$articulo);

       
        $statement->execute();         
         echo json_encode(array("success"=>true));
        }
        
        
       else if(comprovar7($numero_contrato,$conn)==true && $consolidado==0&&comprovar_presupuesto($partida,$monto_maximo,$conn)==true){
          $statement = $conn->prepare("INSERT INTO contrato (id_unidad_compradora,id_procedimiento_contratacion,id_unidad_requirente,id_administrador,
          id_proveedor_adjudicado,id_partida,numero_contrato,procedimiento_compranet,contrato_compranet,convenio_interno
          ,objeto_contratacion,contrato_abierto,documentacion_descirpcion,monto_max,monto_min,id_fundamento_legal)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
          $statement->bindValue(1, $nombre_unidad_compradora);
          $statement->bindValue(2, $procedimientos);
          $statement->bindValue(3, $unidad_requirente);
          $statement->bindValue(4, $nombre);
          $statement->bindValue(5, $proveedor);
          $statement->bindValue(6, $partida);
          $statement->bindParam(7, $numero_contrato);
          $statement->bindParam(8, $procedimiento_compranet);
          $statement->bindParam(9, $contrato_compranet);
          $statement->bindParam(10, $convenio_interno);
          $statement->bindParam(11, $objeto_contratacion);
          $statement->bindParam(12, $contrato_abierto);
          $statement->bindParam(13, $documentacion_descripcion);
          $statement->bindValue(14, $monto_maximo);
          $statement->bindValue(15, $monto_minimo);
          $statement->bindValue(16, $articulo);
          
  
         
          $statement->execute();
           
           echo json_encode(array("success"=>true));
          }else{ 
            echo json_encode(array("success"=>false,"msg"=>"El contrato ya existe o se excede el presupuesto para está partida"));
          }
          $conn=null;  
}

public function contrato_fechas(){
	require_once("conexion.php");

    $notificacion_adjudicada = $_POST["innotificacionadjudicadaf"];
    $formalizacion_contrato = $_POST["informalizacioncontratof"];
    $requisicion_contrato = $_POST["inrequesicioncontratof"];
    $garantia_cumplimiento =$_POST["ingarantiacumplimientof"];
   $inicio_vigencia = $_POST["ininiciovigenciaf"];
   $sat = $_POST["insatf"];
   $imss = $_POST["inimssf"];
   $infonavit = $_POST["ininfonavitf"];
   $suficiencia = $_POST["insuficienciaf"];
   $fin_vigencia = $_POST["infinvigenciaf"];
   $numero_contrato = $_POST["infechadescripcion"];

$query=$conn->prepare("SELECT id_contrato FROM contrato WHERE numero_contrato=?");
$query->bindParam(1,$numero_contrato);
$query->execute();
if($query){
while($row=$query->fetch()){
$dato=$row['id_contrato'];
}
}

    
 $statement = $conn->prepare("INSERT INTO contrato_fechas (id_contrato,notificacion_adjudicada,formalizacion_contrato,inicio_vigencia,fin_vigencia,sat,imss,
infonavit,garantia_cumplimiento,suficiencia,requisicion_contrato)VALUES(?,?,?,?,?,?,?,?,?,?,?)");
$statement->bindValue(1, $dato);
$statement->bindParam(2, $notificacion_adjudicada);
$statement->bindParam(3, $formalizacion_contrato);
$statement->bindParam(4, $inicio_vigencia);
$statement->bindParam(5, $fin_vigencia);
$statement->bindParam(6, $sat);
$statement->bindParam(7, $imss);
$statement->bindParam(8, $infonavit);
$statement->bindParam(9, $garantia_cumplimiento);
$statement->bindParam(10, $suficiencia);
$statement->bindParam(11, $requisicion_contrato);


$statement->execute();
   
  
 
 if($statement){
echo "<script>alert('Datos ingresados correctamente')
window.location.replace('../vista/fechas.php');</script> ";
}else{
echo "<script>alert('Revisar la conexión al servidor')
window.location.replace('../vista/fechas.php');</script> ";


}
 $conn=null;       
}

public function entregas_m(){
  require_once("conexion.php");
$numero_contrato=$_POST["contrato"];
$fecha_maxima=$_POST["fecha_maxima"];
$cantidadm=$_POST["cantidadm"];


$query=$conn->prepare("SELECT id_contrato FROM contrato  WHERE numero_contrato=?");
$query->bindParam(1, $numero_contrato);
$query->execute();

if($query)
{
while($row=$query->fetch())
        {
$dato=$row['id_contrato'];


}


}

function comprobacion($conn,$dato,$fecha_maxima){
$variable="";
$query=$conn->prepare("SELECT * FROM `entregas_m` WHERE id_contrato= ? AND fecha_maxima = ?");
$query->bindValue(1, $dato);
$query->bindParam(2,$fecha_maxima);
$query->execute();

if($query)
{
while($row=$query->fetch())
        {
$variable=$row['id_entrega'];

}

}

if($variable==""){
  return true;
}else{
  return false;
}

}
if(comprobacion($conn,$dato,$fecha_maxima)== true ){
$statement = $conn->prepare("INSERT INTO entregas_m (id_contrato,fecha_maxima,cantidad)VALUES(?,?,?)");
$statement->bindValue(1, $dato);
$statement->bindParam(2, $fecha_maxima);
$statement->bindValue(3, $cantidadm);

$statement->execute();
   
  
 
 if($statement){
  echo json_encode(array("success"=>true));

}else{
  echo json_encode(array("success"=>false));

}
 $conn=null; 
}else{
  echo json_encode(array("success"=>false));
}
}
}    
?>
