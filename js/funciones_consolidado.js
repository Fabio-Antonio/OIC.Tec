function mostrarText() {
    
    var selObj = document.getElementById('consolidador');
    var selObj2 = document.getElementById('proveedor');
    var licitacion = (document.getElementById('licitacion').value);
    var monto = (document.getElementById('monto').value);
    
    //var selObj8 = document.getElementById('seconsolidadocontrato');

    if (selObj.length == 0) {
        $(function() {
            $('#my-modal2').modal('show')
        });

        document.getElementById("seunidadcompradoracontrato").focus();
        return;
    }
    if (selObj2.length == 0) {
        $(function() {
            $('#my-modal2').modal('show')
        });

        document.getElementById("secontrarecepcion").focus();
        return;
    }
    ;

    var monto_maximo = Number(monto.replace(/[$,]/g, ""));
    var selIndex = selObj.options[selObj.selectedIndex].value;
    var selIndex2 = selObj2.options[selObj2.selectedIndex].value;
     
    //var selIndex8 = selObj8.options[selObj8.selectedIndex].value;
    
    if (licitacion.length == 0 || !(/^[A-Za-z0-9\-\s]*$/.test(licitacion))) {
        $(function() {
            $('#my-modal2').modal('show')
        });

        document.getElementById("licitacion").focus();
        return;
    }

   
    if (monto_maximo.length == 0 || !(/^[0-9,.]+$/.test(monto_maximo)) || monto_maximo <=0) {
        $(function() {
            $('#my-modal2').modal('show')
        });

        document.getElementById("monto").focus();
        return;
    }

    

    $.post('consolidadors.php', {
        "consolidador": selIndex,
        "proveedor": selIndex2,
        "licitacion": licitacion,
        "monto": monto_maximo,
        
    }, function(data) {
        $('#my-modal').modal('show')
    });

}

$("#monto").on({
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