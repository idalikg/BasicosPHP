<?php

    // comprobación de datos enviados por el formulario
    // '<pre>' . print_r($_POST) . '</pre>';

    // condicional para validar que se estén enviando los datos mediante el método POST
    if ($_POST) {
        $nombre = $_POST['name'];
        $genero = $_POST['gender'];
        $anio = $_POST['year'];
        $termino = $_POST['term'];
    
        echo '<h1>Los datos enviados fueron: </h1>' . '<br/>';
        echo 'Nombre: ' . $nombre . '<br/>';
        echo 'Género: ' . $genero . '<br/>';
        echo 'Año nacimiento: ' . $anio . '<br/>';
    
        // variable para almacenar el string a imprimir según se hayan aceptado los términos
        $aceptado;
    
        // condicional para asignar el valor de terminado si el valor recido es igual o diferente a 1
        ($termino==1)?$aceptado='Términos aceptados':$aceptado='No se aceptaron términos';
        
        // impresición del valor recibido
        echo $aceptado;
        // echo 'Términos aceptados?: ' . $termino . '<br/>';
    } else {
        // en caso de no enviar, ni recibir valores por POST, y además se quiera acceder nuevamente al archivo 'recibir_post.php', entonces redirigirá a una URL espcifica, esto para denegar el acceso a datos enviados.
        header('Location: https://www.google.com.mx/');
    }
?>