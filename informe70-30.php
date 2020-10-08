<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
      <title>Informe 70-30 </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
    <link href="https://cdn.datos.gob.mx/assets/css/main.css" rel="stylesheet">
    <link href="https://cdn.datos.gob.mx/assets/img/favicon.ico" rel="shortcut icon">
    <link href="https://cdn.datos.gob.mx/bower_components/dgm-footer/dgm-footer.html" rel="import">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>


    <script>
    window.onload = function() {

    <?php $total=$_POST["total"];?>
	 <?php $total2=$_POST["total2"];?>
    <?php $valor=$_POST["treinta"];?>
	  <?php $valor2=$_POST["setenta"];?>

    var treinta =Number('<?=$total?>');
    var cien_treinta=Number('<?=$valor?>');
     var setenta =Number('<?=$total2?>');
    var cien_setenta=Number('<?=$valor2?>');
    var consumo_30=(treinta*100)/cien_treinta;
      var consumo_70=(setenta*100)/cien_setenta;
      var cien_total=cien_treinta+cien_setenta;
      var globalt=100-(((setenta+treinta)*100)/cien_total);
      var globals=(((setenta+treinta)*100)/cien_total);

  var chart = new CanvasJS.Chart("chartContainer", {
  	animationEnabled: true,
  	title: {
	  		text: "Consumo del 30%"
  	},
  	data: [{
  		type: "pie",
  		startAngle: 240,
  		yValueFormatString: "##0.00\"%\"",
  		indexLabel: "{label} {y}",
  		dataPoints: [
  			{y: 100-consumo_30, label: "Libre",color: "rgb(30,144,255)",},
  			{y: consumo_30, label: "Ocupado",color: "rgb(128,0,128)",}

  		]
  	}]


        });
  chart.render();

 var chart2 = new CanvasJS.Chart("chartContainer2", {
        animationEnabled: true,
        title: {
                text: "Consumo del 70%"
        },
        data: [{
                type: "pie",
                startAngle: 240,
                yValueFormatString: "##0.00\"%\"",
                indexLabel: "{label} {y}",
                dataPoints: [
                        {y: 100-consumo_70, label: "libre",color: "rgb(30,144,255)",},
                        {y: consumo_70, label: "ocupado",color: "rgb(128,0,128)",}

                ]
        }]


        });
  chart2.render();

 var chart3 = new CanvasJS.Chart("chartContainer3", {
        animationEnabled: true,
        title: {
                text: "Consumo Total  de la Partida Presupuestal"
        },
        data: [{
                type: "pie",
                startAngle: 240,
                yValueFormatString: "##0.00\"%\"",
                indexLabel: "{label} {y}",
                dataPoints: [
                        {y: globalt, label: "libre",color: "rgb(30,144,255)",},
                        {y: globals, label: "ocupado",color: "rgb(128,0,128)",}

                ]
        }]


        });
  chart3.render();

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
  <div id="contepr">
    <div class="container1">
      <div class="row">
        <div class='col-sm-20 col-md-20 col-ld-20'>
          <h2 class="fuu"> INFORME PROCEDIMIENTOS 70-30 </h2>

          <div id="Layer70">
          <table class="table table" id="table7030">
            <caption>Presupuesto Unidad Compradora</caption>
            <tr>
		<th>Unidad Compradora</th>
		<th>Numero de Unidad</th>
              <th>Clave</th>
              <th>Partida</th>
		<th>Presupuesto</th>
		<th>70%</th>
		<th>30%</th>

            </tr>
            <tr>
		 <td><?php $unidad=$_POST["unidad"]; echo $unidad;?></td>
                 <td><?php $numero_unidad=$_POST["numero_unidad"]; echo $numero_unidad;?></td>
                 <td><?php $claves=$_POST["cli"]; echo $claves;?></td>
                 <td><?php $partida=$_POST["nombre_presupuesto"]; echo $partida;?></td>
		 <td><?php $totals=$_POST["totals"]; $tot=number_format($totals); echo '$'.$tot;?></td>
		 <td><?php $setenta=$_POST["setenta"]; $se= number_format($setenta);echo '$'.$se;?></td>
		 <td><?php $treinta=$_POST["treinta"]; $tr= number_format($treinta);echo '$'.$tr;?></td>


            </tr>

          </table>

        </div>

 <h2 class="fuu">Contratos</h2>

	<div id="Layer701" >
<h2>Contratos Correspondientes al 30%</h2>

          <table id="myTable"  class="tablemy">
	  <thead>
        <tr>
        <th>Numero de Contrato</th>
        <th>Monto Maximo</th>
        <th>Procedimiento</th>

        </tr>
	  </thead>
          </table>

<script>
$( document ).ready(function() {
<?php $id_partida=$_POST["id_partida"];?>
var partida= '<?=$id_partida?>';
var unidad='<?=$unidad?>';
var table = $('#myTable').dataTable({
"language": {
            "lengthMenu": "Mostrar _MENU_ Inserciones por página",
            "zeroRecords": "No se encontraron resultados - lo siento",
            "search":  "Buscar:",
            "info": "Mostrar páginas _PAGE_ of _PAGES_",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtered from _MAX_ total records)",
	    "loadingRecords": "Cargando...",		 

         "paginate": {
                "first":      "Primero",
                "previous":   "Previa",
                "next":       "Siguiente",
                "last":       "Última"
            },
},
"bProcessing": true,
"sAjaxSource": "consulta_70_30t.php?unidada="+unidad+"&id_partida="+partida,
"bPaginate":true,
"sPaginationType":"full_numbers",
"iDisplayLength": 5,
"aoColumns": [
{ mData: 'numero_contrato' } ,
{ mData: 'monto_max', render: $.fn.dataTable.render.number( ',', '.', 2,'$') },
{ mData: 'procedimientos' },

]
});
});

