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
    <script>
    window.onload = function() {

         <?php $total=$_POST["total"];?>
        var total ='<?=$total?>';
        <?php $total1=$_POST["total1"];?>
         var total1 ='<?=$total1?>';
         <?php $total2=$_POST["total2"];?>
         var total2 ='<?=$total2?>';
         <?php $total3=$_POST["total3"];?>
         var total3 ='<?=$total3?>';
          total1=((total1*100)/total);
                total2=((total2*100)/total);
               total3=((total3*100)/total);





  var chart = new CanvasJS.Chart("chartContainer", {


  	animationEnabled: true,
  	title: {
  		text: "Portcentaje de Vigencias"
  	},
  	data: [{

  		type: "pie",
  		startAngle: 240,
  		yValueFormatString: "##0.00\"%\"",
  		indexLabel: "{label} {y}",
  		dataPoints: [
  			{y: total2, label: "6  Meses",color: "rgb(0,255,0)",},
  			{y: total1, label: "3 Meses",color: "rgb(255,255,0)",},
  			{y: total3, label: "Vencido",color: "rgb(255,0,0)",}
  		]
  	}]
  });
  chart.render();

  }
</script>

  </head>

  <body class="front">
    <main>
    <nav class="navbar navbar-inverse sub-navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subenlaces">
            <span class="sr-only">Interruptor de Navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="principal.html" id="besa">B.E.S.A</a>
            <a> <img data-v-4a3754a3="" src="icons/sfp.png" alt="logo gobierno de méxico" class="logos" style="width: 30%; margin-top: 5px; margin-bottom: -25px; "></a>
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
          <h2 class="fuu"> CONSULTA POR VIGENCIA </h2>
          <div class="botones">
            <div class="botondo">
                <button type="button" name="buttond" onclick="window.location.href='consulta_vigencia_verde.php'" class="botond">6  MESES</button>
            </div>
            <div class="botontr">
                <button type="button" onclick="window.location.href='consulta_vigencia_ama.php'"name="buttont" class="botont">3 MESES</button>
            </div>
            <div class="botonve">
                <button type="button" name="buttonv"  onclick="window.location.href='consulta_vigencia_rojo.php'"  class="botonv">VENCIDO</button>
            </div>
            <div class="botonto">
                <button type="button" name="buttonto" onclick="window.location.href='consulta_vigencia.php'"  class="botontod">TODO</button>
            </div>
          </div>
          <div id="Layer1">
          <table class="table table-striped">
            <tr>
              <th>Id</th>
              <th>Número de Contrato</th>
              <th>Unidad Requirente</th>
              <th>Fecha de Inicio</th>
              <th>Fecha Finalización</th>
            </tr>
           <?php
$arr=unserialize($_POST["flag"]);


       foreach((array)$arr as $key=>$value)
          {

 ?>

 <tr>
               <td>
                   <?php echo $key; ?>
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



          </table>
        </div>
        <div class="grafica">
          <div id="chartContainer" style="height: 300px; width: 980px;"></div>
            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        </div>
        <div class="bregg">
          <button type="button" id="bregresar" class="btn btn-primary"  onclick="location.href='principal.html'" name="bregresar"> Regresar </button>
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
      <h1> Instituto Tecnológico de Tláhuac </h1>
      <img src="itt.png" alt="ITT">
    </div>

    <div class="columna2">
      <h1> TECNM</h1>
      <img src="LogoTecNMBlanco.png" alt="TECNM">
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
