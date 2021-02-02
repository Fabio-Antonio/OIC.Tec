<?php
class tablas{
    public function asignaciones(){
        require_once("conexion.php");

        $statement = $conn->prepare("SELECT nombre_unidad_compradora,numero_unidad,nombre,presupuesto FROM partidas_presupuestales AS pp INNER
        JOIN unidad_compradora AS uc ON pp.id_unidad = uc.id_unidad_compradora INNER JOIN partida_presupuesto AS pap ON pp.id_presupuesto= pap.id");

        $statement->execute();
        $flag=[];
        if($statement){
            while($row = $statement->fetch(PDO::FETCH_ASSOC)){
            $flag[]=$row;
            }
        }

        $results = array(
        "sEcho" => 1,
        "iTotalRecords" => count($flag),
        "iTotalDisplayRecords" => count($flag),
        "aaData"=>$flag);
        echo json_encode($results);
    }

    public function procedimientos(){
        require_once("conexion.php");

$statement = $conn->prepare("SELECT procedimientos,Articulo,setenta_treinta FROM `fundamento_legal` AS fl INNER JOIN procedimientos_contratacion AS pc ON fl.id_procedimientos_contratacion = pc.id_procedimiento_contratacion");

$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $flag[]=$row;
    }
}

$results = array(
"sEcho" => 1,
"iTotalRecords" => count($flag),
"iTotalDisplayRecords" => count($flag),
"aaData"=>$flag);
echo json_encode($results);
    }

public function notificacion(){
    require_once("conexion.php");

$statement = $conn->prepare("SELECT numero_contrato,notificacion_adjudicada,requisicion_contrato,suficiencia FROM contrato_fechas AS cf INNER JOIN contrato AS c ON c.id_contrato = cf.id_contrato");

$statement->execute();
$flag=[];
if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $flag[]=$row;
    }
    
}

$results = array(
"sEcho" => 1,
"iTotalRecords" => count($flag),
"iTotalDisplayRecords" => count($flag),
"aaData"=>$flag);
echo json_encode($results);
}
public function formalizacion(){
    require_once("conexion.php");

$statement = $conn->prepare("SELECT numero_contrato,formalizacion_contrato,sat,imss,infonavit,garantia_cumplimiento FROM `contrato_fechas` AS cf INNER JOIN contrato AS c ON c.id_contrato = cf.id_contrato");

$statement->execute();
$flag=[];
if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $flag[]=$row;
    }
}

$results = array(
"sEcho" => 1,
"iTotalRecords" => count($flag),
"iTotalDisplayRecords" => count($flag),
"aaData"=>$flag);
echo json_encode($results);
}

public function informet(){
    require_once("conexion.php");

$unidada=$_GET["unidada"];

$statement = $conn->prepare("SELECT numero_contrato, monto_max, procedimientos,nombre,articulo FROM contrato AS c INNER JOIN unidad_compradora AS uc ON c.id_unidad_compradora = uc.id_unidad_compradora INNER JOIN partida_presupuesto AS pp ON c.id_partida = pp.id INNER JOIN procedimientos_contratacion AS pc ON c.id_procedimiento_contratacion = pc.id_procedimiento_contratacion INNER JOIN  fundamento_legal AS fl ON c.id_fundamento_legal = fl.id_fundamento_legal WHERE fl.setenta_treinta = 30 AND uc.nombre_unidad_compradora = ?;");

$statement->bindParam(1,$unidada);
$statement->execute();
$flag=[];

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $flag[]=$row;
    }
    
}


$results = array(
"sEcho" => 1,
"iTotalRecords" => count($flag),
"iTotalDisplayRecords" => count($flag),
"aaData"=>$flag);
echo json_encode($results);

}

