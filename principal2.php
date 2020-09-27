<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="shortcut icon" href="https://cdn.datos.gob.mx/assets/img/favicon.ico">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estile.css">
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
            <img src="img/lf.png" alt="sfp" width="145" height="60">
            <a class="w3-bar-item w3-button"></a>
            <a href="principal.php" class="w3-bar-item w3-button">Inicio</a>
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

    <div class="titulo_principal contenedor">
        <h1>B.E.S.A</h1>
        <h2>SISTEMA DE SEGUIMIENTO DE CONTRATOS</h2>
    </div>

    <main class="contenedor seccion">
        <div class="capturas">
            <div class="tarjeta">
                <div class="img_tarjeta">
                    <img src="img/equipo.jpg" alt="actores">
                </div>
                <h3>ACTORES</h3>
                <ul>
                    <li><i class="fas fa-plus-circle"></i><a href="consulta_contrato3.php"> Entregables</a></li>
                    <li><i class="fas fa-plus-circle"></i> Unidad Requirente</li>
                    <li><i class="fas fa-plus-circle"></i> Unidad Compradora</li>
                    <li><i class="fas fa-plus-circle"></i><a href="admin.html"> Administrador de Contrato</a></li>
                    <li><i class="fas fa-plus-circle"></i> Consolidados</li>
                    <li><i class="fas fa-plus-circle"></i> Proveedor Adjudicado</li>
                </ul>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet, perferendis!</p>
            </div>


            <div class="tarjeta">
                <div class="img_tarjeta">
                    <img src="img/engranes.jpg" alt="ad,imistracion">
                </div>
                <h3>ADMINISTRACIÓN</h3>
                <ul>
                    <li><i class="fas fa-plus-circle"></i> Carga de Archivos(PDF)(CVS)</li>
                    <li><i class="fas fa-plus-circle"></i><a href="consulta_contrato,php"> Comprobación/Convenios
                            Modificados</a></li>
                    <li><i class="fas fa-plus-circle"></i><a href="consulta_contrato,php"> Documentos Adicionales</a>
                    </li>
                    <li><i class="fas fa-plus-circle"></i> Recepción</li>
                    <li><i class="fas fa-plus-circle"></i> Terminación Anticipada</li>
                    <li><i class="fas fa-plus-circle"></i><a href="consulta_contrato4.php"> Partidas Presupuestales</a>
                    </li>
                </ul>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet, perferendis!</p>
            </div>


            <div class="tarjeta">
                <div class="img_tarjeta">
                    <img src="img/legal.jpg" alt="legal">
                </div>
                <h3>LEGAL</h3>
                <ul>
                    <li><i class="fas fa-plus-circle"></i><a href="consulta_fundamento.php"> Fundamento Legal</a></li>
                    <li><i class="fas fa-plus-circle"></i><a href="consulta_fundamento.php"> Procedimientos de
                            Contratación</a></li>
                    <li><i class="fas fa-plus-circle"></i> Inconformidades</li>
                    <li><i class="fas fa-plus-circle"></i> Facturas</li>
                    <li><i class="fas fa-plus-circle"></i> Pagos Efectuados</li>
                </ul>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet, perferendis!</p>
            </div>

            <div class="tarjeta">
                <div class="img_tarjeta">
                    <img src="img/calendario.jpg" alt="calendario">
                </div>
                <h3>CALENDARIO</h3>
                <ul>
                    <li><i class="fas fa-plus-circle"></i> Fin VIgencia</li>
                    <li><i class="fas fa-plus-circle"></i> Consultas por Fecha de Adjudicación</li>
                    <li><i class="fas fa-plus-circle"></i> Fechas Entregables</li>
                    <li><i class="fas fa-plus-circle"></i> Fecha de FOrmalización</li>
                </ul>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet, perferendis!</p>
            </div>


            <div class="tarjeta">
                <div class="img_tarjeta">
                    <img src="img/pastel.jpg" alt="pastel">
                </div>
                <h3>PRODUCCIÓN</h3>
                <ul>
                    <li><i class="fas fa-plus-circle"></i> Informe 70-30</li>
                    <li><i class="fas fa-plus-circle"></i> Top por Contrato</li>
                    <li><i class="fas fa-plus-circle"></i> Informe Montos por Procedimiento</li>
                </ul>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet, perferendis!</p>
            </div>


            <div class="tarjeta">
                <div class="img_tarjeta">
                    <img src="img/proveedor.jpg" alt="proveedor">
                </div>
                <h3>PRESUPUESTO</h3>
                <ul>
                    <li><i class="fas fa-plus-circle"></i> Consultas por Número de Contrato</li>
                    <li><i class="fas fa-plus-circle"></i> Contrato por Proveedor</li>
                    <li><i class="fas fa-plus-circle"></i> Contratos por Partida</li>
                </ul>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet, perferendis!</p>
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
            <p><span>Antonio Lorenzana Fabio Enrique</span> | <span>Flores Reyes Jahir</span> | <span> Reyes Villafranca
                    Jose Pedro</span></p>
        </div>
    </footer>

    <!--MODALS-->
    <div class="modal fade" role="dialog" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" id="my-modal" aria-labelledby="modal-title">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="modal-title">B.E.S.A</h3>
                </div>
                <div class="modal-body">
                    <p>
                        Bienvenido al Sistema B.E.S.A
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
    (function() {
        $(function() {
            $('#my-modal').modal('show')
        });
    }());
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