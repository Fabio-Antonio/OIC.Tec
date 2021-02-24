
(function() {
   
    if(localStorage.getItem("modal")=="false"){
   
    
       }else{
        $(function() {
            $('#my-modal').modal('show')
        });
        localStorage.setItem("modal","false");  
       }
}());

function cerrar(){
    localStorage.clear();
    window.location="../controlador/logueo.php";
}



function ingresar() {
    var clave = (document.getElementById("clave").value);
    var presupuesto = (document.getElementById("presupuesto").value);
     var partida = (document.getElementById("partida").value);

    if (clave.length == 0 || clave.lenth > 4) {
        alert("El campo no cumple con la longitud correcta");
        document.getElementById("clave").focus();
        return;
    }
    if (!(/^[0-9\s]*$/i.test(clave))) {
        alert("El contiene caracteres no permitidos");
        document.getElementById("clave").focus();
        return;

    }

    if (presupuesto.length == 0 || presupuesto.lenth > 12) {
        alert("El campo no cumple con la longitud correcta");
        document.getElementById("presupuesto").focus();
        return;
    }
    if (!(/^[$0-9,.\s]*$/i.test(presupuesto))) {
        alert("El contiene caracteres no permitidos");
        document.getElementById("presupuesto").focus();
        return;

    }

    if (partida.length == 0 || partida.lenth > 220) {
        alert("El campo no cumple con la longitud correcta");
        document.getElementById("partida").focus();
        return;
    }
    if (!(/^[A-Za-zñÑáéíóúÁÉÍÓÚ,.\s]*$/i.test(partida))) {
        alert("El contiene caracteres no permitidos");
        document.getElementById("partida").focus();
        return;

    }


    $.post('../controlador/insercionesController.php', {
        "presupuesto": presupuesto,
        "clave": clave,
        "partida": partida
    }, function(data) {
        var response = jQuery.parseJSON(data);
        if(response.success==true){ 
            alert("Datos ingresados correctamente");
        }else{
            alert("La partida ya existe");
        }
    });
}


function modificar() {
    var clave = (document.getElementById("clave2").value);
    var presupuesto = (document.getElementById("presupuesto2").value);

    if (clave.length == 0 || clave.lenth > 4) {
        alert("El campo no cumple con la longitud correcta");
        document.getElementById("clave2").focus();
        return;
    }
    if (!(/^[0-9\s]*$/i.test(clave))) {
        alert("El contiene caracteres no permitidos");
        document.getElementById("clave2").focus();
        return;

    }

    if (presupuesto.length == 0 || presupuesto.lenth > 12) {
        alert("El campo no cumple con la longitud correcta");
        document.getElementById("presupuesto2").focus();
        return;
    }
    if (!(/^[$0-9,.\s]*$/i.test(presupuesto))) {
        alert("El contiene caracteres no permitidos");
        document.getElementById("presupuesto2").focus();
        return;

    }

    

    $.post('../controlador/insercionesController.php', {
        "presupuesto": presupuesto,
        "clave": clave,
    }, function(data) {
        var response = jQuery.parseJSON(data);
        if(response.success==true){ 
            alert("Datos ingresados correctamente");
        }else{
            alert("La partida no existe");
        }
    });
}





function ingresar2() {
    var mail = (document.getElementById("mail").value);
    var mensaje = (document.getElementById("mensaje").value);

    if (mail.length == 0 || mail.lenth > 45) {
        alert("El campo no cumple con la longitud correcta");
        document.getElementById("mail").focus();
        return;
    }
    if (!(/^[@a-zA-Z0-9.\s]*$/i.test(mensaje))) {
        alert("El contiene caracteres no permitidos");
        document.getElementById("mail").focus();
        return;

    }

    if (mensaje.length == 0 || mensaje.lenth > 45) {
        alert("El campo no cumple con la longitud correcta");
        document.getElementById("mensaje").focus();
        return;
    }
    if (!(/^[a-zA-Z0-9zñÑáéíóúÁÉÍÓÚ.\s]*$/i.test(mensaje))) {
        alert("El contiene caracteres no permitidos");
        document.getElementById("mensaje").focus();
        return;

    }
    $.post('../besa/contacto.php', {
        "mail": mail,
        "mensaje": mensaje
    }, function(data) {
        alert("listo");
    });
}



