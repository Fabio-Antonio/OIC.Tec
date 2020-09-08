<?php
error_reporting(0);
session_start();
$verificar=$_SESSION['usuario'];

if($verificar==null||$verificar==''){
 echo "<script> alert ('Debe iniciar sessión')
window.location.replace('index.php');</script>";


}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<link href="https://cdn.datos.gob.mx/assets/css/main.css" rel="stylesheet">
<link href="https://cdn.datos.gob.mx/bower_components/polymer/polymer.html" rel="import">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title> B.E.S.A </title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link href="https://cdn.datos.gob.mx/assets/css/main.css" rel="stylesheet">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link href="https://cdn.datos.gob.mx/assets/img/favicon.ico" rel="shortcut icon">
    <link href="https://cdn.datos.gob.mx/bower_components/dgm-footer/dgm-footer.html" rel="import">
<script src="https://kit.fontawesome.com/263207fda3.js" crossorigin="anonymous"></script>

  </head>
  <body class="front">

    <main>
	<div id="contene">
    <nav class="navbar navbar-inverse sub-navbar navbar-fixed-top" style="height: 55px">
      <div class="container">
        <div class="navbar-header" >
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subenlaces">
          <span class="sr-only">Interruptor de Navegación</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="principal.php" id="besa" style="margin-left: -430px;">B.E.S.A</a>
          <a> <img data-v-4a3754a3="" src="icons/lf.png" alt="logo gobierno de méxico" class="logos" style="width: 80%;height: 50%; margin-top: -40px; margin-bottom: -25px; margin-left: 20px "></a>
        </div>

      </div>
      <div class="notificacionmenu">
            <button type="button" id="hola"><i class="fas fa-bell"></i></button>
      </div>
    </nav>





    <!-- Sidebar -->
    <div class="barra">


    <!-- Sidebar -->

    <div class="w3-sidebar w3-bar-block w3-animate-left" style="display:none;z-index:5" id="mySidebar">
    <button  id="ce" class="w3-bar-item w3-button w3-large" onclick="w3_close()">Cerrar &times;</button>
    <img src="icons/lf.png" alt="sfp" width="145" height="60">
    <a  class="w3-bar-item w3-button"></a>
    <a href="#" class="w3-bar-item w3-button">Inicio</a>
    <a href="alta.html" class="w3-bar-item w3-button">Usuarios</a>
    <a href="#" class="w3-bar-item w3-button" data-toggle="modal" data-target="#mymodal2" >Contacto</a>
     <a href="#" class="w3-bar-item w3-button" data-toggle="modal" data-target="#mymodal3">Nueva Partida</a>

    <a href="cerrar.php" class="w3-bar-item w3-button">Logout -></a>

    </div>

    <!-- Page Content -->
    <div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

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


      <div id="venta111">

        <h1 class="bea" align="center"> B.E.S.A <h1>
          <h2 align="center">SISTEMA DE SEGUIMIENTO DE CONTRATOS</h2>
     <h3 align="center">CAPTURAS</h3>

 <div class="container">
    <div class="card-group">
  <div class="card">
    <img class="card-img-top" src="icons/actores.jpg" alt="Card image cap" width="20%">
    <div class="card-body">
      <h5 class="card-title">Actores</h5>
	<a href="consulta_contrato3.php" >Entregables</a><BR>
	 <a href="requirente_compradora_captura.html">Unidad Requirente</a><BR>
	  <a href="requirente_compradora_captura.html">Unidad Compradora</a><BR>
	<a href="admin.html">Administrador de Contrato</a><BR>
	 <a href="captura_pro_mont.html">Consolidados</a><BR>
	 <a href="captura_pro_mont.html">Proveedor Adjudicado</a><BR>

    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="icons/engrane.jpg" alt="Card image cap"  width="20%">
    <div class="card-body">
      <h5 class="card-title">Administración</h5>
     		 <a href="lectura.html">Carga de archivos (PDF)(CVS)</a><BR>
		   <a href="consulta_contrato.php">Comprobacion/Convenios Modificados/Documentos Adicionales</a><BR>

          <a href="consulta_contrato6.php">Recepción</a><BR>
	 <a href="consulta_contrato6.php">Terminación Anticipada</a><BR>

          <a href="consulta_contrato4.php">Partidas Presupuestales</a><BR>

    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="icons/balanza.jpg" alt="Card image cap"  width="20%">
    <div class="card-body">
      <h5 class="card-title">Legal</h5>

       <a href="consulta_fundamento.php">Fundamento Legal</a><BR>
	 <a href="consulta_fundamento.php">Procedimientos de Contratación</a><BR>
	 <a href="consulta_contrato2.php">Inconformidades</a><BR>
          <a href="consulta_contrato5.php">Facturas</a><BR>
	<a href="consulta_contrato5.php">Pagos Efectuados</a><BR>

      </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>

