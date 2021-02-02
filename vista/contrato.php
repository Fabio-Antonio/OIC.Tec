<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Contrato</title>



    <link href="https://cdn.datos.gob.mx/assets/css/main.css" rel="stylesheet">
    <link href="https://cdn.datos.gob.mx/assets/img/favicon.ico" rel="shortcut icon">
    <link href="https://cdn.datos.gob.mx/bower_components/dgm-footer/dgm-footer.html" rel="import">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400;700&display=swap" rel="stylesheet">
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
            <img src="../vista/img/lf.png" alt="sfp" width="145" height="60">
            <a class="w3-bar-item w3-button"></a>
            <a href="../vista/principal2.php" class="w3-bar-item w3-button">Inicio</a>
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



    <main class="main-contrato">
        <div class="contenedor-gris-contrato">

            <h1> CONTRATO </h1>

            <div class="contenedor-select--unidad-compradora-contrato">
                <label>Unidad Compradora:</label>
                <select id="seunidadcompradoracontrato" class="select-unidad-compradora"
                    name="seunidadcompradoracontrato">
                    <?php
                                                                        
                                    $flag=unserialize($_POST["flag"]);
                                    foreach ($flag as $key => $val) {
                                ?>
                    <option value="<?php print($val['id_unidad_compradora']); ?>">
                        <?php print($val['nombre_unidad_compradora']); ?></option>
                    <?php
                                    
                                }
                                ?>
                </select>
            </div>

            <div class="contenedor-select-unidad-requirente-contrato">
                <label>Unidad Requirente:</label>
                <select id="seunidadrequirentecontrato" class="select-unidad-requirente"
                    name="seunidadrequirentecontrato">

                    <?php
                                    $flag=unserialize($_POST["flag3"]);
                                    foreach ($flag as $key => $val) {
                                ?>
                    <option value="<?php print($val['id_requirente']); ?>"><?php print($val['unidad']); ?>
                    </option>
                    <?php
                                    
                                }
                                ?>
                </select>
            </div>

            <div class="contenedor-select-admministrador-contrato">
                <label>Administrador:</label>
                <select id="seadministradorcontrato" class="seadministradorcontrato" name="select-administrador">

                    <?php
                                    $flag=unserialize($_POST["flag4"]);
                                    foreach ($flag as $key => $val) {
                                ?>
                    <option value="<?php print($val['id_administrador']); ?>">
                        <?php print($val['nombre']);
                                            echo " ";
                                            print($val["apellido_paterno"]);
                                            echo " ";
                                            print($val["apellido_materno"]);  ?>
                    </option>
                    <?php
                                    
                                }
                                ?>
                </select>

            </div>

            <div class="contenedor-proveedor-adjudicado-contrato">
                <label>Proveedor Adjudicado:</label>
                <select id="seproveedoradjudicadocontrato" class="select-proveedor-adjudicado"
                    name="seproveedoradjudicadocontrato">

                    <?php
                                    $flag=unserialize($_POST["flag6"]);
                                    foreach ($flag as $key => $val) {
                                ?>
                    <option value="<?php print($val['id_proveedor']); ?>"><?php print($val['nombre']); ?>
                    </option>
                    <?php
                                    
                                }
                                ?>
                </select>
            </div>

            <div class="contenedor-select-procedimiento-contratacion-contrato">
                <label>Procedimineto Contratación:</label>
                <!--cambie class secontrarecepcion a secontrarecepcionc" -->
                <select id="secontrarecepcion" class="secontrarecepcionc" name="secontrarecepcion">

                    <?php
                                    $flag=unserialize($_POST["flag2"]);
                                    foreach ($flag as $key => $val) {
                                ?>
                    <option value="<?php print($val['id_procedimiento_contratacion']); ?>">
                        <?php print($val['procedimientos']); ?></option>
                    <?php
                                    
                                }
                                ?>
                </select>
            </div>

            <div class="contenedor-articulo-normativo-contrato">
                <label>Articulo Normativo:</label>
                <select id="searticulonormativocontrato" class="select-articulo-normativo"
                    name="searticulonormativocontrato">


                </select>
            </div>

            <div class="contenedor-numero-contrato-contrato">
                <form action="fechas.php" method="POST">
                    <label>Número Contrato:</label>
                    <input type="text" id="innumerocontratoc" name="innumerocontratoc" placeholder="Número Contrato">
            </div>

            <div class="contenedor-procedimineto-compranet-contrato">
                <label>Compranet:</label>
                <input type="text" id="inprocedimientocompranetc" name="inprocedimientocompranetc"
                    placeholder="Procedimiento Compranet">
            </div>

            <div class="contenedor-contraro-compranet-contrato">
                <label>Contrato Compranet:</label>
                <input type="number" id="incontratocompranetc" name="incontratocompranetc" min="0"
                    placeholder="Contrato Compranet" step="1.0">
            </div>

            <div class="contenedor-convenio-interno-contrato">
                <label>Convenio Interno:</label>
                <input type="text" id="inconveniointernoc" name="inconveniointernoc" placeholder="Convenio Interno">
            </div>

            <div class="contenedor-total-contrato">
                <label id="ccp"> Total: </label>
                <input name="monto_maximo" id="montomaxi" required type="text">
            </div>

            <div class="contenedor-monto-minimo-contrato">
                <label> Monto Minimo: </label>
                <input id="montomini" disabled="disabled" name="monto_minimo" required type="text">
            </div>

            <div class="contenedor-objeto-contratacion-contrato">
                <label>Objeto Contratación:</label>
                <textarea id="inobjetocontratacionc" name="inobjetocontratacionc"
                    placeholder="Objeto Contratación"></textarea>
            </div>

            <div class="contenedor-documento-descripcion-contrato">
                <label>Documentación Descripción:</label>
                <Textarea id="indocumentodescripcionc" name="indocumentodescripcionc"
                    placeholder="Documentación Descripción"></textarea>
            </div>

            <div class="contenedor-contrato-abierto-contrato">
                <label>Contrato Abierto</label>
                <input type="checkbox" id="incontratoabiertoc">
            </div>

            <div class="contenedor-consilidado-contrato">
                <label>Consolidado</label>
                <input type="checkbox" id="checkconsolidado">
            </div>

            <div class="contenedor-select-consolidado-contrato">
                <label>Consolidado:</label>
                <select id="seconsolidadocontrato" name="seconsolidadocontrato" disabled="disabled">

                    <?php
                                        $flag=unserialize($_POST["flag8"]);
                                        if($flag!="vacio"){
                                        foreach ($flag as $key => $val) {
                                    ?>
                    <option value="<?php print($val['id_consolidado']); ?>">
                        <?php print($val['licitacion']); ?></option>
                    <?php
                                        }
                                    }else{
                                            ?>
                    <option value="">Vacío</option>
                    <?php
                                        }

                                    ?>
                </select>
            </div>

            <div class="contenedor-botones-contrato">
                <button id="btg" onclick="mostrarText();" class="btn btn-verde" type="button"> Guardar
                </button>
                <button type="submit" id="bcomprobacion" class="btn btn-verde" name="bcomprobacion">
                    Siguiente</button>

            </div>

            </form>
        </div>
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
            <p><span>Antonio Lorenzana Fabio Enrique</span> | <span>Flores Reyes Jahir</span> | <span> Reyes Villafranca
                    Jose Pedro</span></p>
        </div>
    </footer>




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
                    <button class="btn btn-primary" onclick="cambio();">Ok</button>
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
                        El número de contrato ya existe o se ha excedido el presupuesto para está partida!!
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>


    <script lenguage="javascript" type="text/javascript">
    function mostrarText() {
        <?php $partida = $_POST['partida']; ?>
        var partida = Number('<?= $partida ?>');
        var selObj = document.getElementById('seunidadcompradoracontrato');
        var selObj2 = document.getElementById('secontrarecepcion');
        var selObj3 = document.getElementById('seunidadrequirentecontrato');
        var selObj4 = document.getElementById('seadministradorcontrato');
        var selObj6 = document.getElementById('seproveedoradjudicadocontrato');
        var selObj7 = document.getElementById('searticulonormativocontrato');
        var selObj8 = document.getElementById('seconsolidadocontrato');

        if (selObj.length == 0) {
            $(function() {
                $('#my-modal2').modal('show')
            });

            document.getElementById("seunidadcompradoracontrato").focus();
            return;
        }
        if (selObj2.length == 0) {
            $(function() {
                $('#my-modal2').modal('show')
            });

            document.getElementById("secontrarecepcion").focus();
            return;
        }
        if (selObj3.length == 0) {
            $(function() {
                $('#my-modal2').modal('show')
            });


            document.getElementById("seunidadrequirentecontrato").focus();
            return;
        }
        if (selObj4.length == 0) {
            $(function() {
                $('#my-modal2').modal('show')
            });

            document.getElementById("seadministradorcontrato").focus();
            return;
        }

        if (selObj6.length == 0) {
            $(function() {
                $('#my-modal2').modal('show')
            });

            document.getElementById("seproveedoradjudicadocontrato").focus();
            return;
        }
       
        var min = 0;
        var valor = 0;
        var envío;
        var numero_contrato = (document.getElementById('innumerocontratoc').value);
        var procedimiento_compranet = (document.getElementById('inprocedimientocompranetc').value);
        var contrato_compranet = (document.getElementById('incontratocompranetc').value);
        var convenio_interno = (document.getElementById('inconveniointernoc').value);
        var objeto_contratacion = (document.getElementById('inobjetocontratacionc').value);
        var max = (document.getElementById('montomaxi').value);
        var monto_maximo = Number(max.replace(/[$,]/g, ""));
        var monto_minimo = min;
        if (document.getElementById("incontratoabiertoc").checked == true) {
            var contrato_abierto = (document.getElementById('incontratoabiertoc').value = 1);
            min = (document.getElementById('montomini').value);
            var monto_minimo = Number(min.replace(/[$,]/g, ""));
        } else {
            var contrato_abierto = (document.getElementById('incontratoabiertoc').value = 0);

            var monto_minimo = min;
        }

        if (document.getElementById("checkconsolidado").checked == true) {

            var selObj8 = document.getElementById('seconsolidadocontrato');
            var selIndex8 = selObj8.options[selObj8.selectedIndex].value;
            envio = selIndex8;
        } else {
            envio = valor;

        }

        var documentacion_descripcion = (document.getElementById('indocumentodescripcionc').value);
        var selIndex = selObj.options[selObj.selectedIndex].value;
        var selIndex2 = selObj2.options[selObj2.selectedIndex].value;
        var selIndex3 = selObj3.options[selObj3.selectedIndex].value;
        var selIndex4 = selObj4.options[selObj4.selectedIndex].value;
        var selIndex6 = selObj6.options[selObj6.selectedIndex].value;
        var selIndex7 = selObj7.options[selObj7.selectedIndex].value;
        if (numero_contrato.length == 0 || !(/^[A-Za-z0-9\-]+$/.test(numero_contrato))) {
            $(function() {
                $('#my-modal2').modal('show')
            });

            document.getElementById("innumerocontratoc").focus();
            return;
        }
        if (procedimiento_compranet.length == 0 || !(/^[A-Za-z0-9ñÑÁÉÍÓÚáéíóú\-\s]*$/.test(
                procedimiento_compranet))) {
            $(function() {
                $('#my-modal2').modal('show')
            });

            document.getElementById("inprocedimientocompranetc").focus();
            return;
        }

        if (contrato_compranet.length == 0 || !(/^[0-9]+$/.test(contrato_compranet)) || contrato_compranet.length >
            7 || contrato_compranet < 0 || contrato_compranet.length < 7) {
            $(function() {
                $('#my-modal2').modal('show')
            });

            document.getElementById("incontratocompranetc").focus();
            return;
        }
        if (convenio_interno.length == 0 || !(/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ.,\s]*$/.test(convenio_interno))) {
            $(function() {
                $('#my-modal2').modal('show')
            });

            document.getElementById("inconveniointernoc").focus();
            return;
        }
        if (objeto_contratacion.length == 0 || !(/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ.,\s]*$/.test(objeto_contratacion))) {
            $(function() {
                $('#my-modal2').modal('show')
            });

            document.getElementById("inobjetocontratacionc").focus();
            return;
        }
        if (documentacion_descripcion.length == 0 || !(/^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ.,\s]*$/.test(
                documentacion_descripcion))) {
            $(function() {
                $('#my-modal2').modal('show')
            });

            document.getElementById("indocumentodescripcionc").focus();
            return;
        }

        if (monto_maximo.length == 0 || !(/^[0-9,.]+$/.test(monto_maximo)) || monto_maximo < 0) {
            $(function() {
                $('#my-modal2').modal('show')
            });

            document.getElementById("montomaxi").focus();
            return;
        }

        if (monto_minimo.length == 0 || !(/^[0-9,.]+$/.test(monto_minimo)) || monto_minimo < 0) {
            $(function() {
                $('#my-modal2').modal('show')
            });

            document.getElementById("montomini").focus();
            return;
        }

        if (monto_minimo > monto_maximo) {
            $(function() {
                $('#my-modal2').modal('show')
            });

            document.getElementById("montomini").focus();
            return;

        }
        

        $.post('../controlador/insercionesController.php', {

            "nombre_unidad_compradora": selIndex,
            "procedimientos": selIndex2,
            "unidad_requirente": selIndex3,
            "nombre": selIndex4,
            "proveedor": selIndex6,
            "articulo": selIndex7,
            "partida": partida,
            "numero_contrato": numero_contrato,
            "procedimiento_compranet": procedimiento_compranet,
            "contrato_compranet": contrato_compranet,
            "convenio_interno": convenio_interno,
            "objeto_contratacion": objeto_contratacion,
            "documentacion_descripcion": documentacion_descripcion,
            "contrato_abierto": contrato_abierto,
            "monto_maximo": monto_maximo,
            "monto_minimo": monto_minimo,
            "consolidado": envio,
        }, function(data) {
            var response = jQuery.parseJSON(data);
            if (response.success == true) {
                $(function() {
                    $('#my-modal').modal('show')
                });
                $('#btg').attr("disabled", true)
            } else {
                $(function() {
                    $('#my-modal3').modal('show')
                });
            }

        });
    }
    </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet">
    </link>
    <script src="https://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
    <script lenguage="javascript" src="../vista/js/funciones_contrato.js" type="text/javascript">
    </script>

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