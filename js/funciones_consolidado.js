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

        document.getElementById("consolidador").focus();
        return;
    }
    if (selObj2.length == 0) {
        $(function() {
            $('#my-modal2').modal('show')
        });

        document.getElementById("proveedor").focus();
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

    

    $.post('consolidador.php', {
        "consolidador": selIndex,
        "proveedor": selIndex2,
        "licitacion": licitacion,
        "monto": monto_maximo,
        
    }, function(data) {
        $('#my-modal').modal('show')
    });

    $('#consolidador').attr("disabled", true);
     
}


function ingresar() {
    
    var selObj = document.getElementById('consolidado');
    var selObj2 = document.getElementById('consolidador');
    var selObj3 = document.getElementById('proveedor');
    var cantidad_max = (document.getElementById('max').value);
    var cantidad_min = (document.getElementById('min').value);
    var monto = (document.getElementById('mont').value);
    var monto_final = Number(monto.replace(/[$,]/g, ""));
    //var selObj8 = document.getElementById('seconsolidadocontrato');

    if (selObj.length == 0) {
        $(function() {
            $('#my-modal2').modal('show')
        });

        document.getElementById("consolidado").focus();
        return;
    }

    if (selObj2.length == 0) {
        $(function() {
            $('#my-modal2').modal('show')
        });

        document.getElementById("consolidador").focus();
        return;
    }
    if (selObj3.length == 0) {
        $(function() {
            $('#my-modal2').modal('show')
        });

        document.getElementById("proveedor").focus();
        return;
    }
    

    var selIndex = selObj.options[selObj.selectedIndex].value;
    var selIndex2 = selObj2.options[selObj2.selectedIndex].value;     
    var selIndex3 = selObj3.options[selObj3.selectedIndex].value;
   
    if (monto_final.length == 0 || !(/^[0-9,.]+$/.test(monto_final)) || monto <=0) {
        $(function() {
            $('#my-modal2').modal('show')
        });

        document.getElementById("mont").focus();
        return;
    }
    
    if (cantidad_max.length == 0 || !(/^[0-9]+$/.test(cantidad_max)) || cantidad_max <=0) {
        $(function() {
            $('#my-modal2').modal('show')
        });

        document.getElementById("max").focus();
        return;
    }

    if (cantidad_min.length == 0 || !(/^[0-9]+$/.test(cantidad_min)) || cantidad_min <=0) {
        $(function() {
            $('#my-modal2').modal('show')
        });

        document.getElementById("min").focus();
        return;
    }
    

    
    $.post('agregados.php', {
        "consolidador": selIndex2,
        "requirente": selIndex,
        "minimo": cantidad_min,
        "maximo": cantidad_max,
        "proveedor": selIndex3,
        "monto":monto_final
        
    }, function(data) {
        $('#my-modal').modal('show')
    });
    $("#myTable").dataTable().fnDestroy();
     $.tabla(selIndex2,selIndex3);    
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


$("#mont").on({
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

$.tabla=function(consolidador,proveedor) {
    
    var table = $('#myTable').dataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ Inserciones por página",
            "zeroRecords": "No se encontraron resultados - lo siento",
            "search": "Buscar:",
            "info": "Mostrar páginas _PAGE_ of _PAGES_",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "loadingRecords": "Cargando...",

            "paginate": {
                "first": "Primero",
                "previous": "Previa",
                "next": "Siguiente",
                "last": "Última"
            },
        },
        "bProcessing": true,
        "sAjaxSource": "consulta_agregados.php?consolidador="+consolidador+"&proveedor="+proveedor,
        "bPaginate": true,
        "sPaginationType": "full_numbers",
        "iDisplayLength": 5,
        "aoColumns": [{
                mData: 'unidad'
            },
            {
                mData: 'licitacion'
            },
            {
                mData: 'maximo'
            },
            {
                mData: 'minimo'
            },
            {
                mData: 'monto',render: $.fn.dataTable.render.number(',', '.', 2, '$')
            },


        ]
    });
}



