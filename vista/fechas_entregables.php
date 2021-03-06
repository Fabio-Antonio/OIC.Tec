<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Fechas Entregables</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datos.gob.mx/assets/css/main.css" rel="stylesheet">
    <link href="https://cdn.datos.gob.mx/assets/img/favicon.ico" rel="shortcut icon">
    <link href="https://cdn.datos.gob.mx/bower_components/dgm-footer/dgm-footer.html" rel="import">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js">
    </script>
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

    <!------------------------------------------------------>
    <!------------------------------------------------------>
    <!-- INICIA REGISTRO------------------------------------>
    <!------------------------------------------------------>
    <!------------------------------------------------------>
    <main class="main-informe-consolidado">
        <div class="contenedor-gris-informe-consolidado-one">
            <div class="conenedor-informe-consolidado">
                <h1> FECHAS ENTREGABLES </h1>
                <div class="tabla-consolidador">
                    <table class="table table" id="table7030">
                        <!-- <caption>Consolidador</caption>-->
                        <tr>
                            <th>Numero de contrato</th>
                            <th>Compranet</th>
                            <th>Objeto de contratación</th>
                            <th>Proveedor</th>
                            <th>Cantidad</th>
                        </tr>
                        <tr>
                            <td><?php $numero_contrato=$_POST["numero_contrato"]; echo $numero_contrato;?></td>
                            <td><?php $contrato_compranet=$_POST["contrato_compranet"]; echo $contrato_compranet;?></td>
                            <td><?php $objeto_contratacion=$_POST["objeto_contratacion"]; echo $objeto_contratacion;?>
                            </td>
                            <td><?php $nombre=$_POST["nombre"]; echo $nombre;?></td>
                            <td><?php $cantidad=$_POST["cantidad"]; echo $cantidad;?></td>



                        </tr>
                    </table>

                </div>
            </div>

            <div class="contenedor-contratos-informe">
                <h1>ENTREGAS</h1>
                <div class="tabla-contrato">
                    <h2>Entregas correspondientes</h2>
                    <table id="myTable" class="tablemy">
                        <thead>
                            <tr>
                                <th>Numero de contrato</th>
                                <th>Fecha entrega </th>
                                <th>Fecha máxima</th>
                                <th>Entregable</th>
                                <th>Cantidad</th>
                                <th>Dirección</th>
                                <th>Penalización</th>
                                <th>Porcentaje de penalización</th>
                                <th>Precio Unitario</th>
                                <th>Días de penalización</th>
                                <th>Documentación</th>
                            </tr>
                        </thead>
                    </table>

                    <script>
                    $(document).ready(function() {
                        <?php $numero_contrato = $_POST["numero_contrato"];?>
                        var numero_contrato = '<?=$numero_contrato?>';
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
                            "sAjaxSource": "../controlador/controlador_tablas.php?numero_contrato=" +
                                numero_contrato+"&metodo=h",
                            "bPaginate": true,
                            "sPaginationType": "full_numbers",
                            "iDisplayLength": 5,
                            "aoColumns": [{
                                    mData: 'numero_contrato'
                                },
                                {
                                    mData: 'fecha_entrega'
                                },
                                {
                                    mData: 'fecha_maxima'
                                },
                                {
                                    mData: 'nombre_entregable'
                                },
                                {
                                    mData: 'cantidad_entregable'
                                },
                                {
                                    mData: 'direccion_entregable'
                                },
                               
                                {
                                    mData: 'penalizacion',
                                    render: $.fn.dataTable.render.number(',', '.', 2, '$')
                                },
                                {
                                    mData: 'porcentaje'
                                },
                                {
                                    mData: 'precio_unitario',
                                    render: $.fn.dataTable.render.number(',', '.', 2, '$')
                                },
                                {
                                    mData: 'dias'
                                },
                                
                                {
                                    "defaultContent": "<button class=boton-pdf><img src=../vista/icons/pdf3.png alt=pdf></button>"
                                },

                            ],
                            "fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                                if(aData.penalizacion>0){
                                $(nRow).css('color', 'Red');
                                }else{
                                    $(nRow).css('color', 'green');
                                }
                            }
                        });
                        $('#myTable tbody').on('click','button',function(){
                            var data = table.dataTable().api().row($(this).parents('tr')).data();
                            var url = data["url_constancia"];
                            if(url.length==0){
                                alert("Esta entrega no tiene documentación");
                                return;
                            }
                           window.location= "../modelo/downloadpdf_constancia.php?url_constancia="+data["url_constancia"];
                            

                        })
                    });
                    </script>
                </div>
            </div>
            <div class="barra-progreso">

                <canvas id="myCanvas" width="500" height="200" class="barra-progres"></canvas>
                <script>
                var canvas = document.getElementById('myCanvas');
                var context = canvas.getContext('2d');
                var al = 0;
                var start = 4.72;
                var cw = context.canvas.width / 2;
                var ch = context.canvas.height / 2;
                var diff;
                var cantidad = '<?=$cantidad?>';
                <?php $total = $_POST["total"];?>
                var total = '<?=$total?>';
                var valor = 0;

                function evaluar(total, cantidad) {
                    return ((total * 100) / cantidad);
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
                    valor = evaluar(total, cantidad);
                    if (al >= valor) {
                        clearTimeout(bar);
                    }

                    al++;
                }

                var bar = setInterval(progressBar, 50);
                </script>


            </div>
            <div class="botones-informe">
                <button type="button" id="bregresar" class="btn btn-verde" onclick="location.href='../vista/principal2.php'"
                    name="bregresar"> Regresar </button>
            </div>

        </div>
            <div id="documento"></div>
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
</body>

</html>