</div>
 <a class="btn btn-primary" id="nuevo" href="consulta_contrato7.php">Nuevo contrato</a>

  </div>
 <h3 align="center">CONSULTAS</h3>

<div class="container">
<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="icons/calendario.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Calendario</h5>
       <a href="consulta_vigencia.php">Fin vigencia</a><BR>
          <a href="">Consultas por fecha de adjudicación</a><BR>
          <a href="">Fechas entregables</a><BR>
           <a href="">Fecha de formalización</a><BR>

    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="icons/grafica.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Producción</h5>

           <a  href="#"  data-toggle="modal" data-target="#mymodal4">Informes 70-30</a><BR>
          <a href="consulta_top.php">Top por contrato</a><BR>
	    <a href="">Informe montos por procedimiento</a><BR>


    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="icons/guardar.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Administración</h5>
       <a href="" >Consultas por número de contrato</a><BR>
          <a href="">Contratos por proveedor</a><BR>
	  <a href="">Contratos por partida</a><BR>


    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
<a class="btn btn-primary" id="cons" href="numero_de_contrato.php">Consulta contrato</a>

</div>


</main>

<footer>

  <div class="contenedor-todo-footer">

  <div class="contenedor-body">

    <div class="columna1">
      <h1>  </h1>
      <img src="itt.png" alt="ITT">
      <h1> </h1>
      <img src="indice.png" alt="TECNM">
      <h1> </h1>
      <img src="ff.png" alt="logo gobierno de méxico" >
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

 </div>


<div class="modal fade" role="dialog" id="my-modal" aria-labelledby="modal-title">
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
                <button class="btn btn-primary" data-dismiss="modal">Ok</button>                    </div>
            </div>
        </div>
    </div>


<div class="modal fade" role="dialog" id="mymodal2" aria-labelledby="modal-title">
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
    <input class="form-control" id="mail" placeholder="Ejemplo e-mail@e-mail.com" type="email" required>
  </div>

  <div class="form-group">
	  <label class="control-label" for="email-01">Mensaje:</label>
    <textarea class="form-control" id="mensaje" rows="3"></textarea>
  </div>

  <button class="btn btn-default btn-success" type="button" name="submit" onclick="ingresar2();">Enviar</button>
</form>
                </div>
                <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal">Listo!!</button>                    </div>
            </div>
        </div>
    </div>



<div class="modal fade" role="dialog" id="mymodal3" aria-labelledby="modal-title">
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
  </div>
<div class="form-group">
    <label class="control-label" for="email-01">Artículo 2000:</label>
    <input class="cl" id="2000" placeholder="Articulo 2000" type="text" required onChange="suma();">
  </div>
<div class="form-group">
    <label class="control-label" for="email-01">Artículo 3000:</label>
    <input class="cl" id="3000" placeholder="Artículo 3000" type="text" required onChange="suma();">
  </div>
<div class="form-group">
    <label class="control-label" for="email-01">Artículo 5000:</label>
    <input class="cl" id="5000" placeholder="Artículo 5000" type="text" required onChange="suma();">
  </div>


 <div class="form-group">
    <label class="control-label" for="email-01">Presupuesto:</label>
    <input class="form-control" id="presupuesto" placeholder="presupuesto" type="text" required>
  </div>

 <button class="btn btn-default btn-success" type="button" name="submit" onclick="ingresar();">Enviar</button>
</form>
                </div>
                <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal">Listo!!</button>                    </div>
            </div>
        </div>
    </div>




<div class="modal fade" role="dialog" id="mymodal4" aria-labelledby="modal-title">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="modal-title">B.E.S.A</h3>
                </div>
                <div class="modal-body">
                    <h3>
                       Selecciona la Unidad Compradora
                    </h3>


 <div class="form-group">
    <label class="control-label" for="email-01">Unidad Compradora:</label>
  <select id="unidadcom" name="unidad">
                         <?php
			require_once("consulta_principal.php");

                        foreach($flag as $key=> $val){
                ?>

                  <option value="<?php print($val['id_unidad_compradora']); ?>"><?php print($val['nombre_unidad_compradora']); ?></option>
                    <?php
                }

                ?>

                </select>

  </div>

 <button class="btn btn-default btn-success" type="button" name="submit" onclick="ingresar3();">Enviar</button>



                </div>
                <div class="modal-footer">
                     </div>
            </div>
        </div>
    </div>




