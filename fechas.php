<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title> </title>


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
                    <button class="btn btn-primary" onclick="window.location.href='principal2.php'">Ok</button>
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
                        Algunos campos están vacíos o son incorrectos!!
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" role="dialog" id="my-modal3" aria-labelledby="modal-title">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#545454;">
                    <h3 class="modal-title" id="modal-title">B.E.S.A</h3>
                </div>
                <div class="modal-body">
                    <p>Ingrese los datos correspondientes a las entregas de bienes o servicios de su contrato. Se debe
                        establecer la fecha máxima de entrga y la cantidad máxima del bien o servicio a entregar. En el
                        caso
                        de ser un servicio, establecer cuantas entregas se realizarán hasta que termina la vigencia del
                        contrato; en caso de
                        bienes se establece la cantidad total de bienes</p>
                    <div class="form-group datepicker-group">
                        <label class="control-label" for="calendarYear">Fecha maxima de entrega:</label>
                        <input class="form-control" id="calendarYear" type="date">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="email-01">Cantidad maxima:</label>
                        <input class="form-control" id="cantidadm" placeholder="Cantidad maxima" type="number">

                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" onclick="entrega()">Ok</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" role="dialog" id="my-modal4" aria-labelledby="modal-title">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#545454;">
                    <h3 class="modal-title" id="modal-title">B.E.S.A</h3>
                </div>
                <div class="modal-body">
                    <p>Para establecer las fechas de un contrato, se debe tomar en cuenta las siguientes
                        consideraciones:</p>
                    <ol>
                        <li>La fecha de formalización de contrato no debe pasar los quince días
                            naturales después de la fecha de notificación de adjudicación.</li>
                        <li>Las fechas SAT, IMSS, INFONAVIT no deben exceder los treinta días antes de la
                            fecha de notificación de adjudicación; no debe ser mayor que la fecha de formalización de
                            contrato.</li>
                        <li>Las fechas de requisición y suficiencia deben ser anteriores a la fecha de notificación
                            de adjudicación.</li>
                        <li>La fecha de garantía de cumplimiento no debe exceder los díez días naturales después de
                            la fecha de formalización de contrato.</li>
                        <li>La fecha máxima de entrega deberá estar dentro del rango de la vigencia del contrato.</li>


                    </ol>


                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




    <!------------------------------------------------------>
    <!------------------------------------------------------>
    <!-- INICIA REGISTRO------------------------------------>
    <!------------------------------------------------------>
    <!------------------------------------------------------>
    <script lenguage="javascript" src="js/funciones_fechas.js" type="text/javascript">


    </script>


    <main class="main-fechas">
        <div class="contenedor-gris-fechas">

            <h1> FECHAS </h1>
            <div class="numero-de-contrato-fechas">
                <label>Numero de contrato:</label>
                <input type="text" id="infechadescripcion" name="infechadescripcion"
                    value="<?php $numero_contrato=$_GET['numero_contrato']; echo $numero_contrato;?>"
                    placeholder="Etiqueta" required>
            </div>

            <div class="notificacion-de-adjudicacion-fechas">
                <form role="form" id="myform" class="form-horizontal">
                    <label>Notificación de Adjudicación:</label>
                    <input id="innotificacionadjudicadaf" name="innotificacionadjudicadaf" placeholder="Fecha"
                        type="date" required>
            </div>

            <div class="formalizacion-contrato-fechas">
                <label>Formalización Contrato:</label>
                <input id="informalizacioncontratof" name="informalizacioncontratof" placeholder="Fecha" type="date"
                    required>
            </div>

            <div class="requisicion-contrato-fechas">
                <label>Requisición Contrato:</label>
                <input id="inrequesicioncontratof" name="inrequesicioncontratof" placeholder="Fecha" type="date"
                    required>
            </div>

            <div class="garantia-cumplimiento-fechas">
                <label>Garantía Cumplimiento:</label>
                <input id="ingarantiacumplimientof" name="ingarantiacumplimientof" placeholder="Fecha" type="date"
                    required>
            </div>

            <div class="inicio-vigencia-fechas">
                <label>Inicio Vigencia:</label>
                <input id="ininiciovigenciaf" name="ininiciovigenciaf" placeholder="Fecha" type="date" required>
            </div>

            <div class="sat-fechas">
                <label>SAT:</label>
                <input id="insatf" name="insatf" placeholder="Fecha" type="date" required>
            </div>

            <div class="imss-fechas">
                <label>IMSS:</label>
                <input id="inimssf" name="inimssf" placeholder="Fecha" type="date" required>
            </div>

            <div class="infonavit-fechas">
                <label>Infonavit:</label>
                <input id="ininfonavitf" name="ininfonavitf" placeholder="Fecha" type="date" required>
            </div>

            <div class="suficiencia-fechas">
                <label>Suficiencia:</label>
                <input id="insuficienciaf" name="insuficienciaf" placeholder="Fecha" type="date" required>
            </div>

            <div class="fin-vigencia-fechas">
                <label>Fin Vigencia:</label>
                <input id="infinvigenciaf" name="infinvigenciaf" placeholder="Fecha" type="date" required>
            </div>

            <div class="botones-fechas">
                <button id="bcomprobacion" class="btn btn-verde" type="button" onclick="mostrarText();"
                    name="bcomprobacion"> Guardar </button>
                <button type="button" id="bregresar" class="btn btn-verde" onclick="location.href='principal.php'"
                    name="bregresar"> Regresar </button>
            </div>

        </div>
        </form>


    </main>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"
        integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datos.gob.mx/assets/js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>


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