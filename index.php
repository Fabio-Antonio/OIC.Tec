<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistema B.E.S.A</title>
    <link  rel="shortcut icon" href="https://cdn.datos.gob.mx/assets/img/favicon.ico"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vista/css/normalize.css">
    <link rel="stylesheet" href="vista/css/estile.css">
</head>

<body>
    <header class="site-header">
        <div class="contenedor encabezado">
            <p>
                B.E.S.A
            </p>
            <div class="imagen-header">
                <img src="vista/img/lf.png" alt="FuncionPublica">
            </div>
            <span></span>
        </div>
    </header>
    <main class="login">
        <div class="contenedor formularios-logo">
            <h1>B.E.S.A</h1>
            <form action="controlador/logueo.php" method="post" class="formulario-logo">
                <div class="campo">
                    <label for="email-01">USUARIO</label>
                    <input type="text" name="nombre" id="email-01" placeholder="Username">
                </div>
                <div class="campo">
                    <label for="password-01">PASSWORD</label>
                    <input type="password" name="password" id="password-01" placeholder="Password">
                </div>
                <div>
                    <input type="submit" value="Entrar" class="btn btn-verde">
                </div>
            </form>
        </div>
    </main>
</body>

</html>
