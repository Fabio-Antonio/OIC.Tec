<?php
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
        
        
        
        function comprovar($numero_contrato,$conn){
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


        if(comprovar($numero_contrato,$conn)==true && $consolidado>0&&comprovar_presupuesto($partida,$monto_maximo,$conn)==true){
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
        
        
       else if(comprovar($numero_contrato,$conn)==true && $consolidado==0&&comprovar_presupuesto($partida,$monto_maximo,$conn)==true){
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
      
         ?>
