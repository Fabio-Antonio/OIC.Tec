<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <link href="https://cdn.datos.gob.mx/assets/css/main.css" rel="stylesheet">
    <link href="https://cdn.datos.gob.mx/bower_components/polymer/polymer.html" rel="import">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title> </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.datos.gob.mx/assets/css/main.css" rel="stylesheet">
    <link href="https://cdn.datos.gob.mx/assets/img/favicon.ico" rel="shortcut icon">
    <link href="https://cdn.datos.gob.mx/bower_components/dgm-footer/dgm-footer.html" rel="import">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
            <img src="icons/lf.png" alt="sfp" width="145" height="60">
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
        var selObj = document.getElementById('fasecontra');
        var numero_factura = (document.getElementById('innumerofactura').value);
        var monto = (document.getElementById('montos').value);
        var fecha_factura = (document.getElementById('fechafactura').value);
        var fecha_pago = (document.getElementById('fechapago').value);
        var descripcio_factura = (document.getElementById('texadescripcionfactura').value);
        var fecha1 = new Date(fecha_factura);
        var fecha2 = new Date(fecha_pago);




        if (monto < 0 || monto.length == 0) {
            alert("El campo Monto esta fuera de rango");
            document.getElementById("montos").focus();
            return;
        }
        if (numero_factura < 0 || numero_factura.length == 0 || !(/^[0-9]+$/.test(numero_factura))) {
            alert("El campo Numero de Factura esta fuera de rango");
            document.getElementById("innumerofactura").focus();
            return;
        }
        if (fecha1 < fecha2 || String(fecha_factura) == "" || String(fecha_pago) == "") {
            alert("El rango de fechas es incorrecto!!");
            return;
        }
        if (descripcio_factura.length == 0 || !(/^[A-Za-z]+$/.test(descripcio_factura))) {
            alert("El campo Descripción está fuera de formato");
            document.getElementById("texadescripcionfactura").focus();
            return;
        }
        var selIndex = selObj.options[selObj.selectedIndex].text;
        alert(selIndex);
        window.location = "facturas.php?numero_contrato=" + selIndex + "&numero_factura=" + numero_factura + "&monto=" +
            monto + "&fecha_factura=" + fecha_factura + "&fecha_pago=" + fecha_pago + "&descripcio_factura=" +
            descripcio_factura;
    }
    </script>

    <script lenguage="javascript" type="text/javascript">
    function mostrarTexts() {
        var selObj = document.getElementById('secontratopagoe');
        var monto = (document.getElementById('monto').value);
        var fecha_pago = (document.getElementById('fechapagoefectuado').value);
        var descripcion = (document.getElementById('texadescripcionpagoefectuado').value);

        if (monto.length == 0 || monto < 0) {
            alert("El campo Monto esta fuera de rango");
            document.getElementById("monto").focus();
            return;
        }
        if (String(fecha_pago) == "") {
            alert("El campo Fecha Pago no puede estar vacío");
            document.getElementById('fechapagoefectuado').focus();
            return;
        }
        if (descripcion.length == 0 || !(/^[A-Za-z]+$/.test(descripcion))) {
            alert("El campo Descripción está fuera de formato");
            document.getElementById("texadescripcionpagoefectuado").focus();
            return;
        }


        var selIndex = selObj.options[selObj.selectedIndex].text;
        alert(selIndex);
        window.location = "pagos_efectuados.php?numero_contrato=" + selIndex + "&monto=" + monto + "&fecha_pago=" +
            fecha_pago + "&descripcion=" + descripcion;
    }
    </script>



    <main class="main-facturas-pagos-efectuados">
        <div class="contenedor-gris-facturas-pagos-efectuados">

            <div class="contenedor-facturas-facturas-pagos-efectuados">
                <h1> FACTURAS </h1>

                <div class="contrato-facturas-pagos-efectuados">
                    <label>Contrato:</label>
                    <select id="fasecontra" class="fasecontra" name="fasecontra">
                        <?php
                if (isset($_POST["flag"])) {
              $flag=unserialize($_POST["flag"]);
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

                <div class="numero-factura-facturas-pagos-efectuados">
                    <label>Número Factura:</label>
                    <input type="number" id="innumerofactura" name="factura" min="0" placeholder="Número Factura">
                </div>

                <div class="monto-facturas-pagos-efectuados">
                    <label>Monto:</label>
                    <input type="number" id="montos" placeholder="Monto" name="montos" min="0" step="0.1">
                </div>

                <div class="fecha-factura-facturas-pagos-efectuados">
                    <label>Fecha Factura:</label>
                    <input id="fechafactura" name="fechafactura" type="date">
                </div>

                <div class="fecha-pago-facturas-pagos-efectuados">
                    <label>Fecha Pago:</label>
                    <input id="fechapago" name="fechapago" type="date">
                </div>

                <div class="descripcion-facturas-pagos-efectuados">
                    <label> Descripción:</label>
                    <textarea name="name" id="texadescripcionfactura" rows="3"
                        placeholder="Descripción Factura"></textarea>
                </div>

                <div class="botones-facturas-pagos-efectuados">
                    <button type="button" id="bcomprobacion" class="btn btn-verde" onclick="mostrarText();" name="">
                        Guardar </button>
                    <button type="button" id="bregresar" class="btn btn-verde" onclick="location.href='principal.php'"
                        name="bregresar"> Regresar </button>
                </div>

            </div>


            <div class="contenedor-pagos-efectuados-facturas-pagos-efectuados">

                <h1> PAGOS EFECTUADOS </h1>
                <div class="contrato-facturas-f-pagos-efectuados">
                    <label>Contrato:</label>

                    <select id="secontratopagoe" class="secontratopagoe" name="secontratopagoe">
                        <?php
                if (isset($_POST["flag"])) {
              $flag=unserialize($_POST["flag"]);
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

                <div class="monto-facturas-f-pagos-efectuados">
                    <label class="textmonto">Monto:</label>
                    <input type="number" id="monto" placeholder="Monto" min="0" name="montos" step="0.1">
                </div>

                <div class="fechas-pago-facturas-f-pagos-efectuados">
                    <label>Fecha Pago:</label>
                    <input id="fechapagoefectuado" name="fechapagoefectuado" type="date">
                </div>

                <div class="descripcion-facturas-f-pagos-efectuados">
                    <label> Descripción:</label>
                    <textarea name="name" id="texadescripcionpagoefectuado" rows="3"
                        placeholder="Descripción Pago Efectuado"></textarea>
                </div>

                <div class="botones-facturas-f-pagos-efectuados">
                    <button type="button" id="bcomprobacion" class="btn btn-verde" onclick="mostrarTexts();"
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
                <p><i class="fas fa-home"></i> Avenida Universidad #1074, col. Xoco, alcaldía Benito Juárez, C.P.
                    03330,
                    CDMX </p>
                <p><i class="fas fa-envelope"></i> arturo.orci@nube.sep.gob.mx</p>
                <p><i class="fas fa-phone-square-alt"></i> 36068650 ext.66429</p>
            </div>

            <div class="info-tec">
                <h4>Instituto Tecnológico de Tláhuac</h4>
                <p><i class="fas fa-home"></i> Av. Estanislao Ramírez # 301 Colonia Ampliación Selene C.P. 13430
                    Tláhuac
                    CDMX</p>
                <p><i class="fas fa-phone-square-alt"></i> 7312-5614 | 7312-5616 | 5841-0560| </p>
            </div>
        </div>

        <div class="copyright">
            <p><span>&copy 2020 Todos Los Derechos Reservados</span></p>
            <p><span>Lorenzana Fabio Enrique</span> | <span>Flores Reyes Jahir</span> | <span> Reyes Villafranca
                    Jose
                    Pedro</span></p>
        </div>
    </footer>

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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet">
    </link>
    <script src="https://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
    <script lenguage="javascript" src="js/funciones_entregables.js" type="text/javascript">
    </script>
</body>

</html>