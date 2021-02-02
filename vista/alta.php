<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta name="viewport"
        content="whidth=device-whidth, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title> B.E.S.A </title>

    <link href="https://cdn.datos.gob.mx/assets/css/main.css" rel="stylesheet">
    <link href="https://cdn.datos.gob.mx/bower_components/polymer/polymer.html" rel="import">

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
            <a href="principal2.php" class="w3-bar-item w3-button">Inicio</a>
            
        </div>

        <!-- Page Content -->
        <div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>
        <div>
            <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
        </div>
    </div>
    <form role="form" id="formlg" action="usuarios.php" method="POST">
        <main class="main-alta">
            <div class="contenedor-gris">
                <h1>ALTA USUARIO</h1>
                <div class="usuario-alta">
                    <label for="nombre-alta" class="">Usuario:</label>
                    <input type="text" name="nombre" id="nombre-alta" placeholder="Ingresa Usuario">
                </div>
                <div class="contraseña-alta">
                    <label for="password-alta" class="">Contraseña:</label>
                    <input type="text" name="password" id="password-alta" placeholder="Ingresa Contraseña">
                </div>
                <div class="radio-alta">
                    <label>Tipo de Usuario:</label><br>
                    <input type="radio" name="radio-01" value="administrador" checked="checked" for="file-01"
                        data-toggle="tooltip" data-placement="top" title="Administrador (root)"> ADMINISTRADOR ROOT<br>
                    <input type="radio" name="radio-01" value="administrador" checked="checked" for="file-01"
                        data-toggle="tooltip" data-placement="top" title="Administrador (solo consultas)">
                    ADMINISTRADOR<br>
                    <input type="radio" name="radio-01" value="administrador" checked="checked" for="file-01"
                        data-toggle="tooltip" data-placement="top" title="Usuario solo consultas"> USUARIO<br>
                </div>
                <div class="botones btn-alta">
                    <input type="button" value="Guardar" class="btn btn-verde">
                    <input type="button" value="Regresar" class="btn btn-verde"
                        onclick="location.href='principal2.php'">
                </div>
            </div>
        </main>
    </form>



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