<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Motivos inconformidad </title>

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
    <!------------------------------------------------------>
    <!------------------------------------------------------>
    <!-- INICIA REGISTRO------------------------------------>
    <!------------------------------------------------------>
    <!------------------------------------------------------>
    <script lenguage="javascript" type="text/javascript">
    function mostrarText() {
        var selObj = document.getElementById('secontra');
        var selObj2 = document.getElementById('semotivo');
        var nombre_inco = document.getElementById('innombreinco').value;
        var sentido = document.getElementById('insentido').value;
        var selIndex = selObj.options[selObj.selectedIndex].text;
        var selIndex2 = selObj2.options[selObj2.selectedIndex].text;

        if (nombre_inco.length == 0 || nombre_inco.length >= 45) {
            alert("El campo Nombre Inconformidad se encuentra fuera del rango");
            document.getElementById("innombreinco").focus();
            return;
        }
        if (!(/^[A-Za-z]+$/i.test(nombre_inco))) {
            alert("Los caracteres aceptados son de tipo A,B,C,a,b,c,etc.");
            document.getElementById("innombreinco").focus();
            return;
        }
        if (sentido.length == 0) {
            alert("El campo Sentido Resolucion  se encuentra fuera del rango");
            document.getElementById("insentido").focus();
            return;
        }
        if (!(/^[A-Za-z]+$/i.test(sentido))) {
            alert("Los caracteres aceptados son de tipo A,B,C,a,b,c,etc.");
            document.getElementById("insentido").focus();
            return;
        }


        alert(selIndex + "" + selIndex2);

        window.location = "inconformidades.php?motivo=" + selIndex2 + "&numero_contrato=" + selIndex +
            "&nombre_inconforme=" + nombre_inco + "&sentido_resolucion=" + sentido;


    }
    </script>


    <main class="main-motivos-inconformidad">

        <div class="contenedor-gris-motivos-inconformidad">

            <div class="contenedor-motivo-inconformidad-motivos-inconformidad">
                <h1> MOTIVO INCONFORMIDAD </h1>

                <div class="motivo-motivo-inconformidad-mi">
                    <form method"POST">
                        <label>Motivo Incondirmidad:</label>
                        <input type="text" id="inmotivoin" name="motivo" placeholder="Motivo" required maxlength="40"
                            pattern="[A-Za-z0-9]*">
                </div>

                <div class="botones-motivo-inconformidad-mi">
                    <button type="submit" id="bcomprobacion" class="btn btn-verde"
                        onclick=this.form.action="motivo.php" name="bcomprobacion"> Guardar </button>
                    <button type="button" id="bregresar" class="btn btn-verde" onclick="location.href='principal.php'"
                        name="bregresar"> Regresar </button>

                    </form>
                </div>
            </div>


            <div class="contenedor-inconformidades-mi">
                <h1> INCONFORMIDADES </h1>

                <div class="contrato-inconformidades-mi">
                    <label>Contrato:</label>
                    <select id="secontra" class="secontra" name="secontra">
                        <?php
			if(isset($_POST["flag"])){
                         $flag=unserialize($_POST["flag"]);
			foreach($flag as $key => $val){
			?>
                        <option value="<?php print($val['id_contrato']); ?>">
                            <?php print($val['numero_contrato']); ?> </option>
                        <?php
			}
		}
		?>
                    </select>

                </div>

                <div class="motivo-inconformidades-mi">
                    <label>Motivo:</label>
                    <select id="semotivo" class="semotivo" name="semotivo">
                        <?php
                        if(isset($_POST["flag2"])){
                         $flag=unserialize($_POST["flag2"]);
                        foreach($flag as $key => $val){
                        ?>
                        <option value="<?php print($val['id_motivo']); ?>"><?php print($val['motivo']); ?>
                        </option>
                        <?php
                        }
                }else{
                ?>
                        <option value="1">Vacío</option>
                        <?php
		}
                ?>

                    </select>
                </div>

                <div class="nombre-inconformidad-inconformidades-mi">
                    <label>Nombre Inconformidad:</label>
                    <input type="text" id="innombreinco" name="innombreinco" placeholder="Nombre Inconformidad">
                </div>

                <div class="sentido-resolucion-inconformidades-mi">
                    <label>Sentido Resolución:</label>
                    <input type="text" id="insentido" name="insentido" placeholder="Sentido Resolución">
                </div>

                <div class="botones-inconformidades-mi">
                    <button type="button" id="bcomprobacion" class="btn btn-verde" onclick="mostrarText();"
                        name="bcomprobacion"> Guardar </button>
                    <button type="button" id="bregresar" class="btn btn-verde" onclick="location.href='principal.php'"
                        name="bregresar"> Regresar </button>
                </div>
            </div>

        </div>

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