<?php
    //Iniciamos la sesión
    session_start();

    //Pedimos el archivo que controla la duración de las sesiones
    require('recursos/sesiones.php');
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Acceso</title>
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
        <!-- Bootstrap Core CSS -->
        <link href="lacafeta/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="lacafeta/css/style.css">
    </head>
    <body style="background-image: url('lacafeta/public/img/fondo.jpg'); background-position: center; background-size: 100em">
        <head-default>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <p class="navbar-brand">La Cafeta</p>
                </div>
            </nav>
        </head-default>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <center>
        <div id="mensaje" style="border:1px solid #CCC; padding:10px;"></div>

        <h2 style = "color: white">Accede a tu cuenta</h2>

        <div class="formulario-acceso">
        <form method="POST" id="acceso" action="" accept-charset="utf-8">
            <input type="text" name="userAcceso" class="acceso" id="userAcceso" placeholder="Usuario" autocomplete="off" maxlength="20">
            <input type="password" name="passAcceso" class="acceso" id="passAcceso" placeholder="Contraseña" autocomplete="off" maxlength="60">
            <input type="submit" name="acceso" class="boton-principal" value="Acceder">
        </form>
        </div>
        <br><br><br><br>
        <footer class="footer-distributed">
            <div class="footer-left">
                <p class="footer-links">
                    <a href="#">Sebastian Barron</a>
                    ·
                    <a href="#">Jair Franco</a>
                    ·
                    <a href="#">Alberto Lopez</a>
                    .
                    <a href="#">Javier Prieto</a>
                    .
                    <a href="#">Luis Trejo</a>
                </p>
                <p>Eat and Enjoy</p>
            </div>
        </footer>
        <hr>
        <script>
        //Guardamos el controlador del div con ID mensaje en una variable
        var mensaje = $("#mensaje");
        //Ocultamos el contenedor
        mensaje.hide();

        //Cuando el formulario con ID acceso se envíe...
        $("#acceso").on("submit", function(e){
            //Evitamos que se envíe por defecto
            e.preventDefault();
            //Creamos un FormData con los datos del mismo formulario
            var formData = new FormData(document.getElementById("acceso"));

            //Llamamos a la función AJAX de jQuery
            $.ajax({
                //Definimos la URL del archivo al cual vamos a enviar los datos
                url: "recursos/acceder.php",
                //Definimos el tipo de método de envío
                type: "POST",
                //Definimos el tipo de datos que vamos a enviar y recibir
                dataType: "HTML",
                //Definimos la información que vamos a enviar
                data: formData,
                //Deshabilitamos el caché
                cache: false,
                //No especificamos el contentType
                contentType: false,
                //No permitimos que los datos pasen como un objeto
                processData: false
            }).done(function(echo){
                //Una vez que recibimos respuesta
                //comprobamos si la respuesta no es vacía
                if (echo !== "") {
                    //Si hay respuesta (error), mostramos el mensaje
                    mensaje.html(echo);
                    mensaje.slideDown(500);
                } else {
                    //Si no hay respuesta, redirecionamos a donde sea necesario
                    //Si está vacío, recarga la página
                    window.location.replace("");
                }
            });
        });
        </script>
    </body>
</html>