<?php
    $hostname_localhost ="localhost";
	$database_localhost ="ejemplo";
	$username_localhost ="root";
	$password_localhost ="";
	$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
    $variable_en_php = $_GET["variable"];
    $consulta = "INSERT INTO ordenes(cantidad) VALUES($variable_en_php)";
    $query = mysqli_query($conexion, $consulta);
    
?>