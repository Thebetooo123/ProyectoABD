<?php
    $usuario = "usuario";
	$password = "usueschido123";
	$servidor = "localhost";
    $basededatos = "database";
    $conexion = mysqli_connect($servidor, $usuario, $password, $basededatos);
    $variable_en_php = $_GET["variable"];
    $consulta = "INSERT INTO ordenes(cantidad) VALUES($variable_en_php)";
    $query = mysqli_query($conexion, $consulta);
    
?>