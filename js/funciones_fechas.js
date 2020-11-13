function mostrarText(){
    var notificacion_adjudicada=(document.getElementById("innotificacionadjudicadaf").value);
    var formalizacion_contrato= (document.getElementById("informalizacioncontratof").value);
    var requisicion_contrato= (document.getElementById("inrequesicioncontratof").value);
    var garantia_cumplimiento= (document.getElementById("ingarantiacumplimientof").value);
    var inicio_vigencia= (document.getElementById("ininiciovigenciaf").value);
    var sat= (document.getElementById("insatf").value);
    var imss= (document.getElementById("inimssf").value);
    var infonavit= (document.getElementById("ininfonavitf").value);
    var suficiencia= (document.getElementById("insuficienciaf").value);
    var fin_vigencia= (document.getElementById("infinvigenciaf").value);
    var descripcion= (document.getElementById("infechadescripcion").value);
    
    if(String(notificacion_adjudicada)==""){
     $(function(){
                    $('#my-modal2').modal('show')
                    });
    
    document.getElementById("innotificacionadjudicadaf").focus();
    
    }
    if(String(formalizacion_contrato)==""){
     $(function(){
                    $('#my-modal2').modal('show')
                    });
    
    document.getElementById("informalizacioncontratof").focus();
    
    }
    if(String(requisicion_contrato)==""){
     $(function(){
                    $('#my-modal2').modal('show')
                    });
    
    document.getElementById("inrequesicioncontratof").focus();
    
    }
    if(String(garantia_cumplimiento)==""){
     $(function(){
                    $('#my-modal2').modal('show')
                    });
    
    document.getElementById("ingarantiacumpliminetof").focus();
    
    }
    
    if(String(inicio_vigencia)==""){
     $(function(){
                    $('#my-modal2').modal('show')
                    });
    
    document.getElementById("ininiciovigenciaf").focus();
    
    }
    if(String(sat)==""){
     $(function(){
                    $('#my-modal2').modal('show')
                    });
    
    document.getElementById("insatf").focus();
    
    }
    
    if(String(imss)==""){
     $(function(){
     $('#my-modal2').modal('show')
                    });
    
    document.getElementById("inimssf").focus();
    
    }
    if(String(infonavit)==""){
     $(function(){
                    $('#my-modal2').modal('show')
                    });
    
    document.getElementById("ininfonavitf").focus();
    
    }
    
    
    if(String(suficiencia)==""){
     $(function(){
                    $('#my-modal2').modal('show')
                    });
    
    document.getElementById("insuficienciaf").focus();
    
    }
    
    if(String(fin_vigencia)==""){
     $(function(){
                    $('#my-modal2').modal('show')
                    });
    
    document.getElementById("infinvigenciaf").focus();
    
    }
    if(descripcion.length==0||!(/^[A-Za-z0-9]+$/.test(descripcion))){
     $(function(){
                    $('#my-modal2').modal('show')
                    });
    
    document.getElementById("infechadescripcion").focus();
    
    }
    
    
    
    
    $.post('contrato_fechas.php', {
                  "innotificacionadjudicadaf": notificacion_adjudicada,
                  "informalizacioncontratof": formalizacion_contrato,
                  "inrequesicioncontratof": requisicion_contrato,
                  "ingarantiacumplimientof": garantia_cumplimiento,
             "ininiciovigenciaf": inicio_vigencia,
             "insatf": sat,
             "inimssf": imss,
             "ininfonavitf": infonavit,
             "insuficienciaf": suficiencia,
             "infinvigenciaf": fin_vigencia,
             "infechadescripcion": descripcion
    
    
              },function(data) {
                $('#my-modal3').modal('show')
                   $('#my-modal').modal('show')
    
              });
    
    }
  
    $(document).ready(function(){
    
    $('#infinvigenciaf').change(function(){
         var inicio_vigencia= $('#ininiciovigenciaf').val();
    var fecha_inicio_vigencia= new Date(inicio_vigencia);
    
          var $this = $(this);
          var insertedVal = $this.val();
          var fecha_fin_vigencia= new Date(insertedVal);
    
          if (fecha_fin_vigencia  <= fecha_inicio_vigencia ){
    
    
             $this.css({"color":"red","border":"1px solid red"});
          }else{
         $this.css({"color":"green","border":"1px solid green"});
    
        }
       })
    });
    
    
    $(document).ready(function(){
    
    $('#informalizacioncontratof').change(function(){
             var notificacion_adjudicada= $('#innotificacionadjudicadaf').val();
    var fecha_notificacion_adjudicada= new Date(notificacion_adjudicada);
    
          var $this = $(this);
          var insertedVal = $this.val();
          var formalizacion_contrato = new Date(insertedVal);
          
          if (formalizacion_contrato < fecha_notificacion_adjudicada||formalizacion_contrato>fecha_notificacion_adjudicada.setDate(fecha_notificacion_adjudicada.getDate()+15) ){
    
    
             $this.css({"color":"red","border":"1px solid red"});
          }else{
             $this.css({"color":"green","border":"1px solid green"});
    
            }
       })
    });
    
    
  
    $(document).ready(function(){
    $('#insatf').change(function(){
             var notificacion_adjudicada= $('#innotificacionadjudicadaf').val();
        var fecha_notificacion_adjudicada= new Date(notificacion_adjudicada);
         var formalizacion_contrato= $('#informalizacioncontratof').val();
        var fecha_formalizacion_contrato= new Date(formalizacion_contrato);
            var $this = $(this);
          var insertedVal = $this.val();
          var sat = new Date(insertedVal);
       if (sat>fecha_formalizacion_contrato||sat<fecha_notificacion_adjudicada.setDate(fecha_notificacion_adjudicada.getDate()-30)){
    
             $this.css({"color":"red","border":"1px solid red"});
          }else{
             $this.css({"color":"green","border":"1px solid green"});
    
            }
       })
    });
    
    
    $(document).ready(function(){
    $('#inimssf').change(function(){
             var notificacion_adjudicada= $('#innotificacionadjudicadaf').val();
            var fecha_notificacion_adjudicada= new Date(notificacion_adjudicada);
            var formalizacion_contrato= $('#informalizacioncontratof').val();
            var fecha_formalizacion_contrato= new Date(formalizacion_contrato);
            var $this = $(this);
          var insertedVal = $this.val();
          var imss = new Date(insertedVal);
       if (imss>fecha_formalizacion_contrato||imss<fecha_notificacion_adjudicada.setDate(fecha_notificacion_adjudicada.getDate()-30)){
    
             $this.css({"color":"red","border":"1px solid red"});
          }else{
             $this.css({"color":"green","border":"1px solid green"});
    
            }
       })
    });
    
    
    $(document).ready(function(){
    $('#ininfonavitf').change(function(){
             var notificacion_adjudicada= $('#innotificacionadjudicadaf').val();
            var fecha_notificacion_adjudicada= new Date(notificacion_adjudicada);
            var formalizacion_contrato= $('#informalizacioncontratof').val();
            var fecha_formalizacion_contrato= new Date(formalizacion_contrato);
            var $this = $(this);
          var insertedVal = $this.val();
          var infonavit = new Date(insertedVal);
       if (infonavit>fecha_formalizacion_contrato||infonavit<fecha_notificacion_adjudicada.setDate(fecha_notificacion_adjudicada.getDate()-30)){
    
             $this.css({"color":"red","border":"1px solid red"});
          }else{
             $this.css({"color":"green","border":"1px solid green"});
    
            }
       })
    });
    
    
    $(document).ready(function(){
    
    $('#ingarantiacumplimientof').change(function(){
             var notificacion_adjudicada= $('#innotificacionadjudicadaf').val();
    var fecha_notificacion_adjudicada= new Date(notificacion_adjudicada);
    
          var $this = $(this);
          var insertedVal = $this.val();
          var garantia_cumplimiento = new Date(insertedVal);
    
          if (garantia_cumplimiento < fecha_notificacion_adjudicada||garantia_cumplimiento>fecha_notificacion_adjudicada.setDate(fecha_notificacion_adjudicada.getDate()+10)){
    
    
             $this.css({"color":"red","border":"1px solid red"});
          }else{
             $this.css({"color":"green","border":"1px solid green"});
    
            }
       })
    });
    
    
  
    $(document).ready(function(){
    
    $('#inrequesicioncontratof').change(function(){
             var notificacion_adjudicada= $('#innotificacionadjudicadaf').val();
    var fecha_notificacion_adjudicada= new Date(notificacion_adjudicada);
    
          var $this = $(this);
          var insertedVal = $this.val();
          var requisicion = new Date(insertedVal);
    
          if (requisicion>=fecha_notificacion_adjudicada){
    
    
             $this.css({"color":"red","border":"1px solid red"});
          }else{
             $this.css({"color":"green","border":"1px solid green"});
    
            }
       })
    });
    
    
    
    $(document).ready(function(){
    
    $('#insuficienciaf').change(function(){
             var notificacion_adjudicada= $('#innotificacionadjudicadaf').val();
    var fecha_notificacion_adjudicada= new Date(notificacion_adjudicada);
    
          var $this = $(this);
          var insertedVal = $this.val();
          var suficiencia = new Date(insertedVal);
    
          if (suficiencia>=fecha_notificacion_adjudicada){
    
    
             $this.css({"color":"red","border":"1px solid red"});
          }else{
             $this.css({"color":"green","border":"1px solid green"});
    
            }
       })
    });
    
    
    
   
    $(document).ready(function(){
    $('#ininiciovigenciaf').change(function(){
             var notificacion_adjudicada= $('#innotificacionadjudicadaf').val();
    var fecha_notificacion_adjudicada= new Date(notificacion_adjudicada);
    
          var $this = $(this);
          var insertedVal = $this.val();
          var inicio_vigencia = new Date(insertedVal);
    
          if (inicio_vigencia<fecha_notificacion_adjudicada){
    
    
             $this.css({"color":"red","border":"1px solid red"});
          }else{
             $this.css({"color":"green","border":"1px solid green"});
    
            }
       })
    });


    $(document).ready(function(){
        $('#calendarYear').change(function(){
                 var inicio_vigencia= $('#ininiciovigenciaf').val();
        var fecha_inicio_vigencia= new Date(inicio_vigencia);


        var fin_vigencia= $('#infinvigenciaf').val();
        var fecha_fin_vigencia= new Date(fin_vigencia);

        
        
              var $this = $(this);
              var insertedVal = $this.val();
              var fecham = new Date(insertedVal);
        
              if (fecham<fecha_inicio_vigencia||fecham>fecha_fin_vigencia){
        
        
                 $this.css({"color":"red","border":"1px solid red"});
              }else{
                 $this.css({"color":"green","border":"1px solid green"});
        
                }
           })
        });


      function entrega() {
        var fecha_maxima = (document.getElementById("calendarYear").value);
        var cantidadm = (document.getElementById("cantidadm").value);
        var descripcion= (document.getElementById("infechadescripcion").value);
    
        if (cantidadm.length == 0 || cantidadm <0) {
            alert("El campo es incorrecto");
            document.getElementById("cantidadm").focus();
            return;
        }
        if (!(/^[0-9\s]*$/i.test(cantidadm))) {
            alert("El contiene caracteres no permitidos");
            document.getElementById("cantidadm").focus();
            return;
    
        }
    
        
        $.post('../besa/entrega_m.php', {
            "fecha_maxima": fecha_maxima,
            "cantidadm": cantidadm,
            "contrato": descripcion,

        }, function(data) {
            alert("listo");
        });
    }