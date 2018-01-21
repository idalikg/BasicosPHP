<?php

    // si no se envían y/o reciben datos por POST entonces deberá redirigir
    if (!$_GET) {
        header('Location: https://www.google.com.mx/');
    }
    
    $nombre = $_GET['name'];
    $genero = $_GET['gender'];
    $anio = $_GET['year'];
    $termino = $_GET['term'];

    echo '<h1>Datos enviados:</h1>';
    echo 'Nombre: ' . $nombre .'<br/>';
    echo 'Género: ' . $genero . '<br/>';
    echo 'Año nacimiento: ' . $anio . '<br/>';

    // variable para almacenar el string a imprimir según se hayan aceptado los términos
    $aceptado;
    
    // condicional para asignar el valor de terminado si el valor recido es igual o diferente a 1
    ($termino==1)?$aceptado='Términos aceptados':$aceptado='No se aceptaron términos';

    // impresición del valor recibido
    echo $aceptado;
?>