<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Contrato</title>

    <link href="css/estilos.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.datos.gob.mx/assets/css/main.css" rel="stylesheet">
    <link href="https://cdn.datos.gob.mx/assets/img/favicon.ico" rel="shortcut icon">
    <link href="https://cdn.datos.gob.mx/bower_components/dgm-footer/dgm-footer.html" rel="import">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body class="front">
    <main>
        <nav class="navbar navbar-inverse sub-navbar navbar-fixed-top" style="height: 55px; ">
            <div class="container">
                <div class="navbar-header" style="margin-top: 10px;">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#subenlaces">
                        <span class="sr-only">Interruptor de Navegación</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="principal2.php" id="besa2">B.E.S.A</a>
                    <a> <img data-v-4a3754a3="" src="icons/lf.png" alt="logo gobierno de méxico" class="logos"
                            style="width: 80%;height: 50%; margin-top: -100px; margin-bottom: -25px; margin-left: 420px "></a>
                </div>

                <div class="collapse navbar-collapse" id="subenlaces" style=" width:108%; margin-top: -30px;">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Enlace</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false">Desplegable <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Acción</a></li>
                                <li><a href="#">Otra acción</a></li>
                                <li><a href="#">Algo más aquí</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Enlace separado</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br><br><br><br>
        <!-- ----------------------------------------------->
        <!-- ----------------------------------------------->
        <!--INICIO DE MENU A LA IZQUIERDA-------------------------->
        <!-- ----------------------------------------------->
        <!-- ----------------------------------------------->


        <div class="barraizquierda">


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
                    <a href="#" class="w3-bar-item w3-button" data-toggle="modal" data-target="#mymodal3">Nueva
                        Partida</a>

                    <a href="cerrar.php" class="w3-bar-item w3-button">Logout -></a>

                </div>

                <!-- Page Content -->
                <div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay">
                </div>

                <div>
                    <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
                </div>
            </div>
        </div>
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
        </div>



        <div class="modal fade" role="dialog" id="my-modal2" aria-labelledby="modal-title">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#D0021B;">
                        <h3 class="modal-title" id="modal-title">B.E.S.A</h3>
                    </div>
                    <div class="modal-body">
                        <p>
                            Algunos campos no son compatibles!!
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




        <!------------------------------------------------------>
        <!------------------------------------------------------>
        <!-- INICIA REGISTRO------------------------------------>
        <!------------------------------------------------------>
        <!------------------------------------------------------>



        <div id="contec">
            <div class="container1">
                <div class="row">
                    <div class='col-sm-20 col-md-20 col-ld-20'>
                        <h2 class="fuu"> CONTRATO </h2>
                        <div class="dunidadcompradoracontrato">
                            <label class="textcontratorecepcion">Unidad Compradora:</label>
                            <select id="seunidadcompradoracontrato" class="seunidadcompradoracontrato"
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

                        <div class="dunidadrequirentecontrato">
                            <label class="textcontratorecepcion">Unidad Requirente:</label>
                            <select id="seunidadrequirentecontrato" class="seunidadrequirentecontrato"
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

                        <div class="dadministradorcontrato">
                            <label class="textcontratorecepcion">Administrador:</label>
                            <select id="seadministradorcontrato" class="seadministradorcontrato"
                                name="seadministradorcontrato">

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
                        <div class="dproveedoradjudicadocontrato">
                            <label class="textcontratorecepcion">Proveedor Adjudicado:</label>
                            <select id="seproveedoradjudicadocontrato" class="seproveedoradjudicadocontrato"
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
                        <div class="dprocedimientocontratacioncontrato">
                            <label class="textcontratorecepcion">Procedimineto Contratación:</label>
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

                        <form action="fechas.php" method="POST">
                            <div class="dnumerocontratoc">
                                <label class="textnumerocontrato">Número Contrato:</label>
                                <input type="text" class="form-control" id="innumerocontratoc" name="innumerocontratoc"
                                    placeholder="Número Contrato">
                            </div>
                            <div class="dprocedimientocompranetc">
                                <label class="textprocedimientocompranet">Procedimiento Compranet:</label>
                                <input type="text" class="form-control" id="inprocedimientocompranetc"
                                    name="inprocedimientocompranetc" placeholder="Procedimiento Compranet">
                            </div>
                            <div class="dcontratocompranetc">
                                <label class="textcontratocompranet">Contrato Compranet:</label>
                                <input type="number" class="form-control" id="incontratocompranetc"
                                    name="incontratocompranetc" min="0" placeholder="Contrato Compranet" step="1.0">
                            </div>
                            <div class="dconveniointernoc">
                                <label class="textconveniointerno">Convenio Interno:</label>
                                <input type="text" class="form-control" id="inconveniointernoc"
                                    name="inconveniointernoc" placeholder="Convenio Interno">
                            </div>
                            <div id="dcmmax">
                                <label id="ccp"> Total: </label>
                                <input class="form-control" name="monto_maximo" id="montomaxi"
                                    placeholder="Monto Maximo" required type="text">
                            </div>
                            <div id="dcmnmm">
                                <label id="ccp"> Monto Minimo: </label>
                                <input class="form-control" id="montomini" disabled="disabled"
                                    placeholder="Monto Minimo" name="monto_minimo" required type="text">
                            </div>

                            <div class="dobjetocontratacionc">
                                <label class="textobjetocontratacion">Objeto Contratación:</label>
                                <textarea class="form-control" id="inobjetocontratacionc" name="inobjetocontratacionc"
                                    placeholder="Objeto Contratación"></textarea>
                            </div>
                            <div class="ddocumentodescripcionc">
                                <label class="textdocumentodescripcion">Documentación Descripción:</label>
                                <Textarea class="form-control" id="indocumentodescripcionc"
                                    name="indocumentodescripcionc" placeholder="Documentación Descripción"></textarea>
                            </div>
                            <div class="check">
                                <label class="tche">
                                    Contrato Abierto
                                </label>
                            </div>
                            <div class="ch">
                                <input type="checkbox" id="incontratoabiertoc">

                            </div>
                            <div class="checonsolodidado">
                                <div class="check2">
                                    <label class="tche">
                                        Consolidado
                                    </label>
                                </div>
                                <div class="ch2">
                                    <input type="checkbox" id="checkconsolidado">

                                </div>
                            </div>
                            <div class="dconsolidadocontrato">
                                <label class="textcontratorecepcion">Consolidado:</label>
                                <select id="seconsolidadocontrato" class="seconsolidadocontrato"
                                    name="seconsolidadocontrato" disabled="disabled">

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

                            <div id="dbtgcpc1">
                                <button id="btg" onclick="mostrarText();" class="btn btn-primary" type="button"> Guardar
                                </button>
                                <button type="submit" id="bcomprobacion" class="btn btn-primary" name="bcomprobacion">
                                    Siguiente</button>

                            </div>
                        </form>
                    </div>



                </div>




            </div>
        </div>


        <footer>

            <div class="contenedor-todo-footer">

                <div class="contenedor-body">

                    <div class="columna1">
                        <h1> </h1>
                        <img src="itt.png" alt="ITT">
                        <h1> </h1>
                        <img src="indice.png" alt="TECNM">
                        <h1> </h1>
                        <img src="ff.png" alt="logo gobierno de méxico">
                    </div>

                    <div class="columna2">
                        <h1>B.E.S.A</h1>
                        <ul class="list-unstyled">
                            <li>
                                <p align="center">
                                    <img src="icons/user.svg" alt="">
                                    Responsable del programa: Ing. David Rogelio Rodríguez Arias
                                </p>
                            </li>
                            <li>
                                <div class="tel">
                                    <p align="justify">
                                        <img src="icons/mail.svg" alt="">
                                        drrodriguez@nube.sep.gob.mx
                                </div>
                                </p>
                            </li>
                            <li>
                                <div class="tel">
                                    <p align="justify">
                                        <img src="icons/phone.svg" alt="">
                                        36018650 ext. 66125
                                </div>
                                </p>
                            </li>
                        </ul>
                    </div>

                    <div class="columna3">
                        <h1>Órgano Interno de Control de la SEP</h1>
                        <ul class="list-unstyled">
                            <li>
                                <p align="center">
                                    <img src="icons/home.svg" alt="">
                                    Avenida Universidad #1074, col. Xoco, alcaldía Benito Juárez, C.P. 03330, CDMX
                                </p>
                            </li>
                            </li>
                            <li>
                                <div class="tel2">
                                    <p align="justify">
                                        <img src="icons/mail.svg" alt="">
                                        arturo.orci@nube.sep.gob.mx
                                </div>
                                </p>
                            </li>
                            <li>
                                <div class="tel2">
                                    <p align="justify">
                                        <img src="icons/phone.svg" alt="">
                                        36068650 ext.66429
                                </div>
                                </p>
                            </li>
                        </ul>

                    </div>

                    <div class="columna4">
                        <h1>Instituto Tecnológico de Tláhuac</h1>
                        <ul class="list-unstyled">
                            <div class="tel2">
                                <li>
                                    <p align="center">
                                        <img src="icons/home.svg" alt="">
                                        Av. Estanislao Ramírez # 301 Colonia Ampliación Selene C.P. 13430 Tláhuac CDMX
                                    </p>
                                </li>
                            </div>
                            <li>
                                <div class="tel2">
                                    <p align="justify">
                                        <img src="icons/phone.svg" alt="">
                                        7312-5614 | 7312-5616 | 5841-0560|
                                </div>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="contenedor-footer">
                <div class="copyright">
                    <a>&copy; 2020 Todos los Derechos Reservados</a>
                </div>
                <div class="autores">
                    <a>Antonio Lorenzana Fabio Antonio</a> |
                    <a>Flores Reyes Jahir</a> |
                    <a>Reyes Villafranca Jose Pedro</a>
                </div>
            </div>

        </footer>

        <script lenguage="javascript" type="text/javascript">
        function mostrarText() {
            <?php $partida = $_POST['partida']; ?>
            var partida = Number('<?= $partida ?>');
            var selObj = document.getElementById('seunidadcompradoracontrato');
            var selObj2 = document.getElementById('secontrarecepcion');
            var selObj3 = document.getElementById('seunidadrequirentecontrato');
            var selObj4 = document.getElementById('seadministradorcontrato');
            var selObj6 = document.getElementById('seproveedoradjudicadocontrato');
            //var selObj8 = document.getElementById('seconsolidadocontrato');

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
            /*if (selObj8.length == 0) {
                $(function() {
                    $('#my-modal2').modal('show')
                });


                document.getElementById("seconsolidadocontrato").focus();
                return;
            }*/
            var min = 0;
            var con=0;
            var numero_contrato = (document.getElementById('innumerocontratoc').value);
            var procedimiento_compranet = (document.getElementById('inprocedimientocompranetc').value);
            var contrato_compranet = (document.getElementById('incontratocompranetc').value);
            var convenio_interno = (document.getElementById('inconveniointernoc').value);
            var objeto_contratacion = (document.getElementById('inobjetocontratacionc').value);
            var max = (document.getElementById('montomaxi').value);
	     var consolidado;
            var monto_maximo = Number(max.replace(",", ""));
            var monto_minimo = min;
            if (document.getElementById("incontratoabiertoc").checked == true) {
                var contrato_abierto = (document.getElementById('incontratoabiertoc').value = 1);
                min = (document.getElementById('montomini').value);
                var monto_minimo = Number(min.replace(",", ""));
            } else {
                var contrato_abierto = (document.getElementById('incontratoabiertoc').value = 0);

                var monto_minimo = min;
            }

            if (document.getElementById("checkconsolidado").checked == true) {
                var selObj8 = document.getElementById('seconsolidadocontrato');
                 consolidado = selObj8.options[selObj8.selectedIndex].value;
            } else {
                consolidado=con;
                
            }



            var documentacion_descripcion = (document.getElementById('indocumentodescripcionc').value);
            var selIndex = selObj.options[selObj.selectedIndex].value;
            var selIndex2 = selObj2.options[selObj2.selectedIndex].value;
            var selIndex3 = selObj3.options[selObj3.selectedIndex].value;
            var selIndex4 = selObj4.options[selObj4.selectedIndex].value;
            var selIndex6 = selObj6.options[selObj6.selectedIndex].value;
            //var selIndex8 = selObj8.options[selObj8.selectedIndex].value;
            if (numero_contrato.length == 0 || !(/^[A-Za-z0-9]+$/.test(numero_contrato))) {
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
            /*window.location="contrato_in.php?nombre_unidad_compradora="+selIndex+"&procedimientos="+selIndex2+"&unidad_requirente="+selIndex3+"&nombre="+selIndex4+
                    "&proveedor="+selIndex6+"&procedimiento="+selIndex8+"&numero_contrato="+numero_contrato+
            "&procedimiento_compranet="+procedimiento_compranet+"&contrato_compranet="+contrato_compranet+"&convenio_interno="+convenio_interno+"&objeto_contratacion="
            +objeto_contratacion+"&documentacion_descripcion="+documentacion_descripcion+"&monto_maximo="+monto_maximo+"&monto_minimo="+monto_minimo;*/

            $.ajax({
            type: "POST",
            url: 'contrato_in.php',
            
            data:{
                "nombre_unidad_compradora": selIndex,
                "procedimientos": selIndex2,
                "unidad_requirente": selIndex3,
                "nombre": selIndex4,
                "proveedor": selIndex6,
                "consolidado": consolidado,
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
            },
            dataType: 'JSON',
            success : function(data) {
                if(data.success==true){
                    $(function() {
                    $('#my-modal').modal('show')
                });  
                $('#btg').attr("disabled", true)   
                }else{
                    $(function() {
                    $('#my-modal2').modal('show')
                });
                }
            }

            });

        }
        </script>
        <script lenguage="javascript" src="js/funciones_contrato.js" type="text/javascript">
        </script>
</body>

</html>
