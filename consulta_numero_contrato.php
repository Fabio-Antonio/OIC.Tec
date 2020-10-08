<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
<link href="https://cdn.datos.gob.mx/assets/img/favicon.ico" rel="shortcut icon">
    <title> CONSULTA POR NUMERO DE CONTRATO </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
    <link href="https://cdn.datos.gob.mx/assets/css/main.css" rel="stylesheet">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      </head>
  <body class="front">
    <main>
      <nav class="navbar navbar-inverse sub-navbar navbar-fixed-top" style="height: 55px; ">
        <div class="container">
          <div class="navbar-header" style="margin-top: 10px;">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subenlaces">
            <span class="sr-only">Interruptor de Navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="principal2.php" id="besa2" >B.E.S.A</a>
            <a> <img data-v-4a3754a3="" src="icons/lf.png" alt="logo gobierno de méxico" class="logos" style="width: 80%;height: 50%; margin-top: -100px; margin-bottom: -25px; margin-left: 420px "></a>
          </div>

          <div class="collapse navbar-collapse" id="subenlaces" style=" width:108%; margin-top: -30px;">
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
    <br><br><br><br>
    <!------------------------------------------------->
    <!------------------------------------------------->
    <!---------INICIO DE MENU A LA IZQUIERDA-------------------------->
    <!------------------------------------------------->
    <!------------------------------------------------->

    <div class="barraizquierda">


    <!-- Sidebar -->
    <div class="barra">


    <!-- Sidebar -->

    <div class="w3-sidebar w3-bar-block w3-animate-left" style="display:none;z-index:5" id="mySidebar">
    <button  id="ce" class="w3-bar-item w3-button w3-large" onclick="w3_close()">Cerrar &times;</button>
    <img src="icons/lf.png" alt="sfp" width="145" height="60">
    <a  class="w3-bar-item w3-button"></a>
    <a href="principal.php" class="w3-bar-item w3-button">Inicio</a>
    <a href="alta.html" class="w3-bar-item w3-button">Usuarios</a>
    <a href="#" class="w3-bar-item w3-button" data-toggle="modal" data-target="#mymodal2" >Contacto</a>
     <a href="#" class="w3-bar-item w3-button" data-toggle="modal" data-target="#mymodal3">Nueva Partida</a>

    <a href="cerrar.php" class="w3-bar-item w3-button">Logout -></a>

    </div>

    <!-- Page Content -->
    <div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

    <div>
    <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
    </div>
    </div>
    </div>
    <script>
    function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
    }
    </script>

