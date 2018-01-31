<?php

    // Seteo de nueva cookie
    setcookie('font-size', '60px', time() + 60 * 60 * 24 * 30);
    
    /**
     * setcookie('nombre_cookie, 'valor_cookie', 'ruta_donde_estará_disponible', tiempo_expiración');
     * 
     * time() + 60 * 60 * 24 * 30
     *      time() - función de PHP que devolverá la hora actual
     *      60 segs * 60 mins * 24 hrs * 30 días.
     * NOTA: si no se específica un tiempo de expiración, o simplemente se le asigna como cero, entonces la cookie se eliminará al terminar una sesión, es decir, al cerrar el navegador.
     */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cokkies</title>
</head>
<body>
    <h1>Cookie creada</h1>
    <br/>
    <a href="page2.php">Ir a página 2</a>
</body>
</html>