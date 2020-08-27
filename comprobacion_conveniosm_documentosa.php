<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
      <title>Comprobacion_conveniosm_documentosa</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
    <link href="https://cdn.datos.gob.mx/assets/css/main.css" rel="stylesheet">
    <link href="https://cdn.datos.gob.mx/assets/img/favicon.ico" rel="shortcut icon">
    <link href="https://cdn.datos.gob.mx/bower_components/dgm-footer/dgm-footer.html" rel="import">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>

  <body class="front">
    <main>
      <nav class="navbar navbar-inverse sub-navbar navbar-fixed-top" style="height: 55px">
        <div class="container">
          <div class="navbar-header" >
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subenlaces">
            <span class="sr-only">Interruptor de Navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="principal.php" id="besa" >B.E.S.A</a>
            <a> <img data-v-4a3754a3="" src="icons/lf.png" alt="logo gobierno de méxico" class="logos" style="width: 80%;height: 50%; margin-top: -100px; margin-bottom: -25px; margin-left: 420px "></a>
          </div>

          <div class="collapse navbar-collapse" id="subenlaces" style=" width:110%; margin-top: -30px;">
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
    <!-- ----------------------------------------------->
    <!-- ----------------------------------------------->
    <!--INICIO DE MENU A LA IZQUIERDA-------------------------->
    <!-- ----------------------------------------------->
    <!-- ----------------------------------------------->

</main>
<div class="barraizquierda">


<!-- Sidebar -->
<div class="barra">


<!-- Sidebar -->

<div class="w3-sidebar w3-bar-block w3-animate-left" style="display:none;z-index:5" id="mySidebar">
<button  id="ce" class="w3-bar-item w3-button w3-large" onclick="w3_close()">Cerrar &times;</button>
<img src="icons/lf.png" alt="sfp" width="145" height="60">
<a  class="w3-bar-item w3-button"></a>
<a href="#" class="w3-bar-item w3-button">Inicio</a>
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
<!------------------------------------------------------>
<!------------------------------------------------------>
<!-- INICIA REGISTRO------------------------------------>
<!------------------------------------------------------>
<!------------------------------------------------------>


<script lenguage="javascript" type="text/javascript">
         function mostrarTexts(){
    var selObj = document.getElementById('scontra2');
      var montomax  = (document.getElementById('montomax').value);
     var montomin  = (document.getElementById('montomin').value);
     var iniciovigencia  = (document.getElementById('finiciovigencia').value);
     var finvigencia  = (document.getElementById('finvigencia').value);
     var fechaentrega = (document.getElementById('fechaentrega').value);

	var fecha1= new Date(iniciovigencia);
	 var fecha2= new Date(finvigencia);

	if(String(fechaentrega)==""){
	alert("El campo Fecha Entrega no puede estar vacío");
        document.getElementById("fechaentrega").focus();
        return;
	}
	 if(montomax<0||montomax.length==0){
	alert("El campo Monto Máximo es invalido");
	document.getElementById("montomax").focus();
	return;

	}
	  if(montomin<0||montomin.length==0){
        alert("El campo Monto Minimo es invalido");
        document.getElementById("montomin").focus();
        return;

        }
	  if(montomax<montomin){
        alert("El campo Monto Minimo no puede ser mayor al Monto Máximo");
        document.getElementById("montomin").focus();
        return;

        }
	 if(String(iniciovigencia)==""){
        alert("El campo Inicio Vigencia no puede estar vacío");
        document.getElementById("finiciovigencia").focus();
        return;
        }
	 if(String(finvigencia)==""){
        alert("El campo Fin Vigencia no puede estar vacío");
        document.getElementById("finvigencia").focus();
        return;
        }
        if(fecha1>fecha2){
         alert("La fecha del campo  Inicio Vigencia no puede ser mayor a la fecha del campo Fin Vigencia");
        return;
	}


       var selIndex = selObj.options[selObj.selectedIndex].text;
         alert(selIndex);
         window.location="conveniosm.php?numero_contrato="+selIndex+"&monto_maximo="+montomax+"&monto_minimo="+montomin+"&inicio_vigencia="+iniciovigencia+
"&fin_vigencia="+finvigencia+"&fecha_entrega="+fechaentrega;
    }
