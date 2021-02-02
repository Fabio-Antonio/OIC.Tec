

$("#montomaxi").on({
    "focus": function(event) {
        $(event.target).select();
    },
    "keyup": function(event) {
        $(event.target).val(function(index, value) {
            return "$"+value.replace(/\D/g, "")
                .replace(/([0-9])([0-9]{2})$/, '$1.$2')
                .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
        });
    }
});

$("#montomini").on({
    "focus": function(event) {
        $(event.target).select();
    },
    "keyup": function(event) {
        $(event.target).val(function(index, value) {
            return "$"+value.replace(/\D/g, "")
                .replace(/([0-9])([0-9]{2})$/, '$1.$2')
                .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
        });
    }
});



$('#incontratoabiertoc').on('change', function() {
    if ($(this).is(':checked') ) {
       $( "#montomini" ).prop( "disabled", false );
       document.querySelector('#ccp').innerText = 'Monto maximo';
    } else {
       $( "#montomini" ).prop( "disabled", true );
       document.querySelector('#ccp').innerText = 'Monto total';
   }
});

$('#checkconsolidado').on('change', function() {
    if ($(this).is(':checked') ) {
       $( "#seconsolidadocontrato" ).prop( "disabled", false );
    } else {
       $( "#seconsolidadocontrato" ).prop( "disabled", true );
   }
});

function cambio(){
    var numero_contrato = (document.getElementById('innumerocontratoc').value);
    window.location = "../vista/fechas.php?numero_contrato="+numero_contrato;
}


$(document).ready(function(){
    $('#secontrarecepcion').val(1);
    recargarLista();

    $('#secontrarecepcion').change(function(){
        recargarLista();
    });
})

function recargarLista(){
    $.ajax({
        type:"POST",
        url:"../controlador/listacontroller.php",
        data:"procedimiento=" + $('#secontrarecepcion').val(),
        success:function(r){
            $('#searticulonormativocontrato').html(r);
        }
    });
}
