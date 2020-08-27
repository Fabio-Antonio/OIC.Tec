<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
      <title> </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="css/estilos.css" rel="stylesheet">
    <link href="https://cdn.datos.gob.mx/assets/css/main.css" rel="stylesheet">
    <link href="https://cdn.datos.gob.mx/assets/img/favicon.ico" rel="shortcut icon">
    <link href="https://cdn.datos.gob.mx/bower_components/dgm-footer/dgm-footer.html" rel="import">
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
            <a class="navbar-brand" href="principal.php" id="besa2" >B.E.S.A</a>
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



<div class="modal fade" role="dialog" id="my-modal" aria-labelledby="modal-title">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#27C44D;">
                    <h3 class="modal-title" id="modal-title">B.E.S.A</h3>
                </div>
                <div class="modal-body">
                    <p>
                        Los datos se han ingresado correctamente!!
                    </p>
                </div>
                <div class="modal-footer">
                <button class="btn btn-primary" onclick="window.location.href='principal.php'">Ok</button>                    </div>
            </div>
        </div>
    </div>




<div class="modal fade" role="dialog" id="my-modal2"  aria-labelledby="modal-title">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"style="background-color:#D0021B;">
                    <h3 class="modal-title" id="modal-title">B.E.S.A</h3>
                </div>
                <div class="modal-body">
                    <p>
                        Los datos no son compatibles!!
                    </p>
                </div>
                <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal">Ok</button>                    </div>
            </div>
        </div>
    </div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




