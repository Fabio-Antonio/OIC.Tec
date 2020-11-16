function mostrarText() {
    var selObj = document.getElementById('secontrae');
    var fecha_entrega = (document.getElementById('infechaentregamo').value);
    var nombre_entregable = (document.getElementById('innombreentregables').value);
    var cantidad_entregable = (document.getElementById('incantidade').value);
    var direccion_entregable = (document.getElementById('indireccione').value);
    var descripcion = (document.getElementById('descripcion').value);


    var selIndex = selObj.options[selObj.selectedIndex].value;
    
    if (cantidad_entregable.length == 0 || cantidad_entregable < 0) {
        $(function() {
            $('#my-modal2').modal('show')
            document.getElementById("incantidade").focus();

        });
        return;
    }

    if (nombre_entregable.length == 0 || nombre_entregable.length >= 26||!(/^[A-Za-zñÑáéíóúÁÉÍÓÚ.\s]*$/i.test(nombre_entregable))) {
        $(function() {
            $('#my-modal2').modal('show')
        });

        document.getElementById("innombreentregables").focus();
        return;
    }
    

    if (direccion_entregable.length == 0) {
        $(function() {
            $('#my-modal2').modal('show')
        });

        document.getElementById("indireccione").focus();
        return;
    }
    if (!(/^[a-zA-ZñÑáéíóúÁÉÍÓÚ.\s]+$/i.test(direccion_entregable))) {
        $(function() {
            $('#my-modal2').modal('show')
        });

        document.getElementById("indireccione").focus();
        return;
    }

    if (descripcion.length == 0) {
        $(function() {
            $('#my-modal2').modal('show')
        });

        document.getElementById("descripcionn").focus();
        return;
    }
    if (!(/^[a-zA-ZñÑáéíóúÁÉÍÓÚ.\s]+$/i.test(descripcion))) {
        $(function() {
            $('#my-modal2').modal('show')
        });

        document.getElementById("descripcionn").focus();
        return;
    } 

    $.post('../besa/entregable.php', {
            
        "numero_contrato": selIndex,
        "fecha_entrega": fecha_entrega,
        "nombre_entregable": nombre_entregable,
        "cantidad_entregable": cantidad_entregable,
        "direccion_entregable": direccion_entregable,
        "descripcion": descripcion
    },function(data) {
        var response = jQuery.parseJSON(data);
        alert(response.success);
        if(response.success==true){
            $(function() {
            $('#my-modal').modal('show')
        });   
        }else{
            $(function() {
            $('#my-modal2').modal('show')
        });
        }

  });
    
}