function ingresar3() {
    var selObj = document.getElementById('unidadcom');
    var id_unidad_compradora = selObj.options[selObj.selectedIndex].value;
    

    if (id_unidad_compradora.length == 0 ) {
        alert("El campo Unidad Compradora es invalido");
        document.getElementById('unidadcom').focus();
        return;
    }




    window.location = "../modelo/consulta_70_30.php?id_unidad_compradora=" + id_unidad_compradora;

}


function consolidado() {
    var selObj = document.getElementById('licitacion');
    var id_consolidado = selObj.options[selObj.selectedIndex].value;
    

    if (id_consolidado.length == 0 ) {
        alert("El campo Unidad Compradora es invalido");
        document.getElementById('licitacion').focus();
        return;
    }




    window.location = "../modelo/consulta_licitacion.php?id_consolidado="+id_consolidado;

}





function ingresar4() {
    var selObj = document.getElementById('partidas');
    var partida_presupuestal = selObj.options[selObj.selectedIndex].value;

    if (partida_presupuestal.length == 0){
        alert("El campo Partida presupuestal");
        document.getElementById('partidas').focus();
        return;
    }


    window.location = "../modelo/consulta_contrato7.php?partida_presupuestal=" + partida_presupuestal;
    
   /* $.ajax({

        url:"../besa/consulta_contrato7.php",
        type: "POST",
        data: {
            partida_presupuestal: partida_presupuestal ,
        },
        success: function(respuesta){
            //$('main').html(respuesta.url);
            window.location.replace(respuesta);
        }

}); */
}

function ingresar5() {
    var selObj = document.getElementById('partidas_presupuesto');
    var partida_presupuestal = selObj.options[selObj.selectedIndex].value;

    if (partida_presupuestal.length == 0){
        alert("El campo Partida presupuestal");
        document.getElementById('partidas').focus();
        return;
    }
  

    window.location = "../modelo/consulta_contrato_partidas.php?id_partida=" + partida_presupuestal;
    
   /* $.ajax({

        url:"../besa/consulta_contrato7.php",
        type: "POST",
        data: {
            partida_presupuestal: partida_presupuestal ,
        },
        success: function(respuesta){
            //$('main').html(respuesta.url);
            window.location.replace(respuesta);
        }

}); */
}



$("#presupuesto").on({
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

$("#presupuesto2").on({
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




function autocompletar(arreglo) {
    
    $( "#contrato" ).autocomplete({
        source: arreglo,
        appendTo: "#formulario7"
    });
} 


function autocompletar2(arreglo) {
    
    $( "#contrato2" ).autocomplete({
        source: arreglo,
        appendTo: "#formulario8"
    });
} 


function entregable(){
    var contrato = (document.getElementById("contrato").value);
 
 
    if (contrato.length == 0 || !(/^[A-Za-z0-9\-\s]*$/.test(contrato))){
    
    document.getElementById("contrato").focus();
    return;

}

window.location="../modelo/consulta_entregables.php?numero_contrato="+contrato;

}

function entrega() {
    var fecha_maxima = (document.getElementById("calendarYear").value);
    var cantidadm = (document.getElementById("cantidadm").value);
    var descripcion= (document.getElementById("contrato2").value);

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

    
    $.post('../controlador/insercionesController.php', {
        "fecha_maxima": fecha_maxima,
        "cantidadm": cantidadm,
        "contrato": descripcion,

    }, function(data) {
        var response = jQuery.parseJSON(data);
        if(response.success==true){ 
            alert("Datos ingresados correctamente");
        }else{
            alert("Es posible que este contrato ya tenga está fecha asignada");
        }
    });
}


/*
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


function suma() {
    var add = 0;
    var cantidad;
    $('.cl').each(function() {
        if (!$(this).val().length == 0) {

            cantidad = $(this).val().replace(/,/g, "");

            add += Number(cantidad);

        }
    });
    $('#presupuesto').val(format(add));
};



function format(n) {
    n = n.toString()
    while (true) {
        var n2 = n.replace(/(\d)(\d{3})($|,|\.)/g, '$1,$2$3')
        if (n == n2) break
        n = n2
    }
    return n
}
*/
