<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.datos.gob.mx/assets/css/main.css" rel="stylesheet">
    <link href="https://cdn.datos.gob.mx/bower_components/polymer/polymer.html" rel="import">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title> Entregables</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.datos.gob.mx/assets/css/main.css" rel="stylesheet">
    <link href="https://cdn.datos.gob.mx/assets/img/favicon.ico" rel="shortcut icon">
    <link href="https://cdn.datos.gob.mx/bower_components/dgm-footer/dgm-footer.html" rel="import">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../vista/css/normalize.css">
    <link rel="stylesheet" href="../vista/css/estile.css">

</head>

<body>
    <header class="site-header">
        <div class="contenedor encabezado">
            <p>
                B.E.S.A
            </p>
            <div class="imagen-header">
                <img src="../vista/img/lf.png" alt="FuncionPublica">
            </div>
            <span></span>
        </div>
    </header>



    <!-- Sidebar -->
    <div class="barra">


        <!-- Sidebar -->

        <div class="w3-sidebar w3-bar-block w3-animate-left" style="display:none;z-index:5" id="mySidebar">
            <button id="ce" class="w3-bar-item w3-button w3-large" onclick="w3_close()">Cerrar &times;</button>
            <img src="../vista/icons/lf.png" alt="sfp" width="145" height="60">
            <a class="w3-bar-item w3-button"></a>
            <a href="../vista/principal2.php" class="w3-bar-item w3-button">Inicio</a>

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
                        La cantidad de entregables es mayor a las requerida!!
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>




    <main class="main-entregables">
        <form role="form">
            <div class="contenedor-gris-one">
                <div class="contenedor-gris-entregables">
                    <h1>ENTREGABLES </h1>
                    <div class="contrato-entregables">
                        <label>Contrato:</label>
                        <select id="secontrae" name="secontrae">
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
                    <div class="fechaentrega-entregables">
                        <label> Fecha entrega: </label>
                        <input id="infechaentregamo" name="fecha_entrega" type="date" required>
                    </div>
                    <div class="nombreentregable-entregables">
                        <label> Nombre Entregable: </label>
                        <input type="text" id="innombreentregables" name="nombre_entregable"
                            placeholder="Nombre Entregable">
                    </div>
                    <div class="cantidadentregable-entregables">
                        <label> Cantidad Entregables:</label>
                        <input type="number" id="incantidade" min="0" name="cantidad_entregable"
                            placeholder="Cantidad Entregables">
                    </div>
                    <div class="direccionentregable-entregables">
                        <label> Dirección Entregable:</label>
                        <input type="text" id="indireccione" name="direccion_entregable"
                            placeholder="Dirección Entregables">
                    </div>
                    <div class="precio-unitario-entregables">
                        <label> Precio Unitario:</label>
                        <input type="text" id="unitario" name="unitario" placeholder="Precio Unitario">
                    </div>
                    <div class="porcentaje-penalizacion-entragables">
                        <label> Porcentaje De Penalización:</label>
                        <input type="text" id="porcentaje" name="porcentaje" placeholder="Porcentaje De Penalización">
                    </div>
                    <div class="fechas-entregables">
                        <label>Entregas programadas:</label>
                        <select id="entregas-programadas" name="entregas-programadas">
                 
                        </select>
                    </div>
                    <div class="descripcion-entregables">
                        <label>Descripción:</label>
                        <textarea name="descripcion" id="descripcion" placeholder="Descripción" cols="30"
                            rows="5"></textarea>
                    </div>
                    <div class="botones btn-entregables">
                        <!--button type="button" id="bcomprobacion" class="btn btn-primary" onclick="mostrarText();" name="button"> Guardar </button>-->
                        <button type="button" id="bcomprobacion" class="btn btn-verde" onclick="mostrarText();"
                            name="button">Guardar</button>
                        <button type="button" id="bregresar" class="btn btn-verde"
                            onclick="location.href='../vista/principal2.php'" name="bregresar"> Regresar </button>
                    </div>

                </div>
            </div>
        </form>
    </main>






    <footer class="site-footer">
        <div class="contenedor display-footer">
            <div class="footer-img">
                <div class="im">
                    <img src="../vista/img/itt.png" alt="ittlahuac">
                </div>
                <div class="im">
                    <img src="../vista/img/indice.png" alt="ittlahuac">
                </div>
                <div class="im">
                    <img src="../vista/img/ff.png" alt="ittlahuac">
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
    <script lenguage="javascript" src="../vista/js/funciones_entregables.js" type="text/javascript">
    </script>
    <script>

$(function() {
    <?php
 require_once("../modelo/consulta_principal.php");                                
                            ?>
   var arreglo = <?php echo json_encode($array) ?>;
   autocompletar(arreglo);                         


});
</script>


</body>

</html>