<!------------------------------------------------------>
<!------------------------------------------------------>
<!-- INICIA REGISTRO------------------------------------>
<!------------------------------------------------------>
<!------------------------------------------------------>
<script lenguage="javascript" type="text/javascript">
function mostrarText(){
var notificacion_adjudicada=(document.getElementById("innotificacionadjudicadaf").value);
var formalizacion_contrato= (document.getElementById("informalizacioncontratof").value);
var requisicion_contrato= (document.getElementById("inrequesicioncontratof").value);
var garantia_cumplimiento= (document.getElementById("ingarantiacumplimientof").value);
var resicion_contrato= (document.getElementById("inresicioncontratof").value);
var inicio_vigencia= (document.getElementById("ininiciovigenciaf").value);
var sat= (document.getElementById("insatf").value);
var imss= (document.getElementById("inimssf").value);
var infonavit= (document.getElementById("ininfonavitf").value);
var fecha_entrega= (document.getElementById("infechaentregaf").value);
var suficiencia= (document.getElementById("insuficienciaf").value);
var fin_vigencia= (document.getElementById("infinvigenciaf").value);
var descripcion= (document.getElementById("infechadescripcion").value);
var fecha1= new Date(inicio_vigencia);
var fecha2= new Date(fin_vigencia);
var fecha3= new Date(fecha_entrega);
if(String(notificacion_adjudicada)==""){
 $(function(){
                $('#my-modal2').modal('show')
                });

document.getElementById("innotificacionadjudicadaf").focus();
return;
}
if(String(formalizacion_contrato)==""){
 $(function(){
                $('#my-modal2').modal('show')
                });

document.getElementById("informalizacioncontratof").focus();
return;
}
if(String(requisicion_contrato)==""){
 $(function(){
                $('#my-modal2').modal('show')
                });

document.getElementById("inrequesicioncontratof").focus();
return;
}
if(String(garantia_cumplimiento)==""){
 $(function(){
                $('#my-modal2').modal('show')
                });

document.getElementById("ingarantiacumpliminetof").focus();
return;
}
if(String(resicion_contrato)==""){
 $(function(){
                $('#my-modal2').modal('show')
                });

document.getElementById("inresicioncontratof").focus();
return;
}
if(String(inicio_vigencia)==""){
 $(function(){
                $('#my-modal2').modal('show')
                });

document.getElementById("ininiciovigenciaf").focus();
return;
}
if(String(sat)==""){
 $(function(){
                $('#my-modal2').modal('show')
                });

document.getElementById("insatf").focus();
return;
}

if(String(imss)==""){
alert("El campo IMSS no puede ser vacío");
document.getElementById("inimssf").focus();
return;
}
if(String(infonavit)==""){
 $(function(){
                $('#my-modal2').modal('show')
                });

document.getElementById("ininfonavitf").focus();
return;
}

if(String(fecha_entrega)==""){
 $(function(){
                $('#my-modal2').modal('show')
                });

document.getElementById("infechaenregaf").focus();
return;
}
if(String(suficiencia)==""){
 $(function(){
                $('#my-modal2').modal('show')
                });

document.getElementById("insuficienciaf").focus();
return;
}

if(String(fin_vigencia)==""){
 $(function(){
                $('#my-modal2').modal('show')
                });

document.getElementById("infinvigenciaf").focus();
return;
}
if(descripcion.length==0||!(/^[A-Za-z0-9]+$/.test(descripcion))){
 $(function(){
                $('#my-modal2').modal('show')
                });

document.getElementById("infechadescripcion").focus();
return;
}
if(fecha2<fecha1){
 $(function(){
                $('#my-modal2').modal('show')
                });

document.getElementById("ininiciovigenciaf").focus();
return;
}

if(fecha3<fecha1||fecha3>fecha2){
 $(function(){
                $('#my-modal2').modal('show')
                });

document.getElementById("infechaentregaf").focus();
return;
}

$.post('contrato_fechas.php', {
              "innotificacionadjudicadaf": notificacion_adjudicada,
              "informalizacioncontratof": formalizacion_contrato,
              "inrequesicioncontratof": requisicion_contrato,
              "ingarantiacumplimientof": garantia_cumplimiento,
		 "inresicioncontratof": resicion_contrato,
		 "ininiciovigenciaf": inicio_vigencia,
		 "insatf": sat,
		 "inimssf": imss,
		 "ininfonavitf": infonavit,
		 "infechaentregaf": fecha_entrega,
		 "insuficienciaf": suficiencia,
		 "infinvigenciaf": fin_vigencia,
		 "infechadescripcion": descripcion


          },function(data) {
               $('#my-modal').modal('show')

          });

}
</script>
  <div id="contec">
    <div class="container1">
      <div class="row">
        <div class='col-sm-20 col-md-20 col-ld-20'>
          <h2 class="fuu"> FECHAS </h2>
          <div class="dfechadescripcion">
            <label class="textdocumentodescripcion">Numero de contrato:</label>
            <input type="text"  id="infechadescripcion" class="form-control" name="infechadescripcion" value="<?php $numero_contrato=$_POST['innumerocontratoc']; echo $numero_contrato;?>" placeholder="Etiqueta" required>
          </div>
          <div class="dnotificacionadjudicadaf">
             <form role="form" class="form-horizontal">
            <label class="textfechaterminacion">Notificación Adjudicada:</label>
            <input class="form-control" id="innotificacionadjudicadaf" name="innotificacionadjudicadaf" placeholder="Fecha" type="date" required>
          </div>
          <div class="dformalizacioncontratof">
            <label class="textfechaterminacion">Formalización Contrato:</label>
            <input class="form-control" id="informalizacioncontratof" name="informalizacioncontratof" placeholder="Fecha" type="date" required >
          </div>
          <div class="drequesicioncontratof">
            <label class="textfechaterminacion">Requisición Contrato:</label>
            <input class="form-control" id="inrequesicioncontratof" name="inrequesicioncontratof" placeholder="Fecha" type="date" required>
          </div>
          <div class="dgarantiacumplimientof">
            <label class="textfechaterminacion">Garantía Cumplimiento:</label>
            <input class="form-control" id="ingarantiacumplimientof" name="ingarantiacumplimientof" placeholder="Fecha" type="date" required>
          </div>
          <div class="dresicioncontratof">
            <label class="textfechaterminacion">Resición Contrato:</label>
            <input class="form-control" id="inresicioncontratof" name="inresicioncontratof" placeholder="Fecha" type="date" required>
          </div>
          <div class="diniciovigenciaf">
            <label class="textfechaterminacion">Inicio Vigencia:</label>
            <input class="form-control" id="ininiciovigenciaf" name="ininiciovigenciaf" placeholder="Fecha" type="date" required>
          </div>
          <div class="dsatf">
            <label class="textfechaterminacion">SAT:</label>
            <input class="form-control" id="insatf" name="insatf" placeholder="Fecha" type="date" required >
          </div>
          <div class="dimssf">
            <label class="textfechaterminacion">IMSS:</label>
            <input class="form-control" id="inimssf" name="inimssf" placeholder="Fecha" type="date" required>
          </div>
          <div class="dinfonavitf">
            <label class="textfechaterminacion">Infonavit:</label>
            <input class="form-control" id="ininfonavitf" name="ininfonavitf" placeholder="Fecha" type="date" required >
          </div>
          <div class="dfechaentregaf">
            <label class="textfechaterminacion">Fecha Entrega:</label>
            <input class="form-control" id="infechaentregaf" name="infechaentregaf" placeholder="Fecha" type="date" required>
          </div>
          <div class="dsuficienciaf">
            <label class="textfechaterminacion">Suficiencia:</label>
            <input class="form-control" id="insuficienciaf" name="insuficienciaf" placeholder="Fecha" type="date" required>
          </div>
          <div class="dfinvigenciaf">
            <label class="textfechaterminacion">Fin Vigencia:</label>
            <input class="form-control" id="infinvigenciaf" name="infinvigenciaf" placeholder="Fecha" type="date" required>
          </div>



          <div id="dbtncomprobacion">
              <button  id="bcomprobacion" class="btn btn-primary"  type="button" onclick="mostrarText();"  name="bcomprobacion"> Guardar </button>
          </div>
          </div>
        </div>
        </form>
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
