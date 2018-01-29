<?php

    // iniciando sesión en página 2
    session_start();

    // variable que guardará la cadena de texto a mostrar si se ha iniciado o no una sesión
    $msg_inicio = '';
    
    // variable que guardará la cadena de texto a mostrar en el link para cerrar sesión o para ir 'index.php'
    $msg_link = '';

    // comprobación de existencia de una sesión activa
    if($_SESSION){

        // almacenamiento de la variable global de la sesión
        $nombre = $_SESSION['name'];

        $msg_inicio = "<h3>Hola  $nombre</h3>";
        $msg_link = "<a href='exit.php'>Cerrar sesión</a>";
        
    } else {
        $msg_inicio = "<h3>No se ha iniciado sesión</h3>";
        $msg_link = "<a href='index.php'>Ir al home</a>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página 2</title>
</head>
<body>
    <h1>Página 2</h1>
    <br/>
    <?php 
        echo $msg_inicio . '</br>';
        echo $msg_link;    
    ?>

</body>
</html>