function autocompletar(arreglo) {
    
    $( "#contrato" ).autocomplete({
        source: arreglo,
        appendTo: ".contenedor-gris-recepcion"
    });
} 



$(document).ready(function(){
    $('#contrato').text("");
    recargarLista();

    $('#contrato').change(function(){
        recargarLista();
    });
})


function recargarLista(){
    $.ajax({
        type:"POST",
        url:"../besa/lista_entregas.php",
        data:"contrato=" + $('#contrato').val(),
        success:function(r){
            $('#select-entregables-recepcion').html(r);
        }
    });
}

document.addEventListener("DOMContentLoaded",() =>{
    let form = document.getElementById("recepcion");
    form.addEventListener("submit",function(event){
        event.preventDefault();
        ingresar(form);
    })
})

function ingresar(form) {
    var selObj = document.getElementById('select-entregables-recepcion');
    if (selObj.length==0) {

        document.getElementById("select-entregables-recepcion").focus();
        $('#my-modal2').modal('show')
        return;

    }
    var selIndex = selObj.options[selObj.selectedIndex].value;
    
    var formData = new FormData(form);
    $.ajax({
        type:'POST',
        url: "../besa/subirpdf_recepcion.php",
        data:formData,'entregas':selIndex,
        cache:false,
        contentType: false,
        processData: false,
        success:function(data){
            var response = jQuery.parseJSON(data);
            if(response.success==true){
                $(function() {
                $('#my-modal').modal('show')
            });   
            }else{
                $(function() {
                $('#my-modal3').modal('show')
            });
            }},
        error: function(data){
        console.log("error");
        console.log(data);
        }
        });

   
}


