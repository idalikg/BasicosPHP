<?php

    // declaración de la variable que almacenará la cookie
    $size = '';

    // declaración de variable que almacenará mensaje a mostrar si existe o no una cookie
    $msg = '';

    // validación de existencia de una cookie
    if(isset($_COOKIE['font-size'])){
        
        // almacenamiento de cookie en una variable
        $size = $_COOKIE['font-size'];
        $msg = 'Cookie funcionando';
    } else {
        $size = '30px';
        $msg = 'No hay cookies seteadas';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página 2</title>
    <style>
        p{
            /* asignación dinámica del valor de tamaño de letra */
            font-size: <?php echo $size ?>;
        }
    </style>
</head>
<body>
    <h1>Prueba de cookie</h1>
    <br/>
    <h3><?php echo $msg; ?></h3>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores ullam est reprehenderit, labore, possimus in, quaerat iure aut sequi repellendus quia reiciendis! Ex, animi et? Laboriosam tempora nulla minus quas!</p>
</body>
</html>