public function informea(){
    require_once("conexion.php");

$unidada=$_GET["unidada"];
$statement = $conn->prepare("SELECT numero_contrato, monto_max, procedimientos,nombre,articulo FROM contrato AS c INNER JOIN unidad_compradora AS uc ON c.id_unidad_compradora = uc.id_unidad_compradora INNER JOIN partida_presupuesto AS pp ON c.id_partida = pp.id INNER JOIN procedimientos_contratacion AS pc ON c.id_procedimiento_contratacion = pc.id_procedimiento_contratacion INNER JOIN fundamento_legal AS fl ON c.id_fundamento_legal= fl.id_fundamento_legal WHERE fl.setenta_treinta = 70 AND uc.nombre_unidad_compradora = ?;");

$statement->bindParam(1,$unidada);
$statement->execute();
$flag=[];
if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $flag[]=$row;
    }
    
}

$results = array(
"sEcho" => 1,
"iTotalRecords" => count($flag),
"iTotalDisplayRecords" => count($flag),
"aaData"=>$flag);
echo json_encode($results);
}

public function top_contratos(){
    require_once("conexion.php");


    $query=$conn->prepare("SELECT  numero_contrato, unidad, nombre, monto_max  FROM contrato AS c INNER JOIN unidad_requirente AS ur ON c.id_unidad_requirente = ur.id_requirente INNER JOIN proveedor_adjudicado AS pa ON c.id_proveedor_adjudicado = pa.id_proveedor ORDER BY monto_max DESC LIMIT 10;");
   
    $query->execute();
   $flag=[];
     if($query)
     {
       while($row=$query->fetch(PDO::FETCH_ASSOC))
       {
         $flag[]=$row;
       }
     }
   
   
   $results = array(
   "sEcho" => 1,
   "iTotalRecords" => count($flag),
   "iTotalDisplayRecords" => count($flag),
   "aaData"=>$flag);
   echo json_encode($results);
   
   
   
}

public function entregables(){
    require_once("conexion.php");

$numero_contrato=$_GET["numero_contrato"];
$statement = $conn->prepare("SELECT numero_contrato,fecha_entrega,fecha_maxima,nombre_entregable,cantidad_entregable,direccion_entregable,descripcion,((porcentaje*precio_unitario)*cantidad_entregable)*(DATEDIFF(e.fecha_entrega,em.fecha_maxima)) AS penalizacion,porcentaje,precio_unitario, (DATEDIFF(e.fecha_entrega,em.fecha_maxima)) AS dias,url_constancia FROM entregables AS e INNER JOIN contrato AS c ON c.id_contrato= e.id_contrato INNER JOIN entregas_m AS em ON c.id_contrato = em.id_contrato INNER JOIN recepcion AS r ON r.id_entregable = e.id_entregable WHERE em.id_entrega = e.id_intrega_m AND c.numero_contrato = ?");
$statement->bindParam(1,$numero_contrato);
$statement->execute();
$flag=[];
if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $flag[]=$row;
    }
}

$results = array(
"sEcho" => 1,
"iTotalRecords" => count($flag),
"iTotalDisplayRecords" => count($flag),
"aaData"=>$flag);
echo json_encode($results);

}

public function tabla_proveedor(){
    require_once("conexion.php");

$statement = $conn->prepare("SELECT numero_contrato,contrato_compranet,objeto_contratacion,monto_max,nombre,rfc FROM contrato AS c INNER JOIN proveedor_adjudicado AS pa ON c.id_proveedor_adjudicado = pa.id_proveedor");

$statement->execute();
$flag=[];
if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $flag[]=$row;
    }
}

$results = array(
"sEcho" => 1,
"iTotalRecords" => count($flag),
"iTotalDisplayRecords" => count($flag),
"aaData"=>$flag);
echo json_encode($results);
}

public function tabla_partidas(){
    require_once("conexion.php");

$clave=$_GET["clave"];
$statement = $conn->prepare("SELECT numero_contrato,objeto_contratacion,monto_max,nombre FROM contrato AS c INNER JOIN partida_presupuesto AS pp ON c.id_partida = pp.id WHERE pp.clave = ?");

$statement->bindParam(1,$clave);
$statement->execute();

if($statement){
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
       $flag[]=$row;
    }
    
}

$results = array(
"sEcho" => 1,
"iTotalRecords" => count($flag),
"iTotalDisplayRecords" => count($flag),
"aaData"=>$flag);
echo json_encode($results);
}

}

?>
