function mostrarText() {
    var selObj = document.getElementById('secontrae');
    var selObj2 = document.getElementById('entregas-programadas');
    var fecha_entrega = (document.getElementById('infechaentregamo').value);
    var nombre_entregable = (document.getElementById('innombreentregables').value);
    var cantidad_entregable = (document.getElementById('incantidade').value);
    var direccion_entregable = (document.getElementById('indireccione').value);
    var descripcion = (document.getElementById('descripcion').value);
    var porcentaje = (document.getElementById('porcentaje').value);
    var unitario = (document.getElementById('unitario').value);
  
   

    var selIndex = selObj.options[selObj.selectedIndex].value;
    var selIndex2 = selObj2.options[selObj2.selectedIndex].value;

    if(selIndex2.length=0){
        $(function() {
            $('#my-modal2').modal('show')
            document.getElementById("entregas-programadas").focus();

        });
        return;
    }
    
    if (cantidad_entregable.length == 0 || cantidad_entregable < 0) {
        $(function() {
            $('#my-modal2').modal('show')
            document.getElementById("incantidade").focus();

        });
        return;
    }

    if (nombre_entregable.length == 0 || nombre_entregable.length >= 28||!(/^[0-9A-Za-zñÑáéíóúÁÉÍÓÚ.\s]*$/i.test(nombre_entregable))) {
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
    if (!(/^[#0-9a-zA-ZñÑáéíóúÁÉÍÓÚ.\-\s]+$/i.test(direccion_entregable))) {
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

    if(porcentaje.length=0||!(/^[%0-9.\s]+$/i.test(porcentaje))){

        document.getElementById("porcentaje").focus();

        $(function() {
            $('#my-modal2').modal('show')
        });
        return;


    }


    if(unitario.length=0||!(/^[$0-9,.\s]+$/i.test(unitario))){

        document.getElementById("unitario").focus();

        $(function() {
            $('#my-modal2').modal('show')
        });
        return;


    }



    $.post('../controlador/insercionesController.php', {
            
        "numero_contrato": selIndex,
        "fecha_entrega": fecha_entrega,
        "nombre_entregable": nombre_entregable,
        "cantidad_entregable": cantidad_entregable,
        "direccion_entregable": direccion_entregable,
        "unitario":unitario,
        "porcentaje":porcentaje,
        "descripcion": descripcion,
        "id_intrega_m": selIndex2
    },function(data) {
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

$("#unitario").on({
    "focus": function(event) {
        $(event.target).select();
        
    },
    "keyup": function(event) {
        $(event.target).val(function(index, value) {
            return '$'+value.replace(/\D/g, "")
                .replace(/([0-9])([0-9]{2})$/, '$1.$2')
                .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
        });
    }
});

$("#porcentaje").on({
    "focus": function(event) {
        $(event.target).select();
    },
    "keyup": function(event) {
        $(event.target).val(function(index, value) {
            return '%'+value.replace(/\D/g, "")
                .replace(/([0-9])([0-9]{2})$/, '$1.$2')
                .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
        });
    }
});

function autocompletar(arreglo) {
    
    $( "#contrato" ).autocomplete({
        source: arreglo,
        appendTo: "#formulario7"
    });
} 

$(document).ready(function(){
    $('#secontrae').val(1);
    recargarLista();

    $('#secontrae').change(function(){
        recargarLista();
    });
})

function recargarLista(){
    $.ajax({
        type:"POST",
        url:"../controlador/listacontroller.php",
        data:"numero_contrato=" + $('#secontrae').val(),
        success:function(r){
            $('#entregas-programadas').html(r);
        }
    });
}