<div id="centro">
  <div class="container1" >
    <div class="row" id="todo">
      <div class='col-sm-150 col-md-150 col-ld-150' id="todo">
        <div id="tit">
          <h2 class="ts">CONSULTA POR NÚMERO DE CONTRATO </h2>
        </div>


        <!--select-->
        <div id="selec">
          <h3 class="selc"> Seleccionar el contrato a consultar </h3>
          <!--inicio de buscar -->
          <div id="busca">
            <div class="btn-group bootstrap-select form-control hidden-xs hidden-sm">
            <button type="button" class="btn dropdown-toggle bs-placeholder btn-default" id="drop" data-toggle="dropdown" role="button" title="Filtrar por tema">
              <span class="filter-option pull-left">Buscar</span>
              <span class="bs-caret"></span>
            </button>
        <div class="dropdown-menu open" role="combobox">
                <ul id="lista" class="dropdown-menu inner" role="listbox" aria-expanded="false">
       <?php
                 
                $flag=unserialize($_POST['flag']);
                $valor=json_encode($flag);

                foreach ($flag as $key=> $val) {

                    ?>

                 <li data-original-index="<?php print($val['id_contrato']);?>" id="<?php print($val['id_contrato']);?>">
                  <a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false">
                    <span  class="text"><?php print($val['numero_contrato']); ?></span>
                    <span class="glyphicon glyphicon-ok check-mark"></span>
                  </a>
                </li>
  		 <?php
                }


  ?>

      </ul>
            </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

          <script lenguage="javascript" type="text/javascript">

              $("#lista li").on("click",function() {
                  var value = $(this).text();
      var value2=value.trim();
                  var Variable='<?=$valor?>';
                  var sOptionVal = $(this).val();
                   var bool=confirm("Se desea consultar: "+value2);

     if(bool){
          // window.location="consulta.php?numero_contrato="+value2+"&flag="+Variable;
	  $.post({url: "consulta.php", 
    data: { "numero_contrato": value2, "flag": Variable }
   }).done(function( data ) { 
        $( "main" ).html(data);
    });

    }else{
  alert("solicitud cancelada");
  }
            });
             </script>

          </div>
  <div class="modal later-modal">
    <p>Select a time to deliver.</p>
  </div>
       <button id ="ser"  class="btn btn-primary">
          <div class="glyphicon glyphicon-search"></div>
          </button>
          </div>


   <?php

  if (isset($_POST['numero_contrato'])) {


                $numero_contrato=$_POST["numero_contrato"];
               $contrato_compranet=$_POST["contrato_compranet"];
       $numero_unidad=$_POST["numero_unidad"];
               $nombre_unidad_compradora=$_POST["nombre_unidad_compradoras"];
       $procedimiento=$_POST["procedimiento"];
               $monto_total=$_POST["monto_total"];
       $unidad=$_POST["unidad"];
               $clave_requirente=$_POST["clave_requirente"];
                $monto_maximo=$_POST["monto_maximo"];
               $monto_minimo=$_POST["monto_minimo"];
       $objeto_contratacion=$_POST["objeto_contratacion"];
               $procedimientos=$_POST["procedimientos"];
       $fundamento=$_POST["fundamento"];
               $suficiencia=$_POST["suficiencia"];
       $inicio_vigencia=$_POST["inicio_vigencia"];
               $fin_vigencia=$_POST["fin_vigencia"];
       $notificacion_adjudicada=$_POST["notificacion_adjudicada"];
               $formalizacion_contrato=$_POST["formalizacion_contrato"];
       $resicion_contrato=$_POST["resicion_contrato"];
               $sat=$_POST["sat"];
       $imss=$_POST["imss"];
               $infonavit=$_POST["infonavit"];
      $garantia_cumplimiento=$_POST["garantia_cumplimiento"];

      }else{
  $numero_contrato="";
  $contrato_compranet="";
   $numero_unidad="";
   $nombre_unidad_compradora="";
  $procedimiento="";
   $monto_total="";
  $unidad="";
   $clave_requirente="";
  $monto_maximo="";
  $monto_minimo="";
  $objeto_contratacion="";
  $procedimientos="";
  $fundamento="";
  $suficiencia="";
   $inicio_vigencia="";
  $fin_vigencia="";
  $notificacion_adjudicada="";
  $formalizacion_contrato="";
  $resicion_contrato="";
  $sat="";
  $imss="";
  $infonavit="";
  $garantia_cumplimiento="";
  }
         ?>

       </div>



        <!--final select-->

         <div class="dtextnumcontracon">
           <label class = "textnumcontracon">Número de contrato</label>
           <input  id ="intextnumcontracon" class="form-control" type="text" placeholder="NÚMERO DE CONTRATO"  readonly="readonly" value="<?php echo $numero_contrato;?>">
         </div>

        <div class="dtextnumcontratocomcon">
          <label class="textnumcontratocomcon">Número Contrato Compranet</label>
          <input id="intextnumcontratocomcon" class="form-control"  placeholder="Número Contrato Compranet" type="text"  readonly="readonly" value="<?php echo $contrato_compranet; ?>" >
        </div>
        <div class="dtextsufipresupcon">
          <label class="textsufipresupcon">Suficiencia Presupuestal</label>
          <input id="intextsufipresupcon" class="form-control" placeholder="Suficiencia Presupuestas" type="text"  readonly="readonly"  value="<?php echo $suficiencia ?>">
        </div>
        <div class="dtextproceconsocon">
          <label class="textproceconsocon">Procedimiento Consolidado</label>
          <input id="indtextproceconsocon" class="form-control"  placeholder="Procedimiento Consolidado" type="text"  readonly="readonly" value="<?php echo $procedimiento ?>">
        </div>
        <div class="dtextiniciovigcon">
          <label class="textiniciovigcon">Inicio Vigencia</label>
          <input id="indtextiniciovigcon" class="form-control" placeholder="Inicio Vigencia" type="text"  readonly="readonly"  value="<?php echo $inicio_vigencia ?>" >
        </div>
        <div class="dtextfinvigenciacon">
          <label class="textfinvigenciacon">Fin Vigencia</label>
          <input id="indtextfinvigenciacon" class="form-control" placeholder="Fin Vigencia" type="text"  readonly="readonly" value="<?php echo $fin_vigencia ?>">
        </div>
        <div class="dtextfechadnotifadcon">
          <label class="textfechadnotifadcon">Fecha de Notificación Adjudicación</label>
          <input id="indtextfechadnotifadcon" class="form-control" placeholder="Fecha de Notificación Adjudicación" type="text"  readonly="readonly" value="<?php echo $notificacion_adjudicada ?>"  >
        </div>
        <div class="dtextfechadformalcon">
            <label class="textfechadformalcon">Fecha de Formalización</label>
            <input id="indtextfechadformalcon" class="form-control" placeholder="Fecha de Formalización" type="text"  readonly="readonly" value="<?php echo $formalizacion_contrato ?>" >
        </div>
        <div class="dtextmontototconcon">
            <label class="textmontototconcon">Monto Total Consolidado</label>
            <input id="indtextmontototconcon" class="form-control"  placeholder="Monto Total Consolidado" type="text"  readonly="readonly" value="<?php echo "$".$monto_total ?>">
        </div>
        <div class="dunidadrequircon">
            <label class="unidadrequircon">Unidad Requirente</label>
            <input id="indunidadrequircon" class="form-control" placeholder="Unidad Requirente" type="text"  readonly="readonly" value="<?php echo $unidad ?>">
        </div>
        <div class="dtextmontmaxcon">
          <label class="textmontmaxcon">Monto Máximo</label>
          <input id="indtextmontmaxcon" class="form-control" placeholder="Monto Máximo" type="text"  readonly="readonly" value="<?php echo "$".$monto_maximo ?>">
        </div>
        <div class="dtextmontmincon">
          <label class="textmontmincon">Monto Minimo</label>
          <input id="indtextmontmincon" class="form-control" placeholder="Monto Minimo" type="text"  readonly="readonly" value="<?php echo "$".$monto_minimo ?>">
        </div>
        <div class="dtextopinsatcon">
          <label class="textopinsatcon">Opinion SAT</label>
          <input id="indtextopinsatcon" class="form-control"  placeholder="Opinion SAT" type="text"  readonly="readonly" value="<?php echo $sat ?>">
        </div>
        <div class="dtextopinininfocon">
            <label class="textopinininfocon">Opinion INFONAVIT</label>
            <input id="indtextopinininfocon" class="form-control" placeholder="Opinion INFONAVIT" type="text"  readonly="readonly" value="<?php echo $infonavit ?>">
        </div>
        <div class="dtextobjetconcon">
            <label class="textobjetconcon">Objeto del Contrato</label>
            <input id="indtextobjetconcon" class="form-control" placeholder="Objeto del Contrato" type="text"  readonly="readonly" value="<?php echo $objeto_contratacion ?>">
        </div>
        <div class="dtextfundalegcon">
            <label class="textfundalegcon">Fundamento Legal</label>
            <input id="indtextfundalegcon" class="form-control"  placeholder="Fundamento Legal" type="text"  readonly="readonly"  value="<?php echo $fundamento ?>">
        </div>
        <div class="dtextgarantidconcon">
            <label class="textgarantidconcon">Garantia de Contratación</label>
            <input id="indtextgarantidconcon" class="form-control" placeholder="Procedimiento de Contratación" type="text"  readonly="readonly" value="<?php echo $procedimientos ?>">
        </div>
        <div class="dtextgarantcumpcon">
            <label class="textgarantcumpcon">Garantia de Cumplimiento</label>
            <input id="indtextgarantcumpcon" class="form-control" placeholder="Garantia de Cumplimiento" type="text"  readonly="readonly" value="<?php echo $garantia_cumplimiento ?>" >
        </div>
        <div class="dtextunidadcomcon">
          <label class="textunidadcomcon">Número Unidad Compradora</label>
          <input id="intextunidadcomcon" class="form-control" placeholder="Número de Unidad Compradora" type="text"  readonly="readonly" value="<?php echo $numero_unidad; ?>">
	   <label class="textunidadcomcon">Unidad Compradora</label>	
          <textarea id="texatextunidadcomcon" class="form-control" placeholder="" rows="3"  readonly="readonly" ><?php echo $nombre_unidad_compradora; ?></textarea>
        </div>
        <div class="dtextresicon">
            <label class="textresicon">Rescision</label>
            <input id="indtextresicon" class="form-control"  placeholder="Rescision" type="text"  readonly="readonly" value="<?php echo $resicion_contrato ?>" >
            <textarea id="texadtextresicon" class="form-control" placeholder="" rows="3"  readonly="readonly"> <?php echo $clave_requirente ?></textarea>
        </div>
        <div class="dche">
            <label id="ccp" class="col-sm-20">Contrato Abierto</label>
            <input id="ck" type="checkbox" name="Entregables">
        </div>


      <div id="dbtdescargar">
       <button class="btn btn-primary btn-lg" onclick="saludo();" id="btdescargar" > Descargar pdf </button>
      </div>
      <div id="dbtregcon">
       <button class="btn btn-primary btn-lg" id="btregrecon" onclick="window.location.href='principal2.php'"> Regresar </button>
      </div>

      </div>
    </div>
  </div>
