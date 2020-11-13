
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
    window.location="../besa/cerrar.php";
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

    if (partida.length == 0 || partida.lenth > 200) {
        alert("El campo no cumple con la longitud correcta");
        document.getElementById("partida").focus();
        return;
    }
    if (!(/^[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*$/i.test(partida))) {
        alert("El contiene caracteres no permitidos");
        document.getElementById("partida").focus();
        return;

    }


    $.post('../besa/presupuesto.php', {
        "presupuesto": presupuesto,
        "clave": clave,
        "partida": partida
    }, function(data) {
        alert("listo");
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




    window.location = "../besa/consulta_70_30.php?id_unidad_compradora=" + id_unidad_compradora;

}


function ingresar4() {
    var selObj = document.getElementById('partidas');
    var partida_presupuestal = selObj.options[selObj.selectedIndex].value;

    if (partida_presupuestal == 0){
        alert("El campo Partida presupuestal");
        document.getElementById('partidas').focus();
        return;
    }


    window.location = "../besa/consulta_contrato7.php?partida_presupuestal=" + partida_presupuestal;
    
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
