<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Informe Consolidado</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datos.gob.mx/assets/css/main.css" rel="stylesheet">
    <link href="https://cdn.datos.gob.mx/assets/img/favicon.ico" rel="shortcut icon">
    <link href="https://cdn.datos.gob.mx/bower_components/dgm-footer/dgm-footer.html" rel="import">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js">
    </script>
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
            <img src="icons/lf.png" alt="sfp" width="145" height="60">
            <a class="w3-bar-item w3-button"></a>
            <a href="#" class="w3-bar-item w3-button">Inicio</a>
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
    <main class="main-informe-consolidado">
        <div class="contenedor-gris-informe-consolidado-one">
            <div class="conenedor-informe-consolidado">
                <h1> INFORME CONSOLIDADO </h1>
                <div class="tabla-consolidador">
                    <table class="table table" id="table7030">
                        <!-- <caption>Consolidador</caption>-->
                        <tr>
                            <th>Clave requirente</th>
                            <th>Unidad Requirente</th>
                            <th>Licitación</th>
                            <th>Monto total</th>
                            <th>Descripción</th>

                        </tr>
                        <tr>
                            <td><?php $clave_requirente=$_POST["clave_requirente"]; echo $clave_requirente;?></td>
                            <td><?php $unidad=$_POST["unidad"]; echo $unidad;?></td>
                            <td><?php $monto_total=$_POST["monto_total"]; $tot=number_format($monto_total); echo '$'.$tot;?>
                            </td>
                            <td><?php $licitacion=$_POST["licitacion"]; echo $licitacion;?></td>
                            <td><?php $descripcion=$_POST["descripcion"]; echo $descripcion;?></td>


                        </tr>
                    </table>

                </div>
            </div>

            <div class="contenedor-contratos-informe">
                <h1>CONTRATOS</h1>
                <div class="tabla-contrato">
                    <h2>Contratos Correspondientes</h2>
                    <table id="myTable" class="tablemy">
                        <thead>
                            <tr>
                                <th>Unidad compradora</th>
                                <th>Procedimiento de contratación </th>
                                <th>Unidad requirente</th>
                                <th>Proveedor adjudicado</th>
                                <th>Partida presupuestal</th>
                                <th>Licitacion</th>
                                <th>Número de contrato</th>
                                <th>Número compranet</th>
                                <th>Objeto de contratación</th>
                                <th>Monto</th>
                            </tr>
                        </thead>
                    </table>

                    <script>
                    $(document).ready(function() {
                        <
                        ? php $id_consolidado = $_POST["id_consolidado"]; ? >
                        var id_consolidado = '<?=$id_consolidado?>';
                        var table = $('#myTable').dataTable({
                            "language": {
                                "lengthMenu": "Mostrar _MENU_ Inserciones por página",
                                "zeroRecords": "No se encontraron resultados - lo siento",
                                "search": "Buscar:",
                                "info": "Mostrar páginas _PAGE_ of _PAGES_",
                                "infoEmpty": "No existen registros",
                                "infoFiltered": "(filtered from _MAX_ total records)",
                                "loadingRecords": "Cargando...",

                                "paginate": {
                                    "first": "Primero",
                                    "previous": "Previa",
                                    "next": "Siguiente",
                                    "last": "Última"
                                },
                            },
                            "bProcessing": true,
                            "sAjaxSource": "contratos_consolidado.php?id_consolidado=" + id_consolidado,
                            "bPaginate": true,
                            "sPaginationType": "full_numbers",
                            "iDisplayLength": 5,
                            "aoColumns": [{
                                    mData: 'nombre_unidad_compradora'
                                },
                                {
                                    mData: 'procedimientos'
                                },
                                {
                                    mData: 'unidad'
                                },
                                {
                                    mData: 'nombre'
                                },
                                {
                                    mData: 'nombre'
                                },
                                {
                                    mData: 'licitacion'
                                },
                                {
                                    mData: 'numero_contrato'
                                },
                                {
                                    mData: 'contrato_compranet'
                                },
                                {
                                    mData: 'objeto_contratacion'
                                },
                                {
                                    mData: 'monto_max',
                                    render: $.fn.dataTable.render.number(',', '.', 2, '$')
                                },


                            ]
                        });
                    });
                    </script>
                </div>
            </div>
            <div class="barra-progreso">

                <canvas id="myCanvas" width="500" height="200"></canvas>
                <script>
                var canvas = document.getElementById('myCanvas');
                var context = canvas.getContext('2d');
                var al = 0;
                var start = 4.72;
                var cw = context.canvas.width / 2;
                var ch = context.canvas.height / 2;
                var diff;
                var monto_total = '<?=$monto_total?>'; <
                ? php $total = $_POST["total"]; ? >
                var total = '<?=$total?>';
                var valor = 0;

                function evaluar(total, monto_total) {
                    return ((total * 100) / monto_total);
                }

                function progressBar() {
                    diff = (al / 100) * Math.PI * 2;
                    context.clearRect(0, 0, 400, 200);
                    context.beginPath();
                    context.arc(cw, ch, 80, 0, 2 * Math.PI, false);
                    context.fillStyle = '#FFF';
                    context.fill();
                    context.strokeStyle = '#6F7271';
                    context.stroke();
                    context.fillStyle = '#000';
                    context.strokeStyle = '#9D2449';
                    context.textAlign = 'center';
                    context.lineWidth = 30;
                    context.font = '10pt Verdana';
                    context.beginPath();
                    context.arc(cw, ch, 80, start, diff + start, false);
                    context.stroke();
                    context.fillText(al + '%', cw + 2, ch + 6);
                    valor = evaluar(total, monto_total);
                    if (al >= valor) {
                        clearTimeout(bar);
                    }

                    al++;
                }

                var bar = setInterval(progressBar, 50);
                </script>


            </div>
            <div class="botones-informe">
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