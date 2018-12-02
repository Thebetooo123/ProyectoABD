<?php
    //Reanudamos la sesión
    session_start();

    //Comprobamos si el usario está logueado
    //Si no lo está, se le redirecciona al index
    //Si lo está, definimos el botón de cerrar sesión y la duración de la sesión
    if(!isset($_SESSION['usuario']) and $_SESSION['estado'] != 'Autenticado') {
        header('Location: index.php');

    echo"<center>";
    echo "<table border='2'>";
    echo "<tr bgcolor='5599cc'>";
    echo "<th>idcliente</th>";
    echo "<th>Nombre</th>";
    echo "<th>Apellido paterno</th>";
    echo "<th>Apellido materno</th>";
    echo "<th>RFC</th>";
    echo "<th>Calle</th>";
    echo "<th>Numero</th>";
    echo "<th>Codigo postal</th>";
    echo "</tr>";
    
    // Bucle while que recorre cada registro y muestra cada campo en la tabla.
    while ($registro = mysqli_fetch_array( $resultado )) {
        echo "<tr>";
        echo "<td align='center'>" . $registro['idCliente'] ."</td>
              <td>" . $registro['nombre'] . "</td>";
              
        echo "<td>".$registro['apellido_paterno']."</td>";
        echo "<td>".$registro['apellido_materno']."</td>";
        echo "<td>".$registro['rfc']."</td>";
        echo "<td>".$registro['calle']."</td>";
        echo "<td>".$registro['num']."</td>";
        echo "<td>".$registro['cp']."</td>";
            echo "</tr>";
    }
            echo "</table>"; // Fin de la tabla
            //

    } else {
        $estado = $_SESSION['usuario'];
        $salir = '<a href="recursos/salir.php" target="_self">Cerrar sesión</a>';
        require('recursos/sesiones.php');
    };
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bienvenido</title>

        <link href="lacafeta/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="lacafeta/css/style.css">
    </head>
    <body style="background-color: blueviolet; background-position: center; background-size: 100em">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                
                <p class="navbar-brand">La Cafeta</p>
            </div>
        </nav>
        <br><br><br><br><br>
        <div><p> <h2 style = "color: white">Hola, <?php echo $estado; ?>  <br><br>
        <?php echo $salir; ?></h2></p><div> 
        </div>
        <br><br><br>
        <button onclick="location.href='lacafeta/index.html'"> Tomar orden </button>
        <h2 style = "color: white">Crea una cuenta</h2>
        <div class="formulario-registro">
        <form method="POST" id="registro" action="" accept-charset="utf-8">
            <input type="text" name="userRegistro" class="registro" id="userRegistro" placeholder="Usuario" autocomplete="off" maxlength="20">
            <input type="password" name="passRegistro" class="registro" id="passRegistro" placeholder="Contraseña" autocomplete="off" maxlength="60">
            <input type="submit" name="registro" class="boton-principal" value="Registrarse">
        </form>
        <br><br><br>
        <!--<br>    
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
        <br>-->
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