<?php
    //Reanudamos la sesión
    session_start();

    //Requerimos los datos de la conexión a la BBDD
    //$conexion = require('../../conexion.php');
    $hostname_localhost ="localhost";
	$database_localhost ="ejemplo";
	$username_localhost ="root";
	$password_localhost ="";

	$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

    //Des-establecemos todas las sesiones
    unset($_SESSION);

    //Destruimos las sesiones
    session_destroy();

    //Cerramos la conexión con la base de datos
    mysqli_close($conexion);

    //Redireccionamos a el index
    header("Location: ../");
    die();
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cerrando sesión...</title>
    </head>
    <body>
    </body>
</html>