<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Asignación de Partidas</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">

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


    <div class="modal fade" role="dialog" id="my-modal3" aria-labelledby="modal-title">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#D0021B;">
                    <h3 class="modal-title" id="modal-title">B.E.S.A</h3>
                </div>
                <div class="modal-body">
                    <p>
                        No se puede repetir una asignación!!
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



    <script lenguage="javascript" src="js/funciones_asignacion.js" type="text/javascript">

    </script>

    <main class="main-partidas-presupuestales-partida">

        <div class="contenedor-gris-partidas-presupuestales-partida">

            <h1>ASIGNACIÓN DE PARTIDAS</h1>
            <h3> Asigne una partida a una unidad compradora</h3>

            <div class="unidad-compradora-partidas-presupuestales-partida">
                <label>Unidad Compradora:</label>

                <select id="secontrapartisasp" class="secontrapartisasp" name="secontrapartisasp">
                    <?php
			require_once('../modelo/consulta_contrato4.php');
			
			foreach($flag as $key=> $val){
		?>
                    <option value="<?php print($val['id_unidad_compradora']); ?>">
                        <?php print($val['nombre_unidad_compradora']); ?></option>
                    <?php
		
	}
		?>
                </select>
            </div>

            <div class="clave-partida-partidas-presupuestales-partida">
                <label>Clave Partida:</label>
                <select id="inclavepartida" name="clavepartida">
                    <?php
                        require_once('../modelo/consulta_contrato4.php');
                        
                        foreach($flag2 as $key=> $val){
                ?>
                    <option value="<?php print($val['id']); ?>">
                        <?php print($val['clave']); echo " "; print($val['nombre']); ?></option>
                    <?php
                
        }
                ?>
                </select>

            </div>

            <div class="botones-partidas-presupuestales-partida">
                <button type="button" id="bcomprobacion" class="btn btn-verde" onclick="mostrarText();" name="">
                    Guardar </button>
                <button type="button" id="bregresar" class="btn btn-verde" onclick="location.href='principal2.php'"
                    name="bregresar"> Regresar </button>
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