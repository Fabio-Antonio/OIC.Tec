<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link href="https://cdn.datos.gob.mx/assets/img/favicon.ico" rel="shortcut icon">
    <title> CONSULTA POR NUMERO DE CONTRATO </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datos.gob.mx/assets/css/main.css" rel="stylesheet">
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


    <main class="main-consulta-numero-contrato">
        <div class="contenedor-gris-consulta-numero-contrato">
            <h1>GENERAL</h1>

            <div class="general-consulta-numero-contrato">
                <!--select-->

                <div class="selec-consulta-numero-contrato">
                    <h2> Seleccionar el contrato a consultar </h2>
                    <!--inicio de buscar -->
                    <div class="busca">
                        <div class="btn-group bootstrap-select form-control hidden-xs hidden-sm bot">
                            <button type="button" class="btn dropdown-toggle bs-placeholder btn-default" id="drop"
                                data-toggle="dropdown" role="button" title="Filtrar por tema">
                                <span class="filter-option pull-left">Buscar</span>
                                <span class="bs-caret"></span>
                            </button>
                            <div class="dropdown-menu open men" role="combobox">
                                <ul id="lista" class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                    <?php
                 
               require_once("consulta_principal.php");
                foreach ($flag3 as $key=> $val) {

                    ?>

                                    <li data-original-index="<?php print($val['id_contrato']);?>"
                                        id="<?php print($val['id_contrato']);?>">
                                        <a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false"
                                            aria-selected="false">
                                            <span class="text"><?php print($val['numero_contrato']); ?></span>
                                            <span class="glyphicon glyphicon-ok check-mark"></span>
                                        </a>
                                    </li>
                                    <?php
                }


  ?>

                                </ul>
                            </div>
                            <!--men-->



                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
                            </script>

                            <script lenguage="javascript" type="text/javascript">
                            $("#lista li").on("click", function() {
                                var value = $(this).text();
                                var value2 = value.trim();
                                var sOptionVal = $(this).val();
                                var bool = confirm("Se desea consultar: " + value2);

                                if (bool) {
                                     window.location="consulta.php?numero_contrato="+value2;
                                   
                                } else {
                                    alert("solicitud cancelada");
                                }
                            });
                            </script>

                        </div>
                        <!--bot-->
                        <div class="modal later-modal mod">
                            <p>Select a time to deliver.</p>
                        </div>
                        <!--mod-->
                        
                            
                        </button>
                    </div>
                    <!--busca-->


                    <?php

  if (isset($_POST['numero_contrato'])) {


                $numero_contrato=$_POST["numero_contrato"];
               $contrato_compranet=$_POST["contrato_compranet"];
       $numero_unidad=$_POST["numero_unidad"];
               $nombre_unidad_compradora=$_POST["nombre_unidad_compradoras"];
       $unidad=$_POST["unidad"];
               $clave_requirente=$_POST["clave_requirente"];
                $monto_maximo=$_POST["monto_maximo"];
               $monto_minimo=$_POST["monto_minimo"];
       $objeto_contratacion=$_POST["objeto_contratacion"];
               $procedimientos=$_POST["procedimientos"];
               $suficiencia=$_POST["suficiencia"];
       $inicio_vigencia=$_POST["inicio_vigencia"];
               $fin_vigencia=$_POST["fin_vigencia"];
       $notificacion_adjudicada=$_POST["notificacion_adjudicada"];
               $formalizacion_contrato=$_POST["formalizacion_contrato"];
       $requisicion_contrato=$_POST["requisicion_contrato"];
               $sat=$_POST["sat"];
       $imss=$_POST["imss"];
               $infonavit=$_POST["infonavit"];
      $garantia_cumplimiento=$_POST["garantia_cumplimiento"];
      $licitacion=$_POST["licitacion"];
      $fecha_maxima=$_POST["fecha_maxima"];
      $cantidad = $_POST["cantidad"];

      }else{
  $numero_contrato="";
  $contrato_compranet="";
   $numero_unidad="";
   $nombre_unidad_compradora="";
  $unidad="";
   $clave_requirente="";
  $monto_maximo=0.00;
  $monto_minimo=0.00;
  $objeto_contratacion="";
  $procedimientos="";
  $suficiencia="";
   $inicio_vigencia="";
  $fin_vigencia="";
  $notificacion_adjudicada="";
  $formalizacion_contrato="";
  $requisicion_contrato="";
  $sat="";
  $imss="";
  $infonavit="";
  $garantia_cumplimiento="";
  $licitacion="";
  $fecha_maxima="";
  $cantidad="";
  }
         ?>

                </div>
        


            <!--final select-->

            <div class="numero-de-contrato-consulta-numero-contrato">
                <label>Número de contrato</label>
                <input id="intextnumcontracon" type="text" placeholder="NÚMERO DE CONTRATO" readonly="readonly"
                    value="<?php echo $numero_contrato;?>">
            </div>

            <div class="numero-contrato-compranet-consulta-numero-contrato">
                <label>Número Contrato Compranet</label>
                <input id="intextnumcontratocomcon" placeholder="Número Contrato Compranet" type="text"
                    readonly="readonly" value="<?php echo $contrato_compranet; ?>">
            </div>

            <div class="monto-maximo-consulta-numero-contrato">
                <label>Monto Máximo</label>
                <input id="indtextmontmaxcon" placeholder="Monto Máximo" type="text" readonly="readonly"
                    value="<?php $monto_maximo_f=number_format($monto_maximo); echo "$".$monto_maximo_f ?>">
            </div>

            <div class="monto-minimo-consulta-numero-contrato">
                <label>Monto Minimo</label>
                <input id="indtextmontmincon" placeholder="Monto Minimo" type="text" readonly="readonly"
                    value="<?php  $monto_minimo_f=number_format($monto_minimo); echo "$".$monto_minimo_f ?>">
            </div>

            <div class="objeto-contrato-consulta-numero-contrato">
                <label>Objeto del Contrato</label>
                <input id="indtextobjetconcon" placeholder="Objeto del Contrato" type="text" readonly="readonly"
                    value="<?php echo $objeto_contratacion ?>">
            </div>

            <div class="unidad-compradora-consulta-numero-contrato">
                <label>Unidad Compradora</label>
                <input id="texatextunidadcomcon" placeholder="Unidad compradora" readonly="readonly"
                    value="<?php echo $nombre_unidad_compradora; ?>">
            </div>

            <div class="unidad-requirente-consulta-numero-contrato">
                <label>Unidad Requirente</label>
                <input id="indunidadrequircon" placeholder="Unidad Requirente" type="text" readonly="readonly"
                    value="<?php echo $unidad ?>">
            </div>

            <div class="procedimiento-contratacion-consulta-numero-contrato">
                <label>Procedimiento de Contratación</label>
                <input id="indtextfundalegcon" placeholder="Fundamento Legal" type="text" readonly="readonly"
                    value="<?php echo $procedimientos ?>">
            </div>


        </div>

        <!--fechas-->

        <div class="fechas-consulta-numero-contrato">
            <h1>FECHAS</h1>

            <div class="fecha-notificacion-adjudicada-consulta-numero-contrato">
                <label>Fecha de Notificación Adjudicación</label>
                <input id="indtextfechadnotifadcon" placeholder="Fecha de Notificación Adjudicación" type="text"
                    readonly="readonly" value="<?php echo $notificacion_adjudicada ?>">
            </div>

            <div class="garantia-cumplimiento-consulta-numero-contrato">
                <label>Garantia de Cumplimiento</label>
                <input id="indtextgarantcumpcon" placeholder="Garantia de Cumplimiento" type="text" readonly="readonly"
                    value="<?php echo $garantia_cumplimiento ?>">
            </div>

            <div class="formalizacion-contrato-consulta-numero-contrato">
                <label>Formalización Contrato</label>
                <input placeholder="Formalización Contrato" type="text" value="<?php echo $formalizacion_contrato ?>" readonly="readonly">
            </div>

            <div class="sat-consulta-numero-contrato">
                <label>Opinion SAT</label>
                <input id="indtextopinsatcon" placeholder="Opinion SAT" type="text" readonly="readonly"
                    value="<?php echo $sat ?>">
            </div>

            <div class="imss-consulta-numero-contrato">
                <label>Opinion IMSS</label>
                <input id="indtextopinsatcon" placeholder="Opinion IMSS" type="text" readonly="readonly" value="<?php echo $imss ?>">
            </div>

            <div class="infonavit-consulta-numero-contrato">
                <label>Opinion INFONAVIT</label>
                <input id="indtextopinininfocon" placeholder="Opinion INFONAVIT" type="text" readonly="readonly"
                    value="<?php echo $infonavit ?>">
            </div>

            <div class="inicio-vigencia-consulta-numero-contrato">
                <label>Inicio Vigencia</label>
                <input id="indtextiniciovigcon" placeholder="Inicio Vigencia" type="text" readonly="readonly"
                    value="<?php echo $inicio_vigencia ?>">
            </div>

            <div class="fin-vigencia-consulta-numero-contrato">
                <label>Fin Vigencia</label>
                <input id="indtextfinvigenciacon" placeholder="Fin Vigencia" type="text" readonly="readonly"
                    value="<?php echo $fin_vigencia ?>">
            </div>

        </div>



        <!--Entregas-->
        <div class="entregas-consulta-numero-contrato">
            <h1>ENTREGAS</h1>
            <div class="fecha-maxima-entrega-consulta-numero-contrato">
                <label>Fecha Máxima de Entrega</label>
                <input placeholder="Garantia de Cumplimiento" type="text" value="<?php echo $fecha_maxima ?>" readonly="readonly">
            </div>

            <div class="cantidad-consulta-numero-contrato">
                <label>Cantidad</label>
                <input placeholder="Cantidad" type="text" value="<?php echo $cantidad ?>" readonly="readonly">
            </div>

            <div class="botones-consulta-numero-contrato">
                <button class="btn btn-verde" onclick="saludo();" id="btdescargar"> Descargar
                </button>
                <button class="btn btn-verde" id="modificar-consulta">
                    Modificar </button>
            </div>
        </div>

        </div>


        <script language="javascript" type="text/javascript">
        function saludo() {
            var variableEnJS = '<?=$numero_contrato?>';
            alert(variableEnJS);
            window.location = "downloadpdf.php?numero_contrato=" + variableEnJS;
        }
        </script>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"
            integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous">
        </script>
        <script src="js/bootstrap.min.js"></script>

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
            <p><span>Antonio Lorenzana Fabio Enrique</span> | <span>Flores Reyes Jahir</span> | <span> Reyes Villafranca
                    Jose Pedro</span></p>
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