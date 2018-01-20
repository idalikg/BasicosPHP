<?php

    // valores numéricos
    $a = 1;
    $b = 4;
    $c = 2;

    // && - and 
    if ($a && $b) {
        echo 'Iguales';
    } else {
        echo 'NO iguales';
    }

    // || - or
    if (($a < $c) || ($b < $c)) {
        echo $a .' si es menor a '. $c . PHP_EOL;
    }

    // ! - not negación del valor actual de una variable
    if(!$a){
        echo '$a  es igual a ' . $a; 
    } else {
        echo '$a ha cambiado de valor';
    }

?>