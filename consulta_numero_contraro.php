<!DOCTYPE html>
<html lang="en" dir="ltr">
<link href="https://cdn.datos.gob.mx/assets/css/main.css" rel="stylesheet">
<link href="https://cdn.datos.gob.mx/bower_components/polymer/polymer.html" rel="import">
  <head>
<link href="https://cdn.datos.gob.mx/assets/img/favicon.ico" rel="shortcut icon">
<link href="https://cdn.datos.gob.mx/bower_components/dgm-footer/dgm-footer.html" rel="import">
<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Consulta por número de contrato.gob.mx</title>

    
    
</style>
  </head>
<nav class="navbar navbar-inverse sub-navbar navbar-fixed-top">

<div class="container">

<div class="navbar-header">

<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subenlaces">

<span class="sr-only">Interruptor de Navegación</span>

<span class="icon-bar"></span>

<span class="icon-bar"></span>

<span class="icon-bar"></span>

</button>

<a class="navbar-brand" href="/">SEP</a>

</div>

<div class="collapse navbar-collapse" id="subenlaces">

<ul class="nav navbar-nav navbar-right">

<li><a href="#">Enlace</a></li>

<li class="dropdown">

<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Desplegable <span class="caret"></span></a>

<ul class="dropdown-menu" role="menu">

<li><a href="#">Acción</a></li>

<li><a href="#">Otra acción</a></li>

<li><a href="#">Algo más aquí</a></li>

<li class="divider"></li>

<li><a href="#">Enlace separado</a></li>

</ul>

</li>

</ul>

</div>

</div>

</nav>

  <body class="front">
<main>
    <table border="0">
      <tr>
        <td><img src="imagenes/sep.jpg" alt="sep" width="900" height="280"> </td>
	
        <td><h2> Consulta fecha adjudicación y formalización </h2></td>
<iframe frameborder="0" height="430" src="https://www.gob.mx" width="100%"></iframe>
      </tr>
    </table>
    </br></br></br>
    
         
            <?php
              $numero_contrato=$_GET["numero_contrato"];
             $contrato_compranet=$_GET["contrato_compranet"];
		 $numero_unidad=$_GET["numero_unidad"];
             $nombre_unidad_compradora=$_GET["nombre_unidad_compradora"];
		 $procedimiento=$_GET["procedimiento"];
             $monto_total=$_GET["monto_total"];
		 $unidad=$_GET["unidad"];
             $clave_requirente=$_GET["clave_requirente"];
              $monto_maximo=$_GET["monto_maximo"];
             $monto_minimo=$_GET["monto_minimo"];
		 $objeto_contratacion=$_GET["objeto_contratacion"];
             $procedimientos=$_GET["procedimientos"];
		 $fundamento=$_GET["fundamento"];
             $suficiencia=$_GET["suficiencia"];
		 $inicio_vigencia=$_GET["inicio_vigencia"];
             $fin_vigencia=$_GET["fin_vigencia"];
		 $notificacion_adjudicada=$_GET["notificacion_adjudicada"];
             $formalizacion_contrato=$_GET["formalizacion_contrato"];
		 $resicion_contrato=$_GET["resicion_contrato"];
             $sat=$_GET["sat"];
		 $imss=$_GET["imss"];
             $infonavit=$_GET["infonavit"];
		$garantia_cumplimiento=$_GET["garantia_cumplimiento"];
		
       ?>

<script language="javascript" type="text/javascript">

function saludo(){
        var variableEnJS = '<?=$numero_contrato?>';
        alert(variableEnJS);
         window.location="downloadpdf.php?numero_contrato="+variableEnJS;
}
</script>
<form class="form-horizontal" role="form">
<div class="form-group">
		<label class="col-sm-3 control-label" for="email-01">Numero de contrato:</label>
<div class="col-sm-9">
            <input type="text" value="<?php echo $numero_contrato;?>" class="col-sm-3 form-control" id="email-01" readonly="readonly" >
          </div>
</div>
<div class="form-group">
		<label class="col-sm-3 control-label" for="email-01">Numero de contrato compranet:</label>
<div class="col-sm-9">
<input type="text" value="<?php echo $contrato_compranet; ?>" class="col-sm-3 form-control" id="email-01" readonly="readonly" >
</div>
</div>

  <div class="form-group">
  <label class="col-sm-3 control-label" for="email-01">Suficiencia presupuestal:</label>
<div class="col-sm-9">
<input type="date" value="<?php echo $suficiencia ?>" readonly="readonly" >
</div>
</div>

             <div class="form-group">
<label class="col-sm-3 control-label" for="email-01">Numero de unidad compradora:</label>
<div class="col-sm-9">
<input type="text" value="<?php echo $numero_unidad ?>" class="form-control" id="email-01" readonly="readonly" >
</div>
</div>


    <div class="form-group">
<label class="col-sm-3 control-label" for="email-01">Inicio_vigencia</label>
<div class="col-sm-9">           
<input type="date" value="<?php echo $inicio_vigencia ?>" readonly="readonly" >
</div>
</div>

<div class="form-group"> 
<label class="col-sm-3 control-label" for="email-01">Unidad compradora</label>
<div class="col-sm-9">         
<input type="text" placeholder="(NUEVO)" value="<?php echo $nombre_unidad_compradora ?>" class="form-control" id="email-01" readonly="readonly" >
</div>
</div>