</div>


<script language="javascript" type="text/javascript">

function saludo(){
        var variableEnJS = '<?=$numero_contrato?>';
        alert(variableEnJS);
         window.location="downloadpdf.php?numero_contrato="+variableEnJS;
}
</script>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"
			integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY"
			crossorigin="anonymous">
		</script>
		<script src="js/bootstrap.min.js"></script>

 </main>

 <footer>

   <div class="contenedor-todo-footer">

   <div class="contenedor-body">

     <div class="columna1">
       <h1>  </h1>
       <img src="itt.png" alt="ITT">
       <h1> </h1>
       <img src="indice.png" alt="TECNM">
       <h1> </h1>
       <img src="ff.png" alt="logo gobierno de méxico" >
     </div>

     <div class="columna2">
       <h1>B.E.S.A</h1>
       <ul class="list-unstyled">
     <li>
       <p align="center">
       <img src="icons/user.svg" alt="">
        Responsable del programa: Ing. David Rogelio Rodríguez Arias
      </p>
     </li>
     <li>
       <div class="tel">
       <p align="justify">
       <img src="icons/mail.svg" alt="">
        drrodriguez@nube.sep.gob.mx
        </div>
     </p>
     </li>
     <li>
       <div class="tel">
       <p align="justify">
       <img src="icons/phone.svg" alt="">
        36018650 ext. 66125
        </div>
     </p>
     </li>
   </ul>
     </div>

     <div class="columna3">
       <h1>Órgano Interno de Control de la SEP</h1>
       <ul class="list-unstyled">
     <li>
       <p align="center">
       <img src="icons/home.svg" alt="">
        Avenida Universidad #1074, col. Xoco, alcaldía Benito Juárez, C.P. 03330, CDMX
      </p>
     </li>
   </li>
   <li>
   <div class="tel2">
   <p align="justify">
   <img src="icons/mail.svg" alt="">
    arturo.orci@nube.sep.gob.mx
    </div>
 </p>
 </li>
     <li>
       <div class="tel2">
       <p align="justify">
       <img src="icons/phone.svg" alt="">
       36068650 ext.66429
        </div>
     </p>
     </li>
   </ul>

     </div>

     <div class="columna4">
     <h1>Instituto Tecnológico de Tláhuac</h1>
     <ul class="list-unstyled">
     <div class="tel2">
       <li>
     <p align="center">
     <img src="icons/home.svg" alt="">
      Av. Estanislao Ramírez # 301 Colonia Ampliación Selene C.P. 13430 Tláhuac CDMX
    </p>
   </li>
 </div>
   <li>
     <div class="tel2">
     <p align="justify">
     <img src="icons/phone.svg" alt="">
      7312-5614 | 7312-5616 | 5841-0560|
      </div>
   </p>
   </li>
 </ul>
 </div>
   </div>

   </div>

   <div class="contenedor-footer">
     <div class="copyright">
       <a>&copy; 2020 Todos los Derechos Reservados</a>
     </div>
     <div class="autores">
       <a>Antonio Lorenzana Fabio Antonio</a> |
       <a>Flores Reyes Jahir</a> |
       <a>Reyes Villafranca Jose Pedro</a>
     </div>
   </div>

 </footer>
  </body>
</html>
