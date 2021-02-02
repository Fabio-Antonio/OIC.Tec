function mostrarText(){
    var selObj = document.getElementById('secontrapartisasp');
      var selObj2 = document.getElementById('inclavepartida');
      var selIndex = selObj.options[selObj.selectedIndex].value;
    var clave_partida  = selObj2.options[selObj2.selectedIndex].value;

      if(clave_partida<0||clave_partida.length==0){
        $(function(){
	$('#my-modal2').modal('show');
	});
        document.getElementById('inclavepartida').focus();
        return;
  }

  if(selIndex<0||selIndex.length==0){
        $(function(){
	$('#my-modal2').modal('show');
	});
        document.getElementById('secontrapartisasp').focus();
        return;
  }
  
       // window.location="partidas_presupuestales.php?nombre_unidad_compradora="+selIndex+"&clave_partida="+clave_partida;
	$.post('../controlador/insercionesController',{
	"nombre_unidad_compradora":selIndex,
	"clave_partida":clave_partida
	},function(data){
    var response = jQuery.parseJSON(data);
           
                if(response.success==true){
                    $(function() {
                    $('#my-modal').modal('show')
                });  
                }else{
                    $(function() {
                    $('#my-modal3').modal('show')
                });
                }
		});
    }