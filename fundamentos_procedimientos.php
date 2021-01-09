<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title> B.E.S.A </title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
    <!---------------------------------------------------------------------->
    <!---------------------------------------------------------------------->
    <!---------------------------------------------------------------------->
    <!---inicia las capturas----------------------------------------->
    <!---------------------------------------------------------------------->


    <div class="modal fade" role="dialog" id="my-modal" aria-labelledby="modal-title" rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
                    <button class="btn btn-primary" onclik="location.href='consulta_fundamento.php'"
                        data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" role="dialog" id="my-modal2" aria-labelledby="modal-title" rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <main class="main-fundamentos-procedimientos">
        <div class="contenedor-gris-fundamentos-procedimientos">

            <div class="contenedor-fundamento-legal-fundamentos-procedimientos">

                <h1> FUNDAMENTO LEGAL</h1>

                <div class="fundamento-fundamento-legal-fp">
                    <form>
                        <label> Fundamento: </label>
                        <input id="fundanen" placeholder="Fundamento" name="fundamento" type="text" required
                            pattern="[A-Za-z0-9\.,\s]*">
                </div>

                <div class="fecha-fundamento-legal-fp">
                    <label> Fecha: </label>
                    <input id="fechafun" name="fecha" placeholder="Fecha" type="date" required
                        value="<?php echo date('Y-m-d');?>">
                </div>

                <div class="descripcion-fundamento-legal-fp">
                    <label> Descripción: </label>
                    <textarea id="descripcionfunda" rows=5></textarea>
                </div>

                <div class="botones-fundamento-legal-fp">
                    <button type="button" id="bac" class="btn btn-verde" onclick="ingresar2();" name="button">
                        Guardar </button>
                    </form>
                    <button type="button" id="bregresar" class="btn btn-verde"
                        onclick="location.href='principal2.php'" name="bregresar"> Regresar </button>
                </div>

            </div>



            <div class="contenedor-procedimientos-contratacion-fundamentos-procedimientos">

                <h1> PROCEDIMIENTOS CONTRATACIÓN</h1>

                <div class="procedimientos-procedimientos-contratacion-fp">
                    <label> Procedimientos: </label>
                    <input id="proc" name="proc" placeholder="Procedimientos" type="text">
                </div>

                <div class="fundamento-legal-procedimientos-contratacion-fp">
                    <label> Fundamento legal: </label>

                    <script lenguaje="javascript" src="js/funciones_pro_fundamento.js" type="text/javascript">

                    </script>
                    <select id="prc" class="prc" name="prc">

                        <?php
                if (isset($_POST["flag"])) {
              $flag=unserialize($_POST["flag"]);
              $valor=serialize($flag);
              foreach ($flag as $key=> $val) {
                  ?>
                        <option value="<?php print($val['id_fundamento_legal']); ?>">
                            <?php print($val['fundamento']); ?>
                        </option>
                        <?php
              }

}
                  ?>

                    </select>
                </div>

                <div class="correspondiente-al-informe-procedimientos-contratacion-fp">
                    <label> Correspondiente al informe: </label>
                    <div class="setenta">
                        <label> 70%
                            <input type="radio" name="radio-01" id="70" value="70" checked="checked">
                            <i></i>
                        </label>
                    </div>
                    <div class="treinta">
                        <label>30%
                            <input type="radio" name="radio-01" id="30" value="30" checked="checked">
                            <i></i>
                        </label>
                    </div>
                </div>


                <div class="botones-procedimiento-contratacion-fp">
                    <button type="button" id="bca" onclick="mostrarText();" class="btn btn-verde" name="button">
                        Guardar </button>
                    <button type="button" id="bregresar" class="btn btn-verde"
                        onclick="location.href='principal2.php'" name="bregresar"> Regresar </button>
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