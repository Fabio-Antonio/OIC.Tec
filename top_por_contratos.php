<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
      <title> </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
    <link href="https://cdn.datos.gob.mx/assets/css/main.css" rel="stylesheet">
    <link href="https://cdn.datos.gob.mx/assets/img/favicon.ico" rel="shortcut icon">
    <link href="https://cdn.datos.gob.mx/bower_components/dgm-footer/dgm-footer.html" rel="import">

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">


    <script>
      window.onload = function () {
       var contrato;
       var monto;

        var chart = new CanvasJS.Chart("chartContainer", {
	         animationEnabled: true,
	          theme: "light2", // "light1", "light2", "dark1", "dark2"
	           title:{
		             text: "TOP POR CONTRATOS"
	              },
	               axisY: {
		                 title: "MONTO $"
	                  },
                    axisX: {
                        title: "CONTRATO"
                       },
	                   data: [{
		                     type: "column",
		                             dataPoints: [

	 <?php
                if (isset($_POST['flag'])) {
              $flag=unserialize($_POST['flag']);


              foreach ($flag as $key=> $val) {

                  ?>
							<?php $contrato=$val['numero_contrato'];$monto=$val["monto_max"];?>
			                                { y: monto=Number('<?=$monto?>'), label:contrato='<?=$contrato?>'},
			                                 <?php
                                }
                                }
                                ?>

		                                  ]
	                                   }]
                                   });
                                   chart.render();

                                 }
       </script>
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
    <div id="contenedorizquierda">



              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar" aria-controls="exCollapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">
              &#9776;
              </button>
              <div class="collapse" id="exCollapsingNavbar">
              <div class="bg-inverse p-a-1">


    <div class="panel-group ficha-collapse" id="filter-by">
      <center>
      <h3> B.E.S.A </h3>
      <h3> Consultas </h3>
      </center>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-parent="#filter-by" data-toggle="collapse" href="#consultanc" aria-expanded="false" aria-controls="consultanc">
              SUBIR ARCHIVO
            </a>
          </h4>
          <button type="button" class="collpase-button collapsed" data-parent="#filter-by" data-toggle="collapse" href="#consultanc"></button>
        </div>
        <div class="panel-collapse collapse" id="consultanc">
          <div class="panel-body">
            <a href="#" >SUBIR ARCHIVO (PDF,EXCEL)</a>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-parent="#filter-by" data-toggle="collapse" href="#finv" aria-expanded="false" aria-controls="finv">
              Fin Vigencia
            </a>
          </h4>
          <button type="button" class="collpase-button collapsed" data-parent="#filter-by" data-toggle="collapse" href="#finv"></button>
        </div>
        <div class="panel-collapse collapse" id="finv">
          <div class="panel-body">
            <a href="#">Autonomo (52)</a>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-parent="#filter-by" data-toggle="collapse" href="#orgs" aria-expanded="false" aria-controls="im">
              Informe Montos por Procedimiento
            </a>
          </h4>
          <button type="button" class="collpase-button collapsed" data-parent="#filter-by" data-toggle="collapse" href="#im"></button>
        </div>
        <div class="panel-collapse collapse" id="im">
          <div class="panel-body">
            <a href="#">CONABIO (4679)</a>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-parent="#filter-by" data-toggle="collapse" href="#cf" aria-expanded="false" aria-controls="cf">
              Consulta Fechas Adjudicación
            </a>
          </h4>
          <button type="button" class="collpase-button collapsed" data-parent="#filter-by" data-toggle="collapse" href="#cf"></button>
        </div>
        <div class="panel-collapse collapse" id="cf">
          <div class="panel-body">
            <a href="#">Cuidades Inteligentes (29)</a>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-parent="#filter-by" data-toggle="collapse" href="#cop" aria-expanded="false" aria-controls="cop">
              Contrato por Partida
            </a>
          </h4>
          <button type="button" class="collpase-button collapsed" data-parent="#filter-by" data-toggle="collapse" href="#cop"></button>
        </div>
        <div class="panel-collapse collapse" id="cop">
          <div class="panel-body">
            <a href="#">Autonomo (52)</a>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-parent="#filter-by" data-toggle="collapse" href="#in37" aria-expanded="false" aria-controls="in37">
              Informe 70-30
            </a>
          </h4>
          <button type="button" class="collpase-button collapsed" data-parent="#filter-by" data-toggle="collapse" href="#in37"></button>
        </div>
        <div class="panel-collapse collapse" id="in37">
          <div class="panel-body">
            <a href="../informe70-30/informe70-30.html">Informe Procedimiento 70-30</a>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-parent="#filter-by" data-toggle="collapse" href="#fef" aria-expanded="false" aria-controls="fef">
              Fecha de Formalización
            </a>
          </h4>
          <button type="button" class="collpase-button collapsed" data-parent="#filter-by" data-toggle="collapse" href="#fef"></button>
        </div>
        <div class="panel-collapse collapse" id="fef">
          <div class="panel-body">
            <a href="#">Autonomo (52)</a>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-parent="#filter-by" data-toggle="collapse" href="#cop" aria-expanded="false" aria-controls="cop">
              Contratos por Proveedor
            </a>
          </h4>
          <button type="button" class="collpase-button collapsed" data-parent="#filter-by" data-toggle="collapse" href="#cop"></button>
        </div>
        <div class="panel-collapse collapse" id="cop">
          <div class="panel-body">
            <a href="#">Autonomo (52)</a>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-parent="#filter-by" data-toggle="collapse" href="#copp" aria-expanded="false" aria-controls="copp">
              Contratos por Periodo
            </a>
          </h4>
          <button type="button" class="collpase-button collapsed" data-parent="#filter-by" data-toggle="collapse" href="#copp"></button>
        </div>
        <div class="panel-collapse collapse" id="copp">
          <div class="panel-body">
            <a href="#">Autonomo (52)</a>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-parent="#filter-by" data-toggle="collapse" href="#cpur" aria-expanded="false" aria-controls="cpur">
              Contratos y Proveedor por UR
            </a>
          </h4>
          <button type="button" class="collpase-button collapsed" data-parent="#filter-by" data-toggle="collapse" href="#cpur"></button>
        </div>
        <div class="panel-collapse collapse" id="cpur">
          <div class="panel-body">
            <a href="#">Autonomo (52)</a>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-parent="#filter-by" data-toggle="collapse" href="#fee" aria-expanded="false" aria-controls="fee">
              Fechas Entregables
            </a>
          </h4>
          <button type="button" class="collpase-button collapsed" data-parent="#filter-by" data-toggle="collapse" href="#fee" onclick="location.href='../consulta_por_numero_de_contrato/consulta_numero_contrato.html'"></button>
        </div>
        <div class="panel-collapse collapse" id="fee">
          <div class="panel-body">
            <a href="#">Autonomo (52)</a>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-parent="#filter-by" data-toggle="collapse" href="#tmc" aria-expanded="false" aria-controls="tmc">
              Top Montos por Contrato
            </a>
          </h4>
          <button type="button" class="collpase-button collapsed" data-parent="#filter-by" data-toggle="collapse" href="#tmc"></button>
        </div>
        <div class="panel-collapse collapse" id="tmc">
          <div class="panel-body">
            <a href="#">Autonomo (52)</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</main>
