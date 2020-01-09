$(document).ready(function () {


    //datos del formulario.
    var emisor = document.getElementById("emisor");
    var mensaje = document.getElementById("mensaje");
    var telefono = document.getElementById("telefono");


    $("#enviar").click(function () {

        $.ajax({
            method: "POST",
            url: "sms.php",
            data: {emisor: emisor.value, telefono: telefono.value , mensaje: mensaje.value }
        })
                .done(function (msg) {
                    alert("Mensaje: " + msg);
                });


    });


});
