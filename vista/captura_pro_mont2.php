<!DOCTYPE html>
<html lang="es">
<link href="https://cdn.datos.gob.mx/assets/css/main.css" rel="stylesheet">
<link href="https://cdn.datos.gob.mx/bower_components/polymer/polymer.html" rel="import">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consolidado</title>
    <link rel="shortcut icon" href="https://cdn.datos.gob.mx/assets/img/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400;700&display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js">
    </script>
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
            <a href="principal2.php" class="w3-bar-item w3-button">Inicio</a>
        </div>

        <!-- Page Content -->
        <div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>
        <div>
            <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
        </div>
    </div>

    <main class="main-captura-pro-mont">

        <div class="contenedor-gris-procedimiento-consolidado">
            <div class="contenedor-captura-procedimiento">
                <h1> CONSOLIDADO </h1>
                <div class="consolidador-captura">
                    <label> Consolidador: </label>
                    <select name="consolidador" id="consolidador">
                        <?php
                        require_once('../modelo/consulta_requirente.php');
                       foreach ($flag as $key => $val) {
                        ?>

                        <option value="<?php print($val['id_requirente']); ?>">
                            <?php print($val['unidad']); ?></option>
                        <?php
                        }

                        ?>
                    </select>
                </div>
                <div class="numero-lisitacion-captura">
                    <label for="">Número de Licitación:</label>
                    <input type="text" name="licitacion" id="licitacion">
                </div>
                <div class="monto-total-captura">
                    <label for="">Monto:</label>
                    <input type="text" name="monto" id="monto">
                </div>
                <div class="descripcion-consolidado">
                    <label for="">Descripción</label>
                    <textarea name="descripcion" id="descripcion" cols="30" rows="5"></textarea>
                </div>
                <div class="botones btn-captura-procedimiento">
                    <button id="btg" onclick="mostrarText();" class="btn btn-verde" type="button"> Guardar </button>
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

    <!-- Modals -->

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
                    <button class="btn btn-primary" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" role="dialog" id="my-modal2" aria-labelledby="modal-title">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#D0021B;">
                    <h3 class="modal-title" id="modal-title">B.E.S.A</h3>
                </div>
                <div class="modal-body">
                    <p>
                        Los datos no son compatibles!!
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>



    <script src="js/funciones_consolidado.js"> </script>




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