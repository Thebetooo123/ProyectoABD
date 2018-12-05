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
        <!--<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>-->
        <script src="lacafeta/js/jquery-3.2.1.min.js"></script>
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

        <h2 style = "color: white">Registrar nuevo usuario</h2>
        <div class="formulario-registro">
        <form method="POST" id="registro" action="" accept-charset="utf-8">
            <input type="text" name="userRegistro" class="registro" id="userRegistro" placeholder="Usuario" autocomplete="off" maxlength="20">
            <input type="password" name="passRegistro" class="registro" id="passRegistro" placeholder="Contraseña" autocomplete="off" maxlength="60">
            <input type="submit" name="registro" class="boton-principal" value="Registrarse">
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
            //Cuando el formulario con ID acceso se envíe...
            $("#registro").on("submit", function(e){
                //Evitamos que se envíe por defecto
                e.preventDefault();
                //Creamos un FormData con los datos del mismo formulario
                var formData = new FormData(document.getElementById("registro"));

                //Llamamos a la función AJAX de jQuery
                $.ajax({
                    //Definimos la URL del archivo al cual vamos a enviar los datos
                    url: "recursos/registro.php",
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
                    //Cuando recibamos respuesta, la mostramos
                    mensaje.html(echo);
                    mensaje.slideDown(500);
                });
            });
        </script>
    </body>
</html>