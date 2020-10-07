<?php
error_reporting(0);
session_start();
$verificar=$_SESSION['usuario'];

if($verificar==null||$verificar==''){
 echo "<script> alert ('Debe iniciar sessión')
window.location.replace('index');</script>";


}
?>
<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.datos.gob.mx/assets/css/main.css" rel="stylesheet">
<link href="https://cdn.datos.gob.mx/bower_components/polymer/polymer.html" rel="import">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="shortcut icon" href="https://cdn.datos.gob.mx/assets/img/favicon.ico">
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
            <a href="#" class="w3-bar-item w3-button"><?php echo $_SESSION['usuario'];?></a>
            <a href="principal.php" class="w3-bar-item w3-button">Inicio</a>
            <a href="alta.html" class="w3-bar-item w3-button">Usuarios</a>
            <a href="#" class="w3-bar-item w3-button" data-toggle="modal" data-target="#mymodal2">Contacto</a>
            <a href="#" class="w3-bar-item w3-button" data-toggle="modal" data-target="#mymodal3">Nueva Partida</a>
            <a href="#" class="w3-bar-item w3-button" data-toggle="modal" data-target="#mymodal5">Nueva Contrato</a>
            <a href="numero_de_contrato.php" class="w3-bar-item w3-button">Consulta de Contrato</a>


            <a href="cerrar.php" class="w3-bar-item w3-button">Logout -></a>
        </div>
        <!-- Page Content -->
        <div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>
        <div>
            <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
        </div>
    </div>
    <div class="titulo_principal contenedor">
        <h1>B.E.S.A</h1>
        <h2>SISTEMA DE SEGUIMIENTO DE CONTRATOS</h2>
    </div>
    <main class="contenedor seccion">
        <div class="capturas">
            <div class="tarjeta">
                <div class="img_tarjeta">
                    <img src="img/equipo.jpg" alt="actores">
                </div>
                <h3>ACTORES</h3>
                <ul>
                    <li><i class="fas fa-plus-circle"></i><a href="consulta_contrato3.php"> Entregables</a></li>
                    <li><i class="fas fa-plus-circle"></i> <a href="requirente_compradora_captura.html">Unidad
                            Requirente</a></li>
                    <li><i class="fas fa-plus-circle"></i> <a href="requirente_compradora_captura.html">Unidad
                            Compradora</a></li>
                    <li><i class="fas fa-plus-circle"></i><a href="admin.html"> Administrador de Contrato</a></li>
                    <li><i class="fas fa-plus-circle"></i> Consolidados</li>
                    <li><i class="fas fa-plus-circle"></i> <a href="captura_pro_mont.html">Proveedor Adjudicado</a></li>
                </ul>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet, perferendis!</p>
            </div>
            <div class="tarjeta">
                <div class="img_tarjeta">
                    <img src="img/engranes.png" alt="admistracion">
                </div>
                <h3>ADMINISTRACIÓN</h3>
                <ul>
                    <li><i class="fas fa-plus-circle"></i> <a href="lectura.html">Carga de archivos (PDF)(CVS)</a></li>
                    <li><i class="fas fa-plus-circle"></i><a href="consulta_contrato.php"> Comprobación/Convenios
                            Modificados</a></li>
                    <li><i class="fas fa-plus-circle"></i><a href="consulta_contrato.php"> Documentos Adicionales</a>
                    </li>
                    <li><i class="fas fa-plus-circle"></i> Recepción</li>
                    <li><i class="fas fa-plus-circle"></i> Terminación Anticipada</li>
                    <li><i class="fas fa-plus-circle"></i><a href="consulta_contrato4.php"> Partidas Presupuestales</a>
                    </li>
                </ul>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet, perferendis!</p>
            </div>
            <div class="tarjeta">
                <div class="img_tarjeta">
                    <img src="img/legal.jpg" alt="legal">
                </div>
                <h3>LEGAL</h3>
                <ul>
                    <li><i class="fas fa-plus-circle"></i><a href="consulta_fundamento.php"> Fundamento Legal</a></li>
                    <li><i class="fas fa-plus-circle"></i><a href="consulta_fundamento.php"> Procedimientos de
                            Contratación</a></li>
                    <li><i class="fas fa-plus-circle"></i> Inconformidades</li>
                    <li><i class="fas fa-plus-circle"></i> Facturas</li>
                    <li><i class="fas fa-plus-circle"></i> Pagos Efectuados</li>
                </ul>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet, perferendis!</p>
            </div>
            <div class="tarjeta">
                <div class="img_tarjeta">
                    <img src="img/calendario.jpg" alt="calendario">
                </div>
                <h3>CALENDARIO</h3>
                <ul>
                    <li><i class="fas fa-plus-circle"></i> <a href="consulta_vigencia.php">Fin VIgencia</a></li>
                    <li><i class="fas fa-plus-circle"></i> Consultas por Fecha de Adjudicación</li>
                    <li><i class="fas fa-plus-circle"></i> Fechas Entregables</li>
                    <li><i class="fas fa-plus-circle"></i> Fecha de FOrmalización</li>
                </ul>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet, perferendis!</p>
            </div>
            <div class="tarjeta">
                <div class="img_tarjeta">
                    <img src="img/pastel.jpg" alt="pastel">
                </div>
                <h3>PRODUCCIÓN</h3>
                <ul>
                    <li><i class="fas fa-plus-circle" data-toggle="modal" data-target="#mymodal4"></i> Informe 70-30
                    </li>
                    <li><i class="fas fa-plus-circle"></i> <a href="consulta_top.php">Top por Contrato</a></li>
                    <li><i class="fas fa-plus-circle"></i> Informe Montos por Procedimiento</li>
                </ul>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet, perferendis!</p>
            </div>
            <div class="tarjeta">
                <div class="img_tarjeta">
                    <img src="img/proveedor.jpg" alt="proveedor">
                </div>
                <h3>PRESUPUESTO</h3>
                <ul>
                    <li><i class="fas fa-plus-circle"></i> Consultas por Número de Contrato</li>
                    <li><i class="fas fa-plus-circle"></i> Contrato por Proveedor</li>
                    <li><i class="fas fa-plus-circle"></i> Contratos por Partida</li>
                </ul>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet, perferendis!</p>
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
            <p><span>Antonio Lorenzana Fabio Enrique</span> | <span>Flores Reyes Jahir</span> | <span> Reyes Villafranca
                    Jose Pedro</span></p>
        </div>
    </footer>
    <!--MODALS-->

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

    <div class="modal fade" role="dialog" id="my-modal"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" aria-labelledby="modal-title">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="modal-title">B.E.S.A</h3>
                </div>
                <div class="modal-body">
                    <p>
                        Bienvenido al Sistema B.E.S.A
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" role="dialog" id="mymodal2"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" aria-labelledby="modal-title">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="modal-title">B.E.S.A</h3>
                </div>
                <div class="modal-body">
                    <h3>
                        Contacto
                    </h3>

                    <form role="form" id="formulario">
                        <div class="form-group">
                            <label class="control-label" for="email-01">E-mail de destino:</label>
                            <input class="form-control" id="mail" placeholder="Ejemplo e-mail@e-mail.com" type="email"
                                required>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="email-01">Mensaje:</label>
                            <textarea class="form-control" id="mensaje" rows="3"></textarea>
                        </div>

                        <button class="btn btn-default btn-success" type="button" name="submit"
                            onclick="ingresar2();">Enviar</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal">Listo!!</button>
                </div>
            </div>
        </div>
    </div>



    

    <div class="modal fade" role="dialog" id="mymodal4" aria-labelledby="modal-title"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="modal-title">B.E.S.A</h3>
                </div>
                <div class="modal-body">
                    <h3>
                        Selecciona la Unidad Compradora
                    </h3>

                    <form role="form" id="formulario">
                        <div class="form-group">
                            <label class="control-label" for="email-01">Unidad Compradora:</label>
                            <select id="unidadcom" name="unidad">
                                <?php
			require_once("consulta_principal.php");

                        foreach($flag as $key=> $val){
                ?>

                                <option value="<?php print($val['id_unidad_compradora']); ?>">
                                    <?php print($val['nombre_unidad_compradora']); ?></option>
                                <?php
                }

                ?>

                            </select>
                          

                            <label class="control-label" for="email-01">Partida Presupuestal:</label>
                            <select id="partidass" name="partidass">
                                <?php
			require_once("consulta_partida.php");

                        foreach($flag2 as $key=> $val){
                ?>

                                <option value="<?php print($val['id']); ?>">
                                    <?php print($val['clave']); echo " "; print($val['nombre']); ?></option>
                                <?php
                }

                ?>

                            </select>


                        </div>




                        <button class="btn btn-default btn-success" type="button" name="submit"
                            onclick="ingresar3();">Enviar</button>

                    </form>

                </div>
                <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal">cerrar</button>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" role="dialog" id="mymodal5" aria-labelledby="modal-title"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="modal-title">B.E.S.A</h3>
                </div>
                <div class="modal-body">
                    <h3>
                        Selecciona una Partida Presupuestal
                    </h3>

                    <form role="form" id="formulario">
                        <div class="form-group">
                            <label class="control-label" for="email-01">Partida Presupuestal:</label>
                            <select id="partidas" name="partidas">
                                <?php
			require_once("consulta_partida.php");

                        foreach($flag2 as $key=> $val){
                ?>

                                <option value="<?php print($val['id']); ?>">
                                    <?php print($val['clave']); echo " "; print($val['nombre']); ?></option>
                                <?php
                }

                ?>

                            </select>

                        </div>

                        <button class="btn btn-default btn-success" type="button" name="submit"
                            onclick="ingresar4();">Enviar</button>

                    </form>

                </div>
                <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal">cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" role="dialog"
        id="mymodal3" aria-labelledby="modal-title">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="modal-title">B.E.S.A</h3>
                </div>
                <div class="modal-body">
                    <h3>
                        Ingrese nueva partida presupuestal
                    </h3>

                    <form role="form" id="formulario">
                        <div class="form-group">
                            <label class="control-label" for="email-01">Clave:</label>
                            <input class="form-control" id="clave" placeholder="Clave de partida" type="text" required>
                            <label class="control-label" for="email-01">Partida:</label>
                            <input class="form-control" id="partida" placeholder="Partida" type="text" required>

                            <div class="form-group">
                                <label class="control-label" for="email-01">Presupuesto:</label>
                                <input class="form-control" id="presupuesto" placeholder="presupuesto" type="text"
                                    required>
                            </div>

                            <button class="btn btn-default btn-success" type="button" name="submit"
                                onclick="ingresar();">Enviar</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal">Listo!!</button>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/funciones_principal.js"></script>

</body>

</html>