</script>




<script lenguage="javascript" type="text/javascript">
         function mostrarText(){
    var selObj = document.getElementById('scontra');
      var fechadoc  = (document.getElementById('fechadoc').value);
       var descrip = (document.getElementById('descripcion').value);
       var selIndex = selObj.options[selObj.selectedIndex].text;

       if(String(fechadoc)==""){
	alert("El campo Fecha del documento no pueder estar vacio");
        document.getElementById("fechadoc").focus();
        return;
	}
        if(descrip.length==0||!(/^[A-Za-z]+$/.test(descrip))){
	alert("El campo Descripción es invalido");
	document.getElementById("descripcion").focus();
        return;
	}

         alert(selIndex);
        window.location="comprobacion.php?numero_contrato="+selIndex+"&fecha_documento="+fechadoc+"&descripcion="+descrip;
    }
</script>



<script lenguage="javascript" type="text/javascript">
         function mostrarText3(){
    var selObj = document.getElementById('scontra3');
      var fechadoc  = (document.getElementById('fechadoc2').value);
       var descrip = (document.getElementById('descripcion2').value);
       var selIndex = selObj.options[selObj.selectedIndex].text;

        if(String(fechadoc)==""){
        alert("El campo Fecha del documento no pueder estar vacio");
        document.getElementById("fechadoc2").focus();
        return;
        }
        if(descrip.length==0||!(/^[A-Za-z]+$/.test(descrip))){
        alert("El campo Descripción es invalido");
        document.getElementById("descripcion2").focus();
        return;
        }

         alert(selIndex);
         window.location="documentosa.php?numero_contrato="+selIndex+"&fecha_documento="+fechadoc+"&descripcion="+descrip;
    }
