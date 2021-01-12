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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>


<body class="front">
    <main>
        <nav class="navbar navbar-inverse sub-navbar navbar-fixed-top" style="height: 55px">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#subenlaces">
                        <span class="sr-only">Interruptor de Navegación</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="principal.php" id="besa">B.E.S.A</a>
                    <a> <img data-v-4a3754a3="" src="icons/lf.png" alt="logo gobierno de méxico" class="logos"
                            style="width: 80%;height: 50%; margin-top: -100px; margin-bottom: -25px; margin-left: 420px "></a>
                </div>

                <div class="collapse navbar-collapse" id="subenlaces" style=" width:110%; margin-top: -30px;">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Enlace</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false">Desplegable <span class="caret"></span></a>
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
                <button id="ce" class="w3-bar-item w3-button w3-large" onclick="w3_close()">Cerrar &times;</button>
                <img src="icons/lf.png" alt="sfp" width="145" height="60">
                <a class="w3-bar-item w3-button"></a>
                <a href="#" class="w3-bar-item w3-button">Inicio</a>
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
                    <h2 class="fuu"> CONTRATOS POR PARTIDA PRESUPUESTAL</h2>
                    <div id="Layercf">
                        <table class="table table-bordered">
                            <tr>
                                <th>Clave </th>
                                <th>Partida Presupuestal</th>
                                <th>Presupuesto</th>
                                <th>Consumo Actual</th>
                            </tr>
                            <tr>
                                <td><?php $clave=$_POST["clave"]; echo $clave;?></td>

                                <td><?php $nombre=$_POST["nombre"]; echo $nombre;?></td>
                                <td><?php $presupuesto=$_POST["presupuesto"]; $presupuestof=number_format($presupuesto); echo $presupuestof;?>
                                </td>
                                <td><?php $total=$_POST["total"]; $totalf=number_format($total); echo $totalf;?></td>
                            </tr>

                        </table>

                        <div class="tabla-consulta-por-vigencia">
                            <table id="myTable" class="tablemy" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Número de Contrato</th>
                                        <th>Objeto de contratación</th>
                                        <th>Monto máximo</th>
                                        <th>Partida presupuestal</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>



                    </div>
                    <div class="barra-progreso">

                        <canvas id="myCanvas" width="500" height="200"></canvas>
                        <script>
                        var canvas = document.getElementById('myCanvas');
                        var context = canvas.getContext('2d');
                        var al = 0;
                        var start = 4.72;
                        var cw = context.canvas.width / 2;
                        var ch = context.canvas.height / 2;
                        var diff;
                        var cantidad = '<?=$presupuesto?>';
                        <?php $total = $_POST["total"];?>
                        var total = '<?=$total?>';
                        var valor = 0;

                        function evaluar(total, cantidad) {
                            return ((total * 100) / cantidad);
                        }

                        function progressBar() {
                            diff = (al / 100) * Math.PI * 2;
                            context.clearRect(0, 0, 400, 200);
                            context.beginPath();
                            context.arc(cw, ch, 80, 0, 2 * Math.PI, false);
                            context.fillStyle = '#FFF';
                            context.fill();
                            context.strokeStyle = '#6F7271';
                            context.stroke();
                            context.fillStyle = '#000';
                            context.strokeStyle = '#9D2449';
                            context.textAlign = 'center';
                            context.lineWidth = 30;
                            context.font = '10pt Verdana';
                            context.beginPath();
                            context.arc(cw, ch, 80, start, diff + start, false);
                            context.stroke();
                            context.fillText(al + '%', cw + 2, ch + 6);
                            valor = evaluar(total, cantidad);
                            if (al >= valor) {
                                clearTimeout(bar);
                            }

                            al++;
                        }

                        var bar = setInterval(progressBar, 50);
                        </script>
                    </div>
                    <div class="breggt">
                        <button type="button" id="bregresar" class="btn btn-primary"
                            onclick="location.href='principal.php'" name="bregresar"> Regresar </button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"
        integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datos.gob.mx/assets/js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

    <script>
    $(document).ready(function() {
        <?php $clave = $_POST["clave"];?>
        var clave = '<?=$clave?>';
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
            "sAjaxSource": "contratos_partidas.php?clave=" +
                clave,
            "bPaginate": true,
            "sPaginationType": "full_numbers",
            "iDisplayLength": 5,
            "aoColumns": [{
                    mData: 'numero_contrato'
                },
                {
                    mData: 'objeto_contratacion'
                },

                {
                    mData: 'monto_max',
                    render: $.fn.dataTable.render.number(',', '.', 2, '$')
                },

                {
                    mData: 'nombre'
                },



            ],
        });
    });
    </script>

    <footer>

        <div class="contenedor-todo-footer">

            <div class="contenedor-body">

                <div class="columna1">
                    <h1> </h1>
                    <img src="itt.png" alt="ITT">
                    <h1> </h1>
                    <img src="indice.png" alt="TECNM">
                    <h1> </h1>
                    <img src="ff.png" alt="logo gobierno de méxico">
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