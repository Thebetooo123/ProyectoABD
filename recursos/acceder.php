<?php
    //Conectamos a la base de datos
    //$conexion = require('../conexion.php');

    $hostname_localhost ="localhost";
	$database_localhost ="database";
	$username_localhost ="root";
	$password_localhost ="";

	$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

    //$conexion = mysqli_connect("localhost", "root", "", "ejemplo");
    //Obtenemos los datos del formulario de acceso
    $userPOST = $_POST["userAcceso"]; 
    $passPOST = $_POST["passAcceso"];

    /*//Filtro anti-XSS
    $userPOST = htmlspecialchars(mysqli_real_escape_string($conexion, $userPOST)) or die(mysqli_error($conexion));;
    $passPOST = htmlspecialchars(mysqli_real_escape_string($conexion, $passPOST)) or die(mysqli_error($conexion));;*/

    //Definimos la cantidad máxima de caracteres
    //Esta comprobación se tiene en cuenta por si se llegase a modificar el "maxlength" del formulario
    //Los valores deben coincidir con el tamaño máximo de la fila de la base de datos
    $maxCaracteresUsername = "20";
    $maxCaracteresPassword = "60";

    //Si los input son de mayor tamaño, se "muere" el resto del código y muestra la respuesta correspondiente
    if(strlen($userPOST) > $maxCaracteresUsername) {
        die('El nombre de usuario no puede superar los '.$maxCaracteresUsername.' caracteres');
    };

    if(strlen($passPOST) > $maxCaracteresPassword) {
        die('La contraseña no puede superar los '.$maxCaracteresPassword.' caracteres');
    };

    //Pasamos el input del usuario a minúsculas para compararlo después con
    //el campo "usernamelowercase" de la base de datos
    $userPOSTMinusculas = strtolower($userPOST);

    //Escribimos la consulta necesaria
   // $consulta = "SELECT * FROM 'ejemplo001' WHERE usernamelowercase='".$userPOSTMinusculas."'";
    $consulta = "SELECT * FROM usuario WHERE username='$userPOSTMinusculas'";

    //Obtenemos los resultados
    $resultado = mysqli_query($conexion,$consulta);
    $datos = mysqli_fetch_array($resultado);

    //Guardamos los resultados del nombre de usuario en minúsculas
    //y de la contraseña de la base de datos
    $userBD = $datos['username'];
    $passwordBD = $datos['password'];

    // echo $userBD." ";
    // echo $passwordBD." ";

    //  echo " ";
    
    //  echo $userPOST." ";
    // echo $passPOST." ";





    //Comprobamos si los datos son correctos
    //if($userBD == $userPOST and password_verify($passPOST, $passwordBD)){

	 if($userBD == $userPOST and $passPOST == $passwordBD){
        session_start();
        $_SESSION['usuario'] = $datos['username'];
        $_SESSION['estado'] = 'Autenticado';
        /* Sesión iniciada, si se desea, se puede redireccionar desde el servidor */
        

    //Si los datos no son correctos, o están vacíos, muestra un error
    //Además, hay un script que vacía los campos con la clase "acceso" (formulario)
    }else if( $userBD != $userPOST || $userPOST == "" || $passPOST == "" || !password_verify($passPOST, $passwordBD) ) {
        die ('<script>
        		$(".acceso").val("");
        	</script> 
        	Los datos de acceso son incorrectos');
    } else {
        die('Error');
    };
?>