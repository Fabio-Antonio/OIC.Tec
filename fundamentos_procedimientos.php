<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title> B.E.S.A </title>
    <link href="css/estilos.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
  <!---------------------------------------------------------------------->
  <!---------------------------------------------------------------------->
  <!---------------------------------------------------------------------->
  <!---inicia las capturas----------------------------------------->
  <!---------------------------------------------------------------------->


<div class="modal fade" role="dialog" id="my-modal" aria-labelledby="modal-title"  rel="stylesheet"
 href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
                <button class="btn btn-primary" onclik="location.href='consulta_fundamento.php'" data-dismiss="modal">Ok</button>                    </div>
            </div>
        </div>
    </div>

<div class="modal fade" role="dialog" id="my-modal2"  aria-labelledby="modal-title"   rel="stylesheet"
 href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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


  <div id="funpro">
    <div class="container1">
      <div class="row">
        <div class='col-sm-150 col-md-150 col-ld-150'>

    <div id="tif">
      <h2 class="fuu"> FUNDAMENTO LEGAL</h2>
    </div>
    <div id="tabf">
      <form>
        <div class="dfundamentot">
          <label id="ccp" class="col-sm-20"> Fundamento: </label>
        </div>
          <input class="form-control" id="fundanen" placeholder="Fundamento" name="fundamento" type="text" required pattern="[A-Za-z0-9\.,\s]*">
          <div id="difecha">
            <label id="ccp" class="col-sm-20"> Fecha:   </label>
            <input class="form-control" id="fechafun" name="fecha" placeholder="Fecha" type="date" required value="<?php echo date('Y-m-d');?>">
          </div>
          <div id="diopc">
            <label id="ccp" class="col-sm-20"> Descripción:   </label>
            <textarea id="descripcion2" class="form-control" rows=5></textarea>
          </div>
          <div id="btnac">
              <button type="button" id="bac" class="btn btn-primary" onclick="ingresar2();" name="button"> Guardar </button>
		</form>
              <button type="button" id="bregresar" class="btn btn-primary"  onclick="location.href='principal.php'" name="bregresar"> Regresar </button>
          </div>
    </div>
  </div>
</div>
</div>


<div id="dprocediminetos">
<div class="container1">
  <div class="row">
    <div class='col-sm-150 col-md-150 col-ld-150'>

    <div id="tif">
      <h2 class="fuu"> PROCEDIMIENTOS CONTRATACIÓN</h2>
    </div>
    <div id="diprocc">
      <label id="ccp" class="col-sm-20"> Procedimientos:   </label>
      <input class="form-control" id="proc" name="proc"  placeholder="Procedimientos" type="text" >
    </div>
    <div id="ful">
      <label id="ccp" class="col-sm-20"> Fundamento legal:   </label>
      </div>
 <script lenguage="javascript" type="text/javascript">
         function mostrarText(){
    var selObj = document.getElementById('prc');
      var pr  = (document.getElementById('proc').value);


	  if(selObj.length==0){

        document.getElementById("prc").focus();
	 $(function(){
                $('#my-modal2').modal('show')
                });

        return;
        }

       if(pr.length==0||!(/^[A-Z-a-z0-9ñÑáéíóúÁÉÍÓÚ,.°\s]*$/.test(pr))){
         document.getElementById('proc').focus();
	 $(function(){

	  $('#my-modal2').modal('show')
                });

         return;
	}


       var selIndex = selObj.options[selObj.selectedIndex].text;

    if(selIndex.length==0||!(/^[A-Z-a-z0-9ñÑáéíóúÁÉÍÓÚ,.°()\s]*$/.test(selIndex))){
         document.getElementById('prc').focus();
	  $(function(){
                $('#my-modal2').modal('show')
                });


         return;
        }



        // window.location="procedimientos.php?fundamento="+selIndex+"&procedimientos="+pr;

$.post('procedimientos.php',{
"fundamento":selIndex,
"procedimientos":pr
},function(data){

$('#my-modal').modal('show')

});
}


</script>

<script   lenguaje="javascript" type="text/javascript">
function ingresar2(){
var fundamento= (document.getElementById("fundanen").value);
var fecha= (document.getElementById("fechafun").value);
var descripcion= (document.getElementById("descripcion2").value);


if(fundamento.length==0||fundamento.lenth>45){

document.getElementById("fundanen").focus();
 $(function(){
                $('#my-modal2').modal('show')
                });

return;
}
if(!(/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ,.°\s]*$/i.test(fundamento))){
document.getElementById("fundanen").focus();
 $(function(){
                $('#my-modal2').modal('show')
                });

return;

}
if(descripcion.length==0||descripcion.lenth>500){
document.getElementById("descripción2").focus();
 $(function(){
                $('#my-modal2').modal('show')
                });

return;
}

if(!(/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ,.°\s]*$/i.test(descripcion))){

document.getElementById("descripcion2").focus();
 $(function(){
                $('#my-modal2').modal('show')
                });

return;

}



$.post('fundamento.php',{
"fundamento":fundamento,
"fecha":fecha,
"descripcion":descripcion

},function(data){

$('#my-modal').modal('show')

});
}
</script>




           <select id="prc" class="prc" name="prc">

                   <?php
                if (isset($_POST["flag"])) {
              $flag=unserialize($_POST["flag"]);
              $valor=serialize($flag);
              foreach ($flag as $key=> $val) {
                  ?>
                  <option value="<?php print($val['id_fundamento_legal']); ?>"><?php print($val['fundamento']); ?></option>
                  <?php
              }

}
                  ?>

      </select>

    <div id="btnca">
        <button type="button" id="bca" onclick="mostrarText();" class="btn btn-primary" name="button"> Guardar </button>
        <button type="button" id="bregresar" class="btn btn-primary"  onclick="location.href='principal.php'" name="bregresar"> Regresar </button>
    </div>
  </div>
</div>
</div>
</div>
</div>

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
