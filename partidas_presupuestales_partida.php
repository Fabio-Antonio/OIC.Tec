<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
      <title>Partidas Presupuestales </title>
	 <link href="css/estilos.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"  rel="stylesheet" >

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
<!------------------------------------------------------>
<!------------------------------------------------------>
<!-- INICIA REGISTRO------------------------------------>
<!------------------------------------------------------>
<!------------------------------------------------------>


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
                <button class="btn btn-primary" data-dismiss="modal">Ok</button>                    </div>
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



<script lenguage="javascript" type="text/javascript">
         function mostrarText(){
    var selObj = document.getElementById('secontrapartisasp');
      var selObj2 = document.getElementById('inclavepartida');
      var selIndex = selObj.options[selObj.selectedIndex].value;
    var clave_partida  = selObj2.options[selObj2.selectedIndex].value;

      if(clave_partida<0||clave_partida.length==0){
        $(function(){
	$('#my-modal2').modal('show');
	});
        document.getElementById('inclavepartida').focus();
        return;
  }

  if(selIndex<0||selIndex.length==0){
        $(function(){
	$('#my-modal2').modal('show');
	});
        document.getElementById('secontrapartisasp').focus();
        return;
  }
  


         alert(selIndex);
       // window.location="partidas_presupuestales.php?nombre_unidad_compradora="+selIndex+"&clave_partida="+clave_partida;
	$.post('partidas_presupuestales.php',{
	"nombre_unidad_compradora":selIndex,
	"clave_partida":clave_partida
	},function(data){
		$('#my-modal').modal('show')
		});
    }
</script>


<script lenguage="javascript" type="text/javascript">
         function mostrarTexts(){
    var selObj = document.getElementById('secontatosub');
      var numero_sub_partida  = (document.getElementById('innumerosubpartida').value);
      var descripcion  = (document.getElementById('texadescripcionsubpartida').value);

      var selIndex = selObj.options[selObj.selectedIndex].text;

      if(numero_sub_partida<0||numero_sub_partida.length==0||!(/^[0-9]+$/.test(numero_sub_partida))){
        alert("El campo Numero Subpartida es invalido");
        document.getElementById('innumerosubpartida').focus();
        return;
        }

        if(String(descripcion)==""||!(/^[A-Za-z]+$/.test(descripcion))){
	 alert("El campo Descripcion es invalido");
        document.getElementById('texadescripcionsubpartida').focus();
        return;
	}


         alert(selIndex);
        window.location="sub_partida.php?numero_contrato="+selIndex+"&numero_sub_partida="+numero_sub_partida+"&descripcion="+descripcion;
    }
</script>





  <div id="contec">
    <div class="container1">
      <div class="row">
        <div class='col-sm-20 col-md-20 col-ld-20'>
          <h2 class="fuu">PARTIDAS PRESUPUESTALES</h2>
          <div class="dtextcontratopartida">
            <label class="textcontratopartida">Unidad Compradora:</label>
          </div>
	     <select id="secontrapartisasp" class="secontrapartisasp" name="secontrapartisasp">
		<?php
			if(isset($_POST["flag"])){
			$flag=unserialize($_POST["flag"]);
			foreach($flag as $key=> $val){
		?>
              <option value="<?php print($val['id_unidad_compradora']); ?>"><?php print($val['nombre_unidad_compradora']); ?></option>
		<?php
		}
	}
		?>
            </select>
          <div class="dclavepartida">
            <label class="textclavepartida">Clave Partida:</label>
             <select id="inclavepartida" name="clavepartida">
                <?php
                        if(isset($_POST["flag2"])){
                        $flag=unserialize($_POST["flag2"]);
                        foreach($flag as $key=> $val){
                ?>
              <option value="<?php print($val['id']); ?>"><?php print($val['clave']); echo " "; print($val['nombre']); ?></option>
                <?php
                }
        }
                ?>
            </select>

          </div>
          <div id="dbtncomprobacion">
              <button type="button" id="bcomprobacion" class="btn btn-primary" onclick="mostrarText();" name=""> Guardar </button>
              <button type="button" id="bregresar" class="btn btn-primary"  onclick="location.href='principal2.php'" name="bregresar"> Regresar </button>
          </div>
        </div>
      </div>
    </div>

      <div id="contenedorconvenios">
        <div class="container1">
          <div class="row">
            <div class='col-sm-20 col-md-20 col-ld-20'>
              <h2 class="fuu"> SUB PARTIDA </h2>
              <div class="dsecontratosub">
                <label  class="textcontratosub">Contrato:</label>
              </div>
           <select id="secontatosub" class="secontatosub" name="secontatosub">
			 <?php
                        if(isset($_POST["flag"])){
                        $flag=unserialize($_POST["flag"]);
                        foreach($flag as $key=> $val){
                ?>

                  <option value="<?php print($val['id_unidad_compradora']); ?>"><?php print($val['nombre_unidad_compradora']); ?></option>
		    <?php
                }
        }
                ?>

                </select>
              <div class="dnumerosubpartida">
                <label class="textnumerosuboartida">Número Sub Partida:</label>
                <input type="number"  class="form-control" id="innumerosubpartida"  name="sub" min="0"  placeholder="Número Sub Partida">
              </div>
              <div class="ddescripcionsubpartida">
                <label class="textdescripcionsubpartida"> Descripción:</label><br>
                <textarea name="name" id="texadescripcionsubpartida" class="form-control"  rows="3" placeholder="Descripción Sub Partida"></textarea>
              </div>
              <div id="dbtncomprobacion">
                  <button type="button" id="bcomprobacion" class="btn btn-primary" onclick="mostrarTexts();" name="bcomprobacion"> Guardar </button>
                  <button type="button" id="bregresar" class="btn btn-primary"  onclick="location.href='principal2.php'" name="bregresar"> Regresar </button>
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
