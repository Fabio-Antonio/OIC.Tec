function ingresar2(){
    var fundamento= (document.getElementById("fundanen").value);
    var fecha= (document.getElementById("fechafun").value);
    var descripcion= (document.getElementById("descripcionfunda").value);
    
    
    if(fundamento.length==0||fundamento.lenth>45){
    
    document.getElementById("fundanen").focus();
     $(function(){
                    $('#my-modal2').modal('show')
                    });
    
    return;
    }
    if(!(/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ,.°\s]*$/i.test(fundamento))){
    document.getElementById("fundanen").focus();
     $(function(){
                    $('#my-modal2').modal('show')
                    });
    
    return;
    
    }
    if(descripcion.length==0||descripcion.lenth>500){
    document.getElementById("descripciónfunda").focus();
     $(function(){
                    $('#my-modal2').modal('show')
                    });
    
    return;
    }
    
    if(!(/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ,.°\s]*$/i.test(descripcion))){
    
    document.getElementById("descripcionfunda").focus();
     $(function(){
                    $('#my-modal2').modal('show')
                    });
    
    return;
    
    }
    
    
    
    $.post('fundamento.php',{
    "fundamento":fundamento,
    "fecha":fecha,
    "descripcion":descripcion
    
    },function(data){
    
    $('#my-modal').modal('show')
    
    });
    }


    function mostrarText(){
        var selObj = document.getElementById('prc');
          var pr  = (document.getElementById('proc').value);
        var rate_value;
    
    
        if (document.getElementById('70').checked) {
      rate_value = document.getElementById('70').value;
    }
    if (document.getElementById('30').checked) {
      rate_value = document.getElementById('30').value;
    }
          if(selObj.length==0){
    
            document.getElementById("prc").focus();
         $(function(){
                    $('#my-modal2').modal('show')
                    });
    
            return;
            }
    
           if(pr.length==0||!(/^[A-Z-a-z0-9ñÑáéíóúÁÉÍÓÚ,.°\s]*$/.test(pr))){
             document.getElementById('proc').focus();
         $(function(){
    
          $('#my-modal2').modal('show')
                    });
    
             return;
        }
    
    
           var selIndex = selObj.options[selObj.selectedIndex].value;
    
        if(selIndex.length==0){
             document.getElementById('prc').focus();
          $(function(){
                    $('#my-modal2').modal('show')
                    });
    
             return;
            }
    
    
            // window.location="procedimientos.php?fundamento="+selIndex+"&procedimientos="+pr;
    
    $.post('procedimientos.php',{
    "fundamento":selIndex,
    "procedimientos":pr,
    "informe":rate_value
    },function(data){
    
    $('#my-modal').modal('show')
    
    });
    }
    