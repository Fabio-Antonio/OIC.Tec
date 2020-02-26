<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="theme-color" content="#393C3E">
  <meta content="authenticity_token" name="csrf-param" />
<meta content="ErdQojtuwuiS89jIPZHUJbkn4hncUFr/qTelhEohmZM=" name="csrf-token" />
    <title> CONSULTA POR NÚMERO DE CONTRATO </title>
  </head>
  <body>
    <div>
      <center>
        <h1> SISCO </h1>
        <h2> Sistema de Seguimientos a Contratos </h2>
        <h3><font color="gray"> Seleccionar el contrato a consultar </font></h3>
        <!--comienza codigo para llenar el select-->

<script type="text/javascript">
	 function mostrarText(){
 
    var selObj = document.getElementById('contrato');
       var selIndex = selObj.options[selObj.selectedIndex].text;        
         window.location="consulta.php?numero_contrato="+selIndex;
    }
</script>

          <select id="contrato"  name="contrato"  style="width:400px">
            <?php
              $flag=unserialize($_GET["flag"]);

              foreach ($flag as $flag) {
                  ?>
                  <option value="<?php print($flag['id_contrato']); ?>"><?php print($flag		['numero_contrato']); ?></option>
                  <?php
              }
                  ?>
          </select>
          <!--fin llenado select-->


          </br></br></br>
          <table border="0" cellpadding="10">
            <tr>
              <td><button onclick= "mostrarText();" style="width:270px; height:50px"> Consultar </button></td>
              <td><button onclick="location.href='consultas.html'"style="width:270px; height:50px"> Regresar </button></td>
            </tr>
          </table>
       </center>
    </div>
  </body>
</html>
