<?php
    //Reanudamos la sesión
    session_start();

    //Comprobamos si el usario está logueado
    //Si no lo está, se le redirecciona al index
    //Si lo está, definimos el botón de cerrar sesión y la duración de la sesión
    if(!isset($_SESSION['usuario']) and $_SESSION['estado'] != 'Autenticado') {
        header('Location: index.php');
    } else {
        $estado = $_SESSION['usuario'];
        $salir = '<a href="php/salir.php" target="_self">Cerrar sesión</a>';
        require('recursos/sesiones.php');
    };
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bienvenido</title>
        <!-- Bootstrap Core CSS -->
        <link href="lacafeta/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="lacafeta/css/style.css">
    </head>
    <body style="background-color: blueviolet; background-position: center; background-size: 100em">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <p class="navbar-brand">La Cafeta</p>
            </div>
        </nav>
        <br><br><br><br><br>
        <button onclick="location.href='lacafeta/index.html'"> Tomar orden </button>
        <br>    
        <table border="2">
            <tr>
                <th colspan="4" style="color: white"> <center> <h3> Reporte de Ventas </h3> </center> </th>
            </tr>
            <tr>
                <th style="color: white"> Fecha </th>
                <th style="color: white"> Ganancia </th>
                <th style="color: white"> Perdida </th>
                <th style="color: white"> Total </th>
            </tr>
        </table>
        <br><br>
        <table border="2">
            <tr>
                <th colspan="6" style="color: white"> <center> <h3> Lista de empleados </h3> </center> </th>
            </tr>
            <tr>
                <th style="color: white"> Numero de empleado </th>
                <th style="color: white"> Nombre </th>
                <th style="color: white"> Apellido Paterno </th>
                <th style="color: white"> Apellido Materno </th>
                <th style="color: white"> Puesto </th>
                <th style="color: white"> Telefono </th> 
            </tr>
        </table>
        <br><br>
        <table border="2">
            <tr>
                <th colspan="4" style="color: white"> <center> <h3> Ordenes del día </h3> </center> </th>
            </tr>
            <tr>
                <th style="color: white"> Numero de orden </th>
                <th style="color: white"> Cantidad </th>
                <th style="color: white"> Fecha </th>
                <th style="color: white"> Platillo </th>
            </tr>
        </table>
        <br><br>
        <table border="2">
            <tr>
                <th colspan="2" style="color: white"> <center> <h3> Platillos </h3> </center> </th>
            </tr>
            <tr>
                <th style="color: white"> Costo </th>
                <th style="color: white"> Nombre del platillo </th>
            </tr>
        </table>        
        <br>
        <input type="button" value="Actualizar" onclick="location.reload()"/>
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
        <!--
            <div><p>Hola, <?php echo $estado; ?><br>
            <?php echo $salir; ?></p><div> -->
    </body>
</html>