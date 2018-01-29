<?php

    // iniciando sesión
    session_start();

    // variable superglobal que almacena información de una sesión.
    $_SESSION['name'] = "Usuario X";
    // 'name' es el indicador o nombre que tendrá la sesión, y su valor será 'Usuario X'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesión</title>
</head>
<body>
    <h1>Inicio de sesión</h1>
    <br/><br/>
    <a href="page2.php">Iniciar sesión</a>
</body>
</html>