</script>

  <div id="contecom">
    <div class="container1">
      <div class="row">
        <div class='col-sm-20 col-md-20 col-ld-20'>
          <h2 class="fuu"> COMPROBACIÓN </h2>
          <div class="dtextcon">
          <label id="textcon" class="control-label"> Contrato: </label>
          </div>
          <select id="scontra" class="scontra" name="scontra">
            <?php
                      if (isset($_GET["flag"])) {
                    $flag=unserialize($_GET["flag"]);
                    $valor=serialize($flag);
                    foreach ($flag as $key=> $val) {
                        ?>
                        <option value="<?php print($val['id_contrato']); ?>"><?php print($val['numero_contrato']); ?></option>
                        <?php
                    }

           }
                        ?>

          </select>
          <div class="dfechado">
            <div id="dfechad">
              <label id="tfechdoc" class="control-label"> Fecha del documento: </label>
            </div>
            <div id="dfechadoc">
              <input class="form-control" id="fechadoc" name="fecha" type="date" >
            </div>
          </div>
          <div id="divdes">
            <label id="textdes" class="control-label"> Descripción: </label>
            <textarea  id="descripcion" class="form-control" rows="5"></textarea>
          </div>
          <div id="dbtncomprobacion">
              <button type="button" id="bcomprobacion" class="btn btn-primary" onclick="mostrarText();" name="bcomprobacion"> Guardar </button>
              <button type="button" id="bregresar" class="btn btn-primary"  onclick="location.href='principal.php'" name="bregresar"> Regresar </button>
          </div>
        </div>
      </div>
    </div>

      <div id="contenedorconvenios">
        <div class="container1">
          <div class="row">
            <div class='col-sm-20 col-md-20 col-ld-20'>
                <h2 class="fuu"> CONVENIOS MODIFICADOS </h2>
              <div id ="dcontrato">
                <label id="textconm" class="control-label"> Contrato: </label>
              </div>
                <div id ="dscontrato2">
                <select id="scontra2" class="scontra2" name="scontra2">

		 <?php
                if (isset($_GET["flag"])) {
              $flag=unserialize($_GET["flag"]);
              $valor=serialize($flag);
              foreach ($flag as $key=> $val) {
                  ?>
                  <option value="<?php print($val['id_contrato']); ?>"><?php print($val['numero_contrato']); ?></option>
                  <?php
              }

}
                  ?>


                </select>
              </div>
              <div id="dfechaentrega">
                <div id="dtextfechaentrega">
                <label id="textfechaentrega" class="control-label"> Fecha entraga: </label>
              </div>
                <input class="form-control" id="fechaentrega" name="fechaentrega" type="date" >
            </div>
            <div id="dmontomaximo">
              <div id="dtextmontomaximo">
                <label id="textmontomaximo" class="control-label"> Monto maximo: </label>
              </div>
              <input class="form-control" id="montomax" placeholder="Monto Maximo" min="0" name="montomax" type="number" step="0.1" >
            </div>
            <div id="dmontominimo">
              <div id="dtextmontominimo">
                <label id="textmontominimo" class="control-label"> Monto minimo: </label>
              </div>
              <input class="form-control" id="montomin" placeholder="Monto Minimo" min="0" name="montomin" type="number" step="0.1" >
            </div>
            <div id="diniciovigencia">
              <div id="dtextiniciovigencia">
                <label id="textiniciovigencia" class="control-label"> Inicio vigencia: </label>
              </div>
                <input class="form-control" id="finiciovigencia" name="iniciovigencia" type="date" >
            </div>
            <div id="dfinvigencia">
              <div id="dtextfinvigencia">
                <label id="textfinvigencia" class="control-label"> Fin vigencia: </label>
              </div>
              <input class="form-control" id="finvigencia" name="finvigencia" type="date" >
            </div>

            <div id="dbtncomprobacion">
                <button type="button" id="bcomprobacion" class="btn btn-primary" onclick="mostrarTexts();" name="button"> Guardar </button>
                <button type="button" id="bregresar" class="btn btn-primary"  onclick="location.href='principal.php'" name="bregresar"> Regresar </button>
            </div>
            </div>
          </div>
        </div>
      </div>

      <div id="contenedorconvenios">
        <div class="container1">
          <div class="row">
            <div class='col-sm-20 col-md-20 col-ld-20'>
                <h2 class="fuu"> DOCUMENTOS ADICIONALES </h2>
                <div id ="dcontrato2">
                    <label id="textcon" class="control-label"> Contrato: </label>
                </div>
                <div id ="dscontrato3">
                  <select id="scontra3" class="scontra3" name="scontra3">
			<?php
                if (isset($_GET["flag"])) {
              $flag=unserialize($_GET["flag"]);
              $valor=serialize($flag);
              foreach ($flag as $key=> $val) {
                  ?>
                  <option value="<?php print($val['id_contrato']); ?>"><?php print($val['numero_contrato']); ?></option>
                  <?php
              }

}
                  ?>

                  </select>
                </div>
              <div class="dfechadc">
                <div id="dfechad">
                  <label id="tfechdocadicional" class="control-label"> Fecha del documento: </label>
                </div>
                  <input class="form-control" id="fechadoc2" name="fecha" type="date" >
                </div>
              <div id="divdes">
                  <label id="textdesadicional" class="control-label"> Descripción: </label>
                  <textarea  id="descripcion2" class="form-control" rows="5"></textarea>
              </div>
              <div id="dbtncomprobacion">
                  <button type="button" id="bcomprobacion" onclick="mostrarText3();" class="btn btn-primary" name="button"> Guardar </button>
                  <button type="button" id="bregresar" class="btn btn-primary"  onclick="location.href='principal.php'" name="bregresar"> Regresar </button>
              </div>
              </div>
            </div>
          </div>
        </div>
    </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"
    integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY"
    crossorigin="anonymous">
  </script>
  <script src="https://cdn.datos.gob.mx/assets/js/main.js"></script>
  <script src="js/bootstrap.min.js"></script>
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
