<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta name="viewport"
        content="whidth=device-whidth, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title> B.E.S.A </title>
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">-->
    <link href="https://cdn.datos.gob.mx/assets/css/main.css" rel="stylesheet">
    <link href="https://cdn.datos.gob.mx/assets/img/favicon.ico" rel="shortcut icon">
    <link href="https://cdn.datos.gob.mx/bower_components/dgm-footer/dgm-footer.html" rel="import">
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


    <!--browse cargador de archivos-->
    <main class="main-lectura">

        <div class="contenedor-gris-lectura">

            <!-- Pestañas -->
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#tab-01">CVS</a></li>
                <li><a data-toggle="tab" href="#tab-04">PDF</a></li>
            </ul>
            <!--fin pestañas -->
            <div class="form-group">
                <!-- inicio dentro pestaña-->

                <div class="tab-content ">

                    <div class="tab-pane active" id="tab-01">
                        <div class="subir-archivo-cvs-lectura">
                            <h1><strong> SUBIR ARCHIVO CVS </strong></h1>

                            <div class="brow-cvs-subir-archivo-cvs-lectura">
                                <form id="excel" method="POST" enctype="multipart/form-data">

                                    <input type="file" id="filec" name="uploadedfile" accept=".csv" for="file-01"
                                        data-toggle="tooltip" data-placement="top" title="Solo archivos XLS">
                            </div>

                            <div class="botones-subir-archivo-cvs-lectura">
                                <button id="S" class="btn btn-verde" type="submit"
                                    onclick=this.form.action="uploader.php">Subir</button>
                                <button id="bre" class="btn btn-verde" type="button"
                                    onclick="location.href='principal2.php'">Regresar</button>

                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab-04">
                        <div class="subir-archivo-pdf-lectura">

                            <h1><strong> SUBIR ARCHIVO PDF </strong></h1>
                            <div class="brow-pdf-subir-archivo-pdf-lectura">
                                <form id="pdf" method="POST" enctype="multipart/form-data">
                                    <input type="file" name="pdf" accept=".pdf" for="file-01" data-toggle="tooltip"
                                        data-placement="top" title="Solo archivos PDF">
                            </div>

                            <div class="escribe-el-numero-contrato-lectura">
                                <label for="">Número Contrato:</label>
                                <input class="form-control" placeholder="Escriba el número de contrato" type="text"
                                    name="numero_contrato" id="contrato" required pattern="[A-Za-z0-9]*">
                            </div>

                            <div class="botones-subir-archivo-pdf-lectura">
                                <button id="E" class="btn btn-verde" type="submit"
                                    onclick=this.form.action="subirpdf.php">Enviar</button>
                                <button id="bre" class="btn btn-verde" type="button"
                                    onclick="location.href='principal2.php'">Regresar</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!--fin dentro pestañas -->


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

    <script src="https://cdn.datos.gob.mx/assets/js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet">
    </link>
    <script src="https://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>

    <script src="js/funciones_cvs_pdf.js"></script>
    <script>
    $(function() {
        <?php
     require_once("consulta_principal.php");                                
                                ?>
        var arreglo = <?php echo json_encode($array) ?>;
        autocompletar(arreglo);


    });
    </script>

</body>

</html>