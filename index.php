<!DOCTYPE html>
<html lang="en" dir="ltr">
<link href="https://cdn.datos.gob.mx/assets/css/main.css" rel="stylesheet">
<link href="https://cdn.datos.gob.mx/bower_components/polymer/polymer.html" rel="import">
<link href="css/estilos.css" rel="stylesheet">

<head>

<link href="https://cdn.datos.gob.mx/assets/img/favicon.ico" rel="shortcut icon">
<link href="https://cdn.datos.gob.mx/bower_components/dgm-footer/dgm-footer.html" rel="import">
  <meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Sistema BESA </title>

    <style>
@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url(banner.jpg);
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index: 0;
}
.eye{
  position:absolute;
  height:200px;
  width:600px;
  top: 5px;
  left : 400px;
  z-index: 1;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: -0.9;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #FBFBEF !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=button]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=button]:hover{
	opacity: 0.8;
}

.login button[type=button]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
</style>

</head>

<nav class="navbar navbar-inverse sub-navbar navbar-fixed-top">

<div class="container">

<div class="navbar-header">

<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subenlaces">

<span class="sr-only">Interruptor de Navegaci�n</span>

<span class="icon-bar"></span>

<span class="icon-bar"></span>

<span class="icon-bar"></span>

</button>

<a class="navbar-brand" href="/">B.E.S.A</a>
  <a> <img data-v-4a3754a3="" src="icons/lf.png" alt="logo gobierno de méxico" class="logos" style="width: 30%; margin-top: 5px; margin-bottom: -25px; "></a>

</div>

</div>

</nav>


<body class="front">
<main>

  <div class="body"></div>
		<div class="grad"></div>
    <div style="position: relative; left: 80px; top: 0;">
		<img src="icons/lf.png" class='eye' style="width: 500px; height: 210px; margin-top: 50px;  "/></div>
		<div class="header">
			<div><span> B.E.S.A </span></div>
		</div>
		<br>
		<div class="login">

        <form  role="form" id="formlg" action="login.php" method="POST">
<div class="form-group">
  <label class="control-label" for="email-01">Usuario:</label>
<input class="form-control" id="email-01" type="text" pattern="[A-Za-z0-9_-]{1,8}" required placeholder="username" name="nombre">
</div>
	<div class="form-group">
       <label class="control-label" for="password-01">Password:</label>

 <input class="form-control" id="password-01" type="password" placeholder="password" pattern="[A-Za-z0-9_-]{1,8}" required name="password">
</div>
				<button class="btn btn-primary btn-lg" type="submit">Entrar</button>
        </form>
		</div>

</main>
</body>



</html>
