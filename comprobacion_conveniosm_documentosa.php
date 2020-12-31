<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Comprobacion_conveniosm_documentosa</title>

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
    function mostrarTexts() {
        var selObj = document.getElementById('scontra2');
        var montomax = (document.getElementById('montomax').value);
        var montomin = (document.getElementById('montomin').value);
        var iniciovigencia = (document.getElementById('finiciovigencia').value);
        var finvigencia = (document.getElementById('finvigencia').value);
        var fechaentrega = (document.getElementById('fechaentrega').value);

        var fecha1 = new Date(iniciovigencia);
        var fecha2 = new Date(finvigencia);

        if (String(fechaentrega) == "") {
            alert("El campo Fecha Entrega no puede estar vacío");
            document.getElementById("fechaentrega").focus();
            return;
        }
        if (montomax < 0 || montomax.length == 0) {
            alert("El campo Monto Máximo es invalido");
            document.getElementById("montomax").focus();
            return;

        }
        if (montomin < 0 || montomin.length == 0) {
            alert("El campo Monto Minimo es invalido");
            document.getElementById("montomin").focus();
            return;

        }
        if (montomax < montomin) {
            alert("El campo Monto Minimo no puede ser mayor al Monto Máximo");
            document.getElementById("montomin").focus();
            return;

        }
        if (String(iniciovigencia) == "") {
            alert("El campo Inicio Vigencia no puede estar vacío");
            document.getElementById("finiciovigencia").focus();
            return;
        }
        if (String(finvigencia) == "") {
            alert("El campo Fin Vigencia no puede estar vacío");
            document.getElementById("finvigencia").focus();
            return;
        }
        if (fecha1 > fecha2) {
            alert("La fecha del campo  Inicio Vigencia no puede ser mayor a la fecha del campo Fin Vigencia");
            return;
        }


        var selIndex = selObj.options[selObj.selectedIndex].text;
        alert(selIndex);
        window.location = "conveniosm.php?numero_contrato=" + selIndex + "&monto_maximo=" + montomax +
            "&monto_minimo=" + montomin + "&inicio_vigencia=" + iniciovigencia +
            "&fin_vigencia=" + finvigencia + "&fecha_entrega=" + fechaentrega;
    }
    </script>




    <script lenguage="javascript" type="text/javascript">
    function mostrarText() {
        var selObj = document.getElementById('scontra');
        var fechadoc = (document.getElementById('fechadoc').value);
        var descrip = (document.getElementById('descripcion').value);
        var selIndex = selObj.options[selObj.selectedIndex].text;

        if (String(fechadoc) == "") {
            alert("El campo Fecha del documento no pueder estar vacio");
            document.getElementById("fechadoc").focus();
            return;
        }
        if (descrip.length == 0 || !(/^[A-Za-z]+$/.test(descrip))) {
            alert("El campo Descripción es invalido");
            document.getElementById("descripcion").focus();
            return;
        }

        alert(selIndex);
        window.location = "comprobacion.php?numero_contrato=" + selIndex + "&fecha_documento=" + fechadoc +
            "&descripcion=" + descrip;
    }
    </script>



    <script lenguage="javascript" type="text/javascript">
    function mostrarText3() {
        var selObj = document.getElementById('scontra3');
        var fechadoc = (document.getElementById('fechadoc2').value);
        var descrip = (document.getElementById('descripcion2').value);
        var selIndex = selObj.options[selObj.selectedIndex].text;

        if (String(fechadoc) == "") {
            alert("El campo Fecha del documento no pueder estar vacio");
            document.getElementById("fechadoc2").focus();
            return;
        }
        if (descrip.length == 0 || !(/^[A-Za-z]+$/.test(descrip))) {
            alert("El campo Descripción es invalido");
            document.getElementById("descripcion2").focus();
            return;
        }

        alert(selIndex);
        window.location = "documentosa.php?numero_contrato=" + selIndex + "&fecha_documento=" + fechadoc +
            "&descripcion=" + descrip;
    }
    </script>

    <main class="main-ccd">
        <div class="contenedor-gris-ccd">

            <div class="contenedor-comprobacion-ccd">
                <h1> COMPROBACIÓN </h1>

                <div class="contrato-comprobacion-ccd">
                    <label> Contrato: </label>
                    <select id="scontra" class="select-contrato-ccd" name="scontra">
                        <?php
                      if (isset($_GET["flag"])) {
                    $flag=unserialize($_GET["flag"]);
                    $valor=serialize($flag);
                    foreach ($flag as $key=> $val) {
                        ?>
                        <option value="<?php print($val['id_contrato']); ?>"><?php print($val['numero_contrato']); ?>
                        </option>
                        <?php
                    }

           }
                        ?>

                    </select>
                </div>

                <div class="fechadocumento-ccd">
                    <label> Fecha del documento: </label>
                    <input id="fechadoc" name="fecha" type="date">
                </div>

                <div class="descripcion-ccd">
                    <label> Descripción: </label>
                    <textarea id="descripcion" rows="5"></textarea>
                </div>

                <div class="botones-comprobacion-ccd">
                    <button type="button" id="bcomprobacion" class="btn btn-verde" onclick="mostrarText();"
                        name="bcomprobacion"> Guardar </button>
                    <button type="button" id="bregresar" class="btn btn-verde" onclick="location.href='principal.php'"
                        name="bregresar"> Regresar </button>
                </div>
            </div>




            <div class="contenedor-convenios-modificados-ccd">
                <h1> CONVENIOS MODIFICADOS </h1>
                <div class="contrato-convenios-modificados-ccd">
                    <label> Contrato: </label>
                    <select id="scontra2" class="select-contrato-ccd" name="scontra2">

                        <?php
                if (isset($_GET["flag"])) {
              $flag=unserialize($_GET["flag"]);
              $valor=serialize($flag);
              foreach ($flag as $key=> $val) {
                  ?>
                        <option value="<?php print($val['id_contrato']); ?>">
                            <?php print($val['numero_contrato']); ?></option>
                        <?php
              }

}
                  ?>

                    </select>
                </div>

                <div class="fecha-entrega-convenios-modificados-ccd">
                    <label> Fecha entraga: </label>
                    <input id="fechaentrega" name="fechaentrega" type="date">
                </div>

                <div class="monto-maximo-convenios-modificados-ccd">
                    <label> Monto maximo: </label>
                    <input id="montomax" placeholder="Monto Maximo" min="0" name="montomax" type="number" step="0.1">
                </div>

                <div class="monto-minimo-convenios-modificados-ccd">
                    <label> Monto minimo: </label>
                    <input id="montomin" placeholder="Monto Minimo" min="0" name="montomin" type="number" step="0.1">
                </div>

                <div class="inicio-vigencia-convenios-modificados-ccd">
                    <label> Inicio vigencia: </label>
                    <input id="finiciovigencia" name="iniciovigencia" type="date">
                </div>

                <div class="fin-vigencia-convenios-modificados-ccd">
                    <label> Fin vigencia: </label>
                    <input id="finvigencia" name="finvigencia" type="date">
                </div>

                <div class="botones-convenios-modificados-ccd">
                    <button type="button" id="bcomprobacion" class="btn btn-verde" onclick="mostrarTexts();"
                        name="button"> Guardar </button>
                    <button type="button" id="bregresar" class="btn btn-verde" onclick="location.href='principal.php'"
                        name="bregresar"> Regresar </button>
                </div>

            </div>


            <div class="contenedor-documentos-adicionales-ccd">
                <h1> DOCUMENTOS ADICIONALES </h1>
                <div class="contrato-documentos-adicionales-ccd">
                    <label> Contrato: </label>
                    <select id="scontra3" class="select-contrato-documentos-adiciones-ccd" name="scontra3">
                        <?php
                if (isset($_GET["flag"])) {
              $flag=unserialize($_GET["flag"]);
              $valor=serialize($flag);
              foreach ($flag as $key=> $val) {
                  ?>
                        <option value="<?php print($val['id_contrato']); ?>">
                            <?php print($val['numero_contrato']); ?></option>
                        <?php
              }

}
                  ?>
                    </select>
                </div>

                <div class="fecha-documento-documentos-adicionales-ccd">
                    <label> Fecha del documento: </label>
                    <input id="fechadoc2" name="fecha" type="date">
                </div>

                <div class="descripcion-documentos-adicionales-ccd">
                    <label> Descripción: </label>
                    <textarea id="descripcion" rows="5"></textarea>
                </div>

                <div class="botones-documentos-adicionales-ccd">
                    <button type="button" id="bcomprobacion" onclick="mostrarText3();" class="btn btn-verde"
                        name="button"> Guardar </button>
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