</script>
</div>

	<div id="Layer702" >
<h2>Contratos Correspondientes al 70%</h2>
       <table  id="myTable2" class="tablemy">
	  <thead>


        <tr>
        <th>Numero de Contrato</th>
        <th>Monto Maximo</th>
        <th>Procedimiento</th>

	</tr>
	  </thead>

	</table>

 <script>
        $( document ).ready(function() {
          <?php $id_partida=$_POST["id_partida"];?>
var partida= '<?=$id_partida?>';
var unidad='<?=$unidad?>';

var table = $('#myTable2').dataTable({
"language": {
            "lengthMenu": "Mostrar _MENU_ Inserciones por página",
            "zeroRecords": "No se encontraron resultados - lo siento",
            "search":  "Buscar:",
            "info": "Mostrar páginas _PAGE_ of _PAGES_",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "loadingRecords": "Cargando...",

         "paginate": {
                "first":      "Primero",
                "previous":   "Previa",
                "next":       "Siguiente",
                "last":       "Última"
            },
},

"bProcessing": true,
"sAjaxSource": "consulta_70_30a.php?unidada="+unidad+"&id_partida="+partida,
"bPaginate":true,
"sPaginationType":"full_numbers",
"iDisplayLength": 5,
"aoColumns": [
{ mData: 'numero_contrato' } ,
{ mData: 'monto_max' , render: $.fn.dataTable.render.number( ',', '.', 2,'$')},
{ mData: 'procedimientos' },

]
});
});


        </script>

        </div>
        <h2 class="fuu">Gráficas</h2>
        <div class="grafica">
          <div id="chartContainer" style=" height: 300px; width: 980px;margin-top:0px"></div>
            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        </div>

	 <div class="grafica">
          <div id="chartContainer2" style="height: 300px; width: 980px;margin-left:30px"></div>
            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        </div>
	  <div class="grafica">
          <div id="chartContainer3" style="height: 300px; width: 980px;margin-left:30px"></div>
            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        </div>


        <div class="breg70">
          <button type="button" id="bregresar" class="btn btn-primary"  onclick="location.href='principal2.php'" name="bregresar"> Regresar </button>
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
