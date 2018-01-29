<?php
    // ARCHIVO QUE FINALIZA SESIÓN

    // iniciando sesión
    session_start();

    // eliminando sesión
    session_destroy();

    echo '<h1>Sesión finalizada</h1><br/>';

    echo "<a href='index.php'>HOME</a>";

?>