
<html>
    <head>
        <meta charset="UTF-8">
        <title>Enviar sms</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="javascript/enviarSMS.js" ></script>

    </head>
    <body>
        <form method="POST">

            <input type="text" placeholder="Emisor" id="emisor"/>

            </br>

            <textarea id="telefono">Teléfonos</textarea>

            </br>

            <textarea id="mensaje">Mensaje</textarea>

            </br>

            <input type="button" value="Enviar sms" id="enviar" />


        </form>
    </body>
</html>