<!------------------------------------------------------>
<!------------------------------------------------------>
<!-- INICIA REGISTRO------------------------------------>
<!------------------------------------------------------>
<!------------------------------------------------------>
  <div id="contepr">
    <div class="container1">
      <div class="row">
        <div class='col-sm-20 col-md-20 col-ld-20'>
          <h2 class="fuu"> TOP MONTOS POR CONTRATOS </h2>
          <div id="Layert">
          <table id="myTable" class="tablemy">
           <thead>
            <tr>
		<th>Id</th>
		<th>Número de Contrato</th>
		<th>Unidad Requirente</th>
		<th>Proveedor Adjudicado</th>
		<th> Monto Mximo</th>
              </tr>
	 </thead>
              <?php
$arr=unserialize($_POST["flag"]);


       foreach((array)$arr as $key=>$value)
          {

 ?>
<tbody>
 <tr>
               <td>
                   <?php echo $key+1; ?>
             </td>
                     <?php foreach((array)$value as $key=>$value)
                       {
                     ?>
              <td>
                    <?php echo $value;?>
               </td>
                    <?php
                     }
                    ?>

        </tr>
        <?php

        }
       ?>
</tbody>
<tfoot>
 <tr>
                <th>Id</th>
                <th>Número de Contrato</th>
                <th>Unidad Requirente</th>
                <th>Proveedor Adjudicado</th>
                <th> Monto Mximo</th>
              </tr>


</tfoot>


          </table>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function() {
    $('#myTable').DataTable( {
      "language": {
            "decimal": ",",
            "thousands": "."
        }
    } );
} )
</script>

        </div>
        <div id="chartContainer" style="margin-top:400px" ></div>
          <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <div class="breggt">
          <button type="button" id="bregresar" class="btn btn-primary"  onclick="location.href='principal.php'" name="bregresar"> Regresar </button>
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