<script   lenguaje="javascript" type="text/javascript">
function ingresar(){
var clave= (document.getElementById("clave").value);
var presupuesto= (document.getElementById("presupuesto").value);

if(clave.length==0||clave.lenth>4){
alert("El campo no cumple con la longitud correcta");
document.getElementById("clave").focus();
return;
}
if(!(/^[0-9\s]*$/i.test(clave))){
alert("El contiene caracteres no permitidos");
document.getElementById("clave").focus();
return;

}

if(presupuesto.length==0||presupuesto.lenth>45){
alert("El campo no cumple con la longitud correcta");
document.getElementById("presupuesto").focus();
return;
}
if(!(/^[0-9,.\s]*$/i.test(presupuesto))){
alert("El contiene caracteres no permitidos");
document.getElementById("presupuesto").focus();
return;

}


$.post('presupuesto.php',{
"presupuesto":presupuesto,
"clave":clave
},function(data){
alert("listo");
});
}
</script>
<script>
                (function(){
                $(function(){
                $('#my-modal').modal('show')
                });
                }());
        </script>


<script   lenguaje="javascript" type="text/javascript">
function ingresar2(){
var mail= (document.getElementById("mail").value);
var mensaje= (document.getElementById("mensaje").value);

if(mail.length==0||mail.lenth>45){
alert("El campo no cumple con la longitud correcta");
document.getElementById("mail").focus();
return;
}
if(!(/^[@a-zA-Z0-9.\s]*$/i.test(mensaje))){
alert("El contiene caracteres no permitidos");
document.getElementById("mail").focus();
return;

}

if(mensaje.length==0||mensaje.lenth>45){
alert("El campo no cumple con la longitud correcta");
document.getElementById("mensaje").focus();
return;
}
if(!(/^[a-zA-Z0-9.\s]*$/i.test(mensaje))){
alert("El contiene caracteres no permitidos");
document.getElementById("mensaje").focus();
return;

}
$.post('contacto.php',{
"mail":mail,
"mensaje":mensaje
},function(data){
alert("listo");
});
}
</script>

<script   lenguaje="javascript" type="text/javascript">
function ingresar3(){
 var selObj = document.getElementById('unidadcom');
       var nombre_unidad_compradora  = selObj.options[selObj.selectedIndex].text;

      if(nombre_unidad_compradora.length==0||!(/^[A-Za-z0-9]+$/.test(nombre_unidad_compradora))||nombre_unidad_compradora.length>50){
        alert("El campo Unidad Compradora es invalido");
        document.getElementById('unidadcom').focus();
        return;
        }


window.location="consulta_70_30.php?nombre_unidad_compradora="+nombre_unidad_compradora;

}
</script>


<script>

$("#2000").on({
  "focus": function(event) {
    $(event.target).select();
  },
  "keyup": function(event) {
    $(event.target).val(function(index, value) {
      return value.replace(/\D/g, "")
        .replace(/([0-9])([0-9]{2})$/, '$1.$2')
        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
    });
  }
});
</script>

<script>

$("#3000").on({
  "focus": function(event) {
    $(event.target).select();
  },
  "keyup": function(event) {
    $(event.target).val(function(index, value) {
      return value.replace(/\D/g, "")
        .replace(/([0-9])([0-9]{2})$/, '$1.$2')
        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
    });
  }
});
</script>

<script>

$("#5000").on({
  "focus": function(event) {
    $(event.target).select();
  },
  "keyup": function(event) {
    $(event.target).val(function(index, value) {
      return value.replace(/\D/g, "")
        .replace(/([0-9])([0-9]{2})$/, '$1.$2')
        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
    });
  }
});
</script>
<script type="text/javascript">
function suma() {
      var add = 0;
	var cantidad;
      $('.cl').each(function() {
          if (!$(this).val().length==0) {

             cantidad= $(this).val().replace(/,/g,"");

               add+=Number(cantidad);

          }
      });
      $('#presupuesto').val(format(add));
  };
</script>

<script>

function format(n) {
  n = n.toString()
  while (true) {
    var n2 = n.replace(/(\d)(\d{3})($|,|\.)/g, '$1,$2$3')
    if (n == n2) break
    n = n2
  }
  return n
}
</script>

  </body>
</html>
