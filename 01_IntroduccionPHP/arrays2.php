<?php
    /**
     * FOREACH
     * permite recorrer arrays y objetos para obtener claves y valores de los mismos
     * 
     */

    // Array Indexado
    $dias = ['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'];
    echo 'Los días de la semana son los siguientes: ' . PHP_EOL;
    foreach ($dias as $dia) {
        echo $dia . PHP_EOL;
    }

    // Array Asociativo
    $numeros = ['uno' => 1, 'dos' => 2, 'tres' => 3, 'cuatro' => 4, 'cinco' => 5];
    echo 'Lista de números' . PHP_EOL;
    foreach ($numeros as $valor => $numero) {
        echo 'El número ' . $valor . ' es igual a: ' . $numero . PHP_EOL;
    }

?>