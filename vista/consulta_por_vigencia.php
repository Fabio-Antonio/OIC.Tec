<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <title>Vigencia </title>
    <link href="https://cdn.datos.gob.mx/assets/css/main.css" rel="stylesheet">
    <link href="https://cdn.datos.gob.mx/assets/img/favicon.ico" rel="shortcut icon">
    <link href="https://cdn.datos.gob.mx/bower_components/dgm-footer/dgm-footer.html" rel="import">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../vista/css/normalize.css">
    <link rel="stylesheet" href="../vista/css/estile.css">


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

  <body>
  <header class="site-header">
        <div class="contenedor encabezado">
            <p>
                B.E.S.A
            </p>
            <div class="imagen-header">
                <img src="../vista/img/lf.png" alt="FuncionPublica">
            </div>
            <span></span>
        </div>
    </header>

    <!-- Sidebar -->
    <div class="barra">

        <!-- Sidebar -->
        <div class="w3-sidebar w3-bar-block w3-animate-left" style="display:none;z-index:5" id="mySidebar">
            <button id="ce" class="w3-bar-item w3-button w3-large" onclick="w3_close()">Cerrar &times;</button>
            <img src="img/lf.png" alt="sfp" width="145" height="60">
            <a class="w3-bar-item w3-button"></a>
            <a href="../vista/principal2.php" class="w3-bar-item w3-button">Inicio</a>
            <a href="alta.html" class="w3-bar-item w3-button">Usuarios</a>
            <a href="#" class="w3-bar-item w3-button" data-toggle="modal" data-target="#mymodal2">Contacto</a>
            <a href="#" class="w3-bar-item w3-button" data-toggle="modal" data-target="#mymodal3">Nueva Partida</a>
            <a href="cerrar.php" class="w3-bar-item w3-button">Logout -></a>
        </div>

        <!-- Page Content -->
        <div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>
        <div>
            <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
        </div>
    </div>
<!------------------------------------------------------>
<!------------------------------------------------------>
<!-- INICIA REGISTRO------------------------------------>
<!------------------------------------------------------>
<!------------------------------------------------------>
<main class="main-consulta-por-vigencia">
        <div class="contenedor-gris-consulta-por-vigencia">

            <h1> CONSULTA POR VIGENCIA </h1>

            <div class="semaforo-consulta-por-vigencia">
                <button type="button" name="buttond" onclick="window.location.href='../modelo/consulta_vigencia_verde.php'"
                    class="botond">6 MESES</button>
                <button type="button" onclick="window.location.href='../modelo/consulta_vigencia_ama.php'" name="buttont"
                    class="botont">3 MESES</button>
                <button type="button" name="buttonv" onclick="window.location.href='../modelo/consulta_vigencia_rojo.php'"
                    class="botonv">VENCIDO</button>
                <button type="button" name="buttonto" onclick="window.location.href='../modelo/consulta_vigencia.php'"
                    class="botontod">TODO</button>
            </div>

            <div class="tabla-consulta-por-vigencia">
                <table id="myTable" class="tablemy" style="width:100%">
                    <thead>
                        <tr>
                            <th>Número de Contrato</th>
                            <th>Unidad Requirente</th>
                            <th>Fecha de Inicio</th>
                            <th>Fecha Finalización</th>
                        </tr>
                    </thead>
                </table>
            </div>


            <div class="grafica-consulta-por-vigencia">
                <div id="chartContainer" class="container-graf"></div>
                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
            </div>

            <div class="botones-consulta-por-vigencia">
                <button type="button" id="bregresar" class="btn btn-verde" onclick="location.href='../vista/principal2.php'"
                    name="bregresar"> Regresar </button>
            </div>

        </div>
    </main>

    <footer class="site-footer">
        <div class="contenedor display-footer">
            <div class="footer-img">
                <div class="im">
                    <img src="../vista/img/itt.png" alt="ittlahuac">
                </div>
                <div class="im">
                    <img src="../vista/img/indice.png" alt="ittlahuac">
                </div>
                <div class="im">
                    <img src="../vista/img/ff.png" alt="ittlahuac">
                </div>
            </div>

            <div class="info-besa">
                <h4>B.E.S.A</h4>
                <p><i class="fas fa-user"></i> Responsable del programa: Ing. David Rogelio Rodríguez Arias </p>
                <p><i class="fas fa-envelope"></i> drrodriguez@nube.sep.gob.mx </p>
                <p><i class="fas fa-phone-square-alt"></i> 36018650 ext. 66125</p>
            </div>

            <div class="info-sep">
                <h4>Órgano Interno De Control De La SEP</h4>
                <p><i class="fas fa-home"></i> Avenida Universidad #1074, col. Xoco, alcaldía Benito Juárez, C.P. 03330,
                    CDMX </p>
                <p><i class="fas fa-envelope"></i> arturo.orci@nube.sep.gob.mx</p>
                <p><i class="fas fa-phone-square-alt"></i> 36068650 ext.66429</p>
            </div>

            <div class="info-tec">
                <h4>Instituto Tecnológico de Tláhuac</h4>
                <p><i class="fas fa-home"></i> Av. Estanislao Ramírez # 301 Colonia Ampliación Selene C.P. 13430 Tláhuac
                    CDMX</p>
                <p><i class="fas fa-phone-square-alt"></i> 7312-5614 | 7312-5616 | 5841-0560| </p>
            </div>
        </div>

        <div class="copyright">
            <p><span>&copy 2020 Todos Los Derechos Reservados</span></p>
            <p><span>Antonio Lorenzana Fabio Enrique</span> | <span>Flores Reyes Jahir</span> | <span> Reyes Villafranca
                    Jose Pedro</span></p>
        </div>
    </footer>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function() {
        var table = $('#myTable').dataTable({

            "language": {
                "lengthMenu": "Mostrar _MENU_ Inserciones por página",
                "zeroRecords": "No se encontraron resultados - lo siento",
                "search": "Buscar:",
                "info": "Mostrar páginas _PAGE_ of _PAGES_",
                "infoEmpty": "No existen registros",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "loadingRecords": "Cargando...",

                "paginate": {
                    "first": "Primero",
                    "previous": "Previa",
                    "next": "Siguiente",
                    "last": "Última"
                },
            },


            "bProcessing": true,
            "sAjaxSource": "../modelo/consulta_vigenciat.php",
            "bPaginate": true,
            "sPaginationType": "full_numbers",
            "iDisplayLength": 5,
            "aoColumns": [{
                    mData: 'numero_contrato'
                },
                {
                    mData: 'unidad'
                },
                {
                    mData: 'inicio_vigencia'
                },
                {
                    mData: 'fin_vigencia'
                },


            ]
        });
    });
    </script>


    <script src="https://kit.fontawesome.com/263207fda3.js" crossorigin="anonymous"></script>
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


  </body>

</html>
