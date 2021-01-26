<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Informe 70-30 </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datos.gob.mx/assets/css/main.css" rel="stylesheet">
    <link href="https://cdn.datos.gob.mx/assets/img/favicon.ico" rel="shortcut icon">
    <link href="https://cdn.datos.gob.mx/bower_components/dgm-footer/dgm-footer.html" rel="import">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estile.css">

    <script>
    window.onload = function() {

        <?php $total=$_POST["total"];?>
        <?php $total2=$_POST["total2"];?>
        <?php $valor=$_POST["treinta"];?>
        <?php $valor2=$_POST["setenta"];?>

        var treinta = Number('<?=$total?>');
        var cien_treinta = Number('<?=$valor?>');
        var setenta = Number('<?=$total2?>');
        var cien_setenta = Number('<?=$valor2?>');
        var consumo_30 = (treinta * 100) / cien_treinta;
        var consumo_70 = (setenta * 100) / cien_setenta;
        var cien_total = cien_treinta + cien_setenta;
        var globalt = 100 - (((setenta + treinta) * 100) / cien_total);
        var globals = (((setenta + treinta) * 100) / cien_total);

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
                dataPoints: [{
                        y: 100 - consumo_30,
                        label: "Libre",
                        color: "rgb(30,144,255)",
                    },
                    {
                        y: consumo_30,
                        label: "Ocupado",
                        color: "rgb(128,0,128)",
                    }

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
                dataPoints: [{
                        y: 100 - consumo_70,
                        label: "libre",
                        color: "rgb(30,144,255)",
                    },
                    {
                        y: consumo_70,
                        label: "ocupado",
                        color: "rgb(128,0,128)",
                    }

                ]
            }]


        });
        chart2.render();

        var chart3 = new CanvasJS.Chart("chartContainer3", {
            animationEnabled: true,
            title: {
                text: "Consumo Total  del Presupuesto"
            },
            data: [{
                type: "pie",
                startAngle: 240,
                yValueFormatString: "##0.00\"%\"",
                indexLabel: "{label} {y}",
                dataPoints: [{
                        y: globalt,
                        label: "libre",
                        color: "rgb(30,144,255)",
                    },
                    {
                        y: globals,
                        label: "ocupado",
                        color: "rgb(128,0,128)",
                    }

                ]
            }]


        });
        chart3.render();

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
                <img src="img/lf.png" alt="FuncionPublica">
            </div>
            <span></span>
        </div>
    </header>



    <!-- Sidebar -->
    <div class="barra">


        <!-- Sidebar -->

        <div class="w3-sidebar w3-bar-block w3-animate-left" style="display:none;z-index:5" id="mySidebar">
            <button id="ce" class="w3-bar-item w3-button w3-large" onclick="w3_close()">Cerrar &times;</button>
            <img src="icons/lf.png" alt="sfp" width="145" height="60">
            <a class="w3-bar-item w3-button"></a>
            <a href="principal2.php" class="w3-bar-item w3-button">Inicio</a>
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

    <main class="main-informe70-30">
        <div class="contenedor-gris-informe70-30">
            <div class="contenedor-informe70-30">
                <h1 class="titulo-uno"> INFORME PROCEDIMIENTOS 70-30 </h1>

                <div class="tabla-informe70-30">
                    <table class="table table" id="table7030">
                        <caption>Presupuesto Unidad Compradora</caption>
                        <tr>
                            <th>Unidad Compradora</th>
                            <th>Numero de Unidad</th>
                            <th>Presupuesto</th>
                            <th>70%</th>
                            <th>30%</th>

                        </tr>
                        <tr>
                            <td><?php $unidad=$_POST["unidad"]; echo $unidad;?></td>
                            <td><?php $numero_unidad=$_POST["numero_unidad"]; echo $numero_unidad;?></td>
                            <td><?php $totals=$_POST["totals"]; $tot=number_format($totals); echo '$'.$tot;?></td>
                            <td><?php $setenta=$_POST["setenta"]; $se= number_format($setenta);echo '$'.$se;?></td>
                            <td><?php $treinta=$_POST["treinta"]; $tr= number_format($treinta);echo '$'.$tr;?></td>


                        </tr>
                       

                    </table>

                </div>



                <h1 class="titulo-dos">Contratos</h1>
                <div class="tabla-contratos-30-informe70-30">
                    
                    <h2>Contratos Correspondientes al 30%</h2>

                    <table id="myTable" class="tablemy">
                        <thead>
                            <tr>
                                <th>Numero de Contrato</th>
                                <th>Monto Maximo</th>
                                <th>Procedimiento</th>
                                <th>Partida presupuestal</th>
                                <th>Articulo normativo</th>
                            </tr>
                        </thead>
                    </table>

                    <script>
                    $(document).ready(function() {

                        var unidad = '<?=$unidad?>';
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
                            "sAjaxSource": "consulta_70_30t.php?unidada=" + unidad,
                            "bPaginate": true,
                            "sPaginationType": "full_numbers",
                            "iDisplayLength": 5,
                            "aoColumns": [{
                                    mData: 'numero_contrato'
                                },
                                {
                                    mData: 'monto_max',
                                    render: $.fn.dataTable.render.number(',', '.', 2, '$')
                                },
                                {
                                    mData: 'procedimientos'
                                },
                                {
                                    mData: 'nombre'
                                },
                                {
                                    mData: 'articulo'
                                },

                            ]
                        });
                    });
                    </script>
                </div>





                <div class="tabla-contratos-70-informe70-30">
                    <h2>Contratos Correspondientes al 70%</h2>
                    <table id="myTable2" class="tablemy">
                        <thead>


                            <tr>
                                <th>Numero de Contrato</th>
                                <th>Monto Maximo</th>
                                <th>Procedimiento</th>
                                <th>Partida presupuestal</th>
                                <th>Articulo normativo</th>
                            </tr>
                        </thead>

                    </table>

                    <script>
                    $(document).ready(function() {
                        var unidad = '<?=$unidad?>';

                        var table = $('#myTable2').dataTable({
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
                            "sAjaxSource": "consulta_70_30a.php?unidada=" + unidad,
                            "bPaginate": true,
                            "sPaginationType": "full_numbers",
                            "iDisplayLength": 5,
                            "aoColumns": [{
                                    mData: 'numero_contrato'
                                },
                                {
                                    mData: 'monto_max',
                                    render: $.fn.dataTable.render.number(',', '.', 2, '$')
                                },
                                {
                                    mData: 'procedimientos'
                                },
                                {
                                    mData: 'nombre'
                                },
                                {
                                    mData: 'articulo'
                                },


                            ]
                        });
                    });
                    </script>

                </div>

                <h1 class="titulo-tres">Gráficas</h1>

                <div class="grafica-30-informe70-30">
                    <div id="chartContainer" class="grafica-treinta"></div>
                    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                </div>

                <div class="grafica-70-informe70-30">
                    <div id="chartContainer2" class="grafica-setenta"></div>
                    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                </div>
                <div class="grafica-total-informe70-30">
                    <div id="chartContainer3" class="grafica-total"></div>
                    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                </div>


                <div class="botones-informe70-30">
                    <button type="button" id="bregresar" class="btn btn-verde" onclick="location.href='principal2.php'"
                        name="bregresar"> Regresar </button>
                </div>

            </div>

        </div>

    </main>


    <footer class="site-footer">
        <div class="contenedor display-footer">
            <div class="footer-img">
                <div class="im">
                    <img src="img/itt.png" alt="ittlahuac">
                </div>
                <div class="im">
                    <img src="img/indice.png" alt="ittlahuac">
                </div>
                <div class="im">
                    <img src="img/ff.png" alt="ittlahuac">
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
            <p><span>Lorenzana Fabio Enrique</span> | <span>Flores Reyes Jahir</span> | <span> Reyes Villafranca Jose
                    Pedro</span></p>
        </div>
    </footer>




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