<div class="form-group">
<label class="col-sm-3 control-label" for="email-01">Fin_vigencia:</label> 
<div class="col-sm-9">           
<input type="date" value="<?php echo $fin_vigencia ?>" readonly="readonly">
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label" for="email-01">Procedimiento consolidado:</label>             <div class="col-sm-9">
<input type="text" value="<?php echo $procedimiento ?>" class="form-control" id="email-01" readonly="readonly" >
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label" for="email-01">Fecha de notificación adjudicada:</label>
<div class="col-sm-9">         
<input type="date" value="<?php echo $notificacion_adjudicada ?>" readonly="readonly" >
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label" for="email-01">Monto total de consolidado:</label>        <div class="col-sm-9">      
<input type="text" value="<?php echo "$".$monto_total ?>" class="form-control" id="email-01" readonly="readonly" >
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label" for="email-01">Fecha de formalización:</label>            <div class="col-sm-9">   
<input type="date" value="<?php echo $formalizacion_contrato ?>" readonly="readonly" >
        </div>
</div>

   
           <div class="form-group">
<label class="col-sm-3 control-label" for="email-01">Unidad Requirente:</label> 
<div class="col-sm-9">
<input type="text" value="<?php echo $unidad ?>" class="form-control" id="email-01" readonly="readonly" >
</div>
</div>

 
              <div class="form-group">
<label class="col-sm-3 control-label" for="email-01">Rescición:</label>
<div class="col-sm-9">
<input type="date" value="<?php echo $resicion_contrato ?>" readonly="readonly" >
</div> 
</div>         

             <div class="form-group">
<label class="col-sm-3 control-label" for="email-01">Clave requirente:</label>
<div class="col-sm-9">
<textarea name="comentarios_ur"  readonly="readonly" class="form-control" rows="3" ><?php echo $clave_requirente ?></textarea>
</div>
</div>

            
             <div class="form-group">
<label class="col-sm-3 control-label" for="email-01">Opinion Sat:</label>
<div class="col-sm-9">
<input type="date" value="<?php echo $sat ?>" readonly="readonly">
</div>
</div>

              <div class="form-group">
<label class="col-sm-3 control-label" for="email-01">Monto máximo:</label>
<div class="col-sm-9">
<input type="text" value="<?php echo "$".$monto_maximo ?>" class="form-control" id="email-01" readonly="readonly">
</div>
</div>

            <div class="form-group">
<label class="col-sm-3 control-label" for="email-01">Opinion IMMS:</label>
<div class="col-sm-9">
<input type="date" value="<?php echo $imss ?>" readonly="readonly">
     </div>
</div>
     
            <div class="form-group">
<label class="col-sm-3 control-label" for="email-01">Monto minimo:</label>
<div class="col-sm-9">
<input type="text" value="<?php echo "$".$monto_minimo ?>" class="form-control" id="email-01" readonly="readonly">
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label" for="email-01">Opinion INFONAVIT:</label>
<div class="col-sm-9">
<input type="date" value="<?php echo $infonavit ?>" readonly="readonly">
</div>
</div>          

<div class="form-group">
<label class="col-sm-3 control-label" for="email-01">Objeto del contrato:</label>
<div class="col-sm-9">
<input type="text" value="<?php echo $objeto_contratacion ?>" class="form-control" id="email-01" readonly="readonly" >
</div>
</div>

            <div class="form-group">
<label class="col-sm-3 control-label" for="email-01">Garantia de cumplimiento:</label>
<div class="col-sm-9">
<input type="date" value="<?php echo $garantia_cumplimiento ?>" readonly="readonly">
</div>
</div>
             <div class="form-group">
<label class="col-sm-3 control-label" for="email-01">Procedimiento de contratación:</label>
<div class="col-sm-9">
<textarea name="comentarios_pc"  readonly="readonly" class="form-control" rows="3"><?php echo $procedimientos ?></textarea>
</div>
</div>
            <div class="form-group">
<label class="col-sm-3 control-label" for="email-01">Fundamento legal:</label>
<div class="col-sm-9">
<textarea name="comentarios_fl"  readonly="readonly" class="form-control" rows="3"><?php echo $fundamento ?></textarea>
</div>
</div>

<div class="form-group">

<div class="col-sm-offset-3 col-sm-9">

<div class="checkbox">

<label>

<input type="checkbox">

Contrato abierto

</label>

</div>

</div>

</div>

    </form>
        
        <table>
          
         
            <tr>
              </br></br></br>
              <td><button onclick="location.href='sistema_numero_contrato.html'"style="width:210px; height:50px"> Anterior </button></td>
              <td><button  onclick="saludo();" style="width:210px; height:50px"> Descargar pdf </button></td>
              <td><button onclick="location.href=''"style="width:210px; height:50px"> Constancia de recepción </button></td>
              <td><button onclick="location.href=''"class="btn btn-primary"> Convenios modificados </button></td>
              <td><button onclick="location.href=''"style="width:210px; height:50px"> Documentacion adicional </button></td>
              <td><button onclick="location.href=''"style="width:210px; height:50px"> Facturas </button></td>
            </tr>
          </center>
        </table>
      </div>
    </div>
<dgm-footer></dgm-footer> 
</main>
  </body>
</html>
