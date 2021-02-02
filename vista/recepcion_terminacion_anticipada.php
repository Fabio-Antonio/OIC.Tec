<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <!------------------------------------------------------>
    <!------------------------------------------------------>
    <!-- INICIA REGISTRO------------------------------------>
    <!------------------------------------------------------>
    <!------------------------------------------------------>

    <script lenguage="javascript" type="text/javascript">
    function mostrarText() {
        var selObj = document.getElementById('secontraterminacion');
        var fecha_terminacion = (document.getElementById('infechaterminacion').value);
        var gastos_no_recuperables = (document.getElementById('ingastosnorecuperables').value);
        var monto_finiquito = (document.getElementById('inmontofiniquito').value);

        var selIndex = selObj.options[selObj.selectedIndex].text;

        if (String(fecha_terminacion) == "") {
            alert("El campo Fecha Terminación está vacío ");
            document.getElementById("infechaterminacion").focus();
            return;

        }
        if (gastos_no_recuperables < 0 || gastos_no_recuperables.length == 0) {
            alert("El campo Gastos no Recuperables es invalido ");
            document.getElementById("ingastosnorecuperables").focus();
            return;

        }
        if (monto_finiquito < 0 || monto_finiquito.length == 0) {
            alert("El campo Monto Finiquito  es invalido ");
            document.getElementById("inmontofiniquito").focus();
            return;

        }

        alert(selIndex);
        window.location = "terminacion_anticipada.php?numero_contrato=" + selIndex + "&fecha_terminacion=" +
            fecha_terminacion + "&gastos_no_recuperables=" + gastos_no_recuperables + "&monto_finiquito=" +
            monto_finiquito;
    }
    </script>


    <script lenguage="javascript" type="text/javascript">
    function mostrarTexts() {
        var selObj = document.getElementById('secontrarecepcion');
        var selObj2 = document.getElementById('inrequirente');
        var descripcion = (document.getElementById('texadescripcionrequirente').value);

        var selIndex = selObj.options[selObj.selectedIndex].text;
        var selIndex2 = selObj2.options[selObj2.selectedIndex].text;

        if (!(/^[A-Za-z]+$/.test(descripcion)) || descripcion.length == 0) {
            alert("El campo Descripción es incorrecto ");
            document.getElementById("texadescripcionrequirente").focus();
            return;
        }
        alert(selIndex);
        window.location = "recepcion.php?numero_contrato=" + selIndex + "&unidad=" + selIndex2 + "&descripcion=" +
            descripcion;
    }
    </script>

    <main class="main-recepcion-terminacion-anticipada">
        <div class="contenedor-gris-recepcion-terminacion-anticipada">

            <div class="contenedor-recepcion-recepcion-terminacion-anticipada">

                <h1> RECEPCIÓN </h1>

                <div class="contrato-contenedor-recepcion-recepcion-terminacion-anticipada">
                    <label>Contrato:</label>

                    <select id="secontrarecepcion" class="secontrarecepcion" name="secontrarecepcion">

                        <?php
			if(isset($_POST["flag"])){
			$flag=unserialize($_POST["flag"]);
			foreach($flag as $key=> $val){
		?>
                        <option value="<?php print($val['id_contrato']); ?>"><?php print($val['numero_contrato']); ?>
                        </option>
                        <?php
		}
	}
		?>
                    </select>
                </div>

                <div class="requirente-contenedor-recepcion-recepcion-terminacion-anticipada">
                    <label>Requirente:</label>

                    <select class="inrequirente" id="inrequirente" name="inrequirente">
                        <?php
			if(isset($_POST["flag2"])){
			$flag=unserialize($_POST["flag2"]);
			foreach($flag as $key=> $val){
		?>
                        <option value="<?php print($val['id_requirente']); ?>"><?php print($val['unidad']); ?></option>
                        <?php
		}
	}
           ?>
                    </select>
                </div>

                <div class="descripcion-contenedor-recepcion-recepcion-terminacion-anticipada">
                    <label> Descripción:</label><br>
                    <textarea name="name" id="texadescripcionrequirente" rows="3" placeholder="Descripción"></textarea>
                </div>

                <div class="botones-contenedor-recepcion-recepcion-terminacion-anticipada">
                    <button type="button" id="bcomprobacion" class="btn btn-verde" onclick="mostrarTexts();"
                        name="bcomprobacion"> Guardar </button>
                    <button type="button" id="bregresar" class="btn btn-verde" onclick="location.href='principal.php'"
                        name="bregresar"> Regresar </button>
                </div>

            </div>


            <div class="contendor-terminacion-anticipada-recepcion-terminacion-anticipada">

                <h1> TERMINACIÓN ANTICIPADA </h1>
                <div class="contrato-terminacion-anticipada-recepcion-terminacion-anticipada">
                    <label>Contrato:</label>

                    <select id="secontraterminacion" class="secontraterminacion" name="secontraterminacion">
                        <?php
			if(isset($_POST["flag"])){
			$flag=unserialize($_POST["flag"]);
			foreach($flag as $key=> $val){
		?>
                        <option value="<?php print($val['id_contrato']); ?>">
                            <?php print($val['numero_contrato']); ?></option>
                        <?php
		}
	}
		?>
                    </select>
                </div>

                <div class="fecha-terminacion-terminacion-anticipada-recepcion-terminacion-anticipada">
                    <label>Fecha Terminación:</label>
                    <input id="infechaterminacion" name="fecha" placeholder="Fecha" type="date">
                </div>

                <div class="gastos-no-recuperables-terminacion-anticipada-recepcion-terminacion-anticipada">
                    <label>Gastos No Recuperables:</label>
                    <input type="number" id="ingastosnorecuperables" name="ingastosnorecuperables"
                        placeholder="Gastos No Recuperables" step="0.1">
                </div>

                <div class="monto-finiquito-terminacion-anticipada-recepcion-terminacion-anticipada">
                    <label>Monto Finiquito:</label>
                    <input type="number" id="inmontofiniquito" name="inmontofiniquito" placeholder="Monto Finiquito"
                        step="0.1">
                </div>

                <div class="botones-terminacion-anticipada-recepcion-terminacion-anticipada">
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