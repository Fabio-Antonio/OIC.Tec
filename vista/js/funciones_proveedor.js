function ingresar(){
var nombre= (document.getElementById("noo").value);
var rfc= (document.getElementById("rfc").value);

if(rfc.length==0||rfc.lenth>13){

document.getElementById("rfc").focus();
 $(function(){
                $('#my-modal2').modal('show')
                });

return;
}
if(!(/^[0-9A-Za-z]*$/i.test(rfc))){
document.getElementById("rfc").focus();
 $(function(){
                $('#my-modal2').modal('show')
                });

return;

}

if(nombre.length==0||nombre.lenth>45){
document.getElementById("noo").focus();
 $(function(){
                $('#my-modal2').modal('show')
                });

return;
}
if(!(/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ.\s]*$/i.test(nombre))){

document.getElementById("noo").focus();
 $(function(){
                $('#my-modal2').modal('show')
                });

return;

}
$.post('../controlador/insercionesController.php',{
"noo":nombre,
"rfc":rfc
},function(data){

$('#my-modal').modal('show')

});
}