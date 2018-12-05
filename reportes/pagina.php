<?php
   // Reanudamos la sesión
    // session_start();

    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $basededatos = "database";
        
        // creación de la conexión a la base de datos con mysql_connect()
    $conexion = mysqli_connect( $servidor, $usuario, "" )
    or die ("No se ha podido conectar al servidor BD");
        
        // Selección de la base de datos a utilizar
    $db = mysqli_select_db( $conexion, $basededatos ) 
       or die ( "Upps! Pues va a ser que  podido conectar"
            . " a la base de datos" );
        // establecer y realizar consulta. guardamos en variable.
    $consulta = "call reporte_ventas";

    $resultado = mysqli_query( $conexion, $consulta )
            or die ( "Algo ha ido mal en la consulta a la base de datos");


    $tabsiz = "2";
    $thcol = "4";

    $estado = $_SESSION['usuario'];
    echo "<br><br><br><br>";
    echo"<center>";
    echo "Bienvenido, ";
    echo $estado;
    echo '<table border="'.$tabsiz.'">';
           echo "<tr>";   
           echo '<th colspan="'.$thcol.'">'." <center> <h3> Reporte de Ventas </h3> </center> </th>"; 
           echo " </tr>";
           echo "<tr>"; 
           echo '<th colspan="'.$tabsiz.'">'." Fecha </th>";  
           // echo " <th> Ganancia </th>"; 
           // echo " <th> Perdida </th>";
           echo '<th colspan="'.$tabsiz.'">'." Total </th>";   
           echo "</tr>"; 
    
    // Bucle while que recorre cada registro y muestra cada campo en la tabla.
    while ($registro = mysqli_fetch_array( $resultado )) {
      
        echo "<tr>";
              
        echo '<th colspan="'.$tabsiz.'">'.$registro['fecha']."</td>";
        echo '<th colspan="'.$tabsiz.'">'.$registro['total_ventas']."</td>";

        echo "</tr>";
    }
    
    echo "</table>"; // Fin de la tabla
            

    echo "<br><br><br>";


        
        // creación de la conexión a la base de datos con mysql_connect()
    $conexion = mysqli_connect( $servidor, $usuario, "" )
    or die ("No se ha podido conectar al servidor BD");
        
        // Selección del a base de datos a utilizar
    $db = mysqli_select_db( $conexion, $basededatos ) 
       or die ( "Upps! Pues va a ser que  podido conectar"
            . " a la base de datos" );

    $consulta = "select * from empleados";


    $resultado = mysqli_query($conexion,$consulta) or die ( "Algo ha ido mal en la consulta a la base de datos");


            $tabsiz = "1";
             $thcol = "5";

            

    echo"<center>";
    echo '<table border="'.$tabsiz.'">';

        echo "<tr>";   
        echo '<th colspan="'.$thcol.'">'." <center> <h2> Lista de Empleados </h2> </center> </th>"; 
        echo " </tr>";

        echo "<tr>"; 

            echo '<th colspan="'.$tabsiz.'">'." nombre </th>";  
            echo '<th colspan="'.$tabsiz.'">'." apellido paterno </th>"; 
            echo '<th colspan="'.$tabsiz.'">'." apellido materno </th>"; 
            echo '<th colspan="'.$tabsiz.'">'." telefono </th>"; 
            echo '<th colspan="'.$tabsiz.'">'." puesto </th>"; 
    
        echo "</tr>"; 
    
    // Bucle while que recorre cada registro y muestra cada campo en la tabla.
    while ($registro = mysqli_fetch_array( $resultado )) {
      
        echo "<tr>";
              
            echo '<th colspan="'.$tabsiz.'">'.$registro['nombre']."</td>";
            echo '<th colspan="'.$tabsiz.'">'.$registro['apellido_pat']."</td>";
            echo '<th colspan="'.$tabsiz.'">'.$registro['apellido_mat']."</td>";
            echo '<th colspan="'.$tabsiz.'">'.$registro['telefono']."</td>";
            echo '<th colspan="'.$tabsiz.'">'.$registro['puesto']."</td>";

        echo "</tr>";
    }
    
    echo "</table>"; // Fin de la tabla
    echo "<br>";

    $ruta = "location.href = 'lacafeta/index.html'";
    $ruta2 = "location.href = 'recursos/salir.php'";
    $ruta3 = "location.href = '../singin.php'";
    echo '<button onclick="'.$ruta.'">'."Tomar orden </button>";
    echo '<input type="button" value="Actualizar" onclick="location.reload()"/>';
    $salir = '<button onclick="'.$ruta2.'">'."Cerrar Sesion </button>";
    echo $salir;    
    echo "<br><br>";
    echo '<button onclick="'.$ruta3.'">'."Registrar nuevo usuario </button>";
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bienvenido</title>

        <link href="lacafeta/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="lacafeta/css/style.css">
    </head>
    <body style="background-color: white; background-position: center; background-size: 100em">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                
                <p class="navbar-brand">La Cafeta</p>
            </div>
        </nav>
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
    </body>
</html>