function ingresar(){
    var claver= (document.getElementById("claver").value);
    var uni= (document.getElementById("uni").value);
    
    if(claver.length==0||claver.lenth>3){
    
    document.getElementById("claver").focus();
     $(function(){
                    $('#my-modal2').modal('show')
                    });
    
    return;
    }
    if(!(/^[A-Za-z0-9\s]*$/i.test(claver))){
    document.getElementById("claver").focus();
     $(function(){
                    $('#my-modal2').modal('show')
                    });
    
    return;
    
    }
    
    if(uni.length==0||uni.lenth>45){
    document.getElementById("uni").focus();
     $(function(){
                    $('#my-modal2').modal('show')
                    });
    
    return;
    }
    if(!(/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ.\s]*$/i.test(uni))){
    
    document.getElementById("uni").focus();
     $(function(){
                    $('#my-modal2').modal('show')
                    });
    
    return;
    
    }
    $.post('requirente.php',{
    "claver":claver,
    "uni":uni
    },function(data){
    
        var response = jQuery.parseJSON(data);
        if(response.success==true){
            $(function() {
            $('#my-modal').modal('show')
        });  
        $('#btg').attr("disabled", true)   
        }else{
            $(function() {
            $('#my-modal3').modal('show')
        });
        }
    
    });
    }

    function ingresar2(){
        var nuc= (document.getElementById("nuc").value);
        var un= (document.getElementById("un").value);
        
        if(nuc.length==0||nuc.lenth>20){
        
        document.getElementById("nuc").focus();
         $(function(){
                        $('#my-modal2').modal('show')
                        });
        
        return;
        }
        if(!(/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ\s]*$/i.test(nuc))){
        document.getElementById("nuc").focus();
         $(function(){
                        $('#my-modal2').modal('show')
                        });
        
        return;
        
        }
        if(un.length==0||un.lenth>45){
        document.getElementById("un").focus();
         $(function(){
                        $('#my-modal2').modal('show')
                        });
        
        return;
        }
        if(!(/^[a-zA-Z0-9.\s]*$/i.test(un))){
        
        document.getElementById("un").focus();
         $(function(){
                        $('#my-modal2').modal('show')
                        });
        
        return;
        
        }
        $.post('compradora.php',{
        "nuc":nuc,
        "un":un
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