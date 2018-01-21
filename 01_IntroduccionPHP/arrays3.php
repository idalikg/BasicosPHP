<?php

    // Arrays Indexados & FOR
    $dias = ['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'];

    echo 'Días con FOR:' . PHP_EOL;
    for ($dia=0; $dia < count($dias); $dia++) { 
        echo 'Día ' . ($dia+1) . ' : ' . $dias[$dia] . PHP_EOL;
    }

    // Array Indexado & while
    $abecedario = ['A','B','C','D','E','F','G','H','I','J'];
    echo PHP_EOL . 'Abecedario con WHILE: ' .PHP_EOL;
    $letra = 0;
    while ($letra < count($abecedario)) {
        echo 'Letra ' . ($letra+1) . ' : ' . $abecedario[$letra] . PHP_EOL;
        $letra++;
    }
?>