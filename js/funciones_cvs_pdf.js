function autocompletar(arreglo) {

    $("#contrato").autocomplete({
        source: arreglo
    });
}

document.addEventListener("DOMContentLoaded", () => {
    let form = document.getElementById("pdf");
    form.addEventListener("submit", function (event) {
        event.preventDefault();
        ingresar(form);
    })
})

function ingresar(form) {
    var contrato = (document.getElementById("contrato").value);

    if (!(/^[a-zA-Z0-9.\-\s]*$/i.test(contrato))) {

        document.getElementById("contrato").focus();
        $('#my-modal2').modal('show')
        return;

    }
    var formData = new FormData(form);
    $.ajax({
        type: 'POST',
        url: "../besa/subirpdf.php",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            var response = jQuery.parseJSON(data);
            if (response.success == true) {
                $(function () {
                    $('#my-modal').modal('show')
                });
            } else {
                $(function () {
                    $('#my-modal3').modal('show')
                });
            }
        },
        error: function (data) {
            console.log("error");
            console.log(data);
        }
    });


}