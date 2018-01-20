<?php
    $a = 1;
    $b = 3;
    $c = 5;

    $e = "1";

    // == comparación de dos valores 
    if($a==$b){
        echo '$a y $b son iguales' . PHP_EOL;
    } else {
        echo '$a y $b no son iguales' . PHP_EOL;
    }

    if($a==$e){
        echo '$a y $e son iguales, sin importar el tipo' . PHP_EOL;
    } else {
        echo '$a y $e desiguales';
    }

    // === idénticos, además de validar que dos valores son iguales, también compara que sean del mismo tipo de dato
    if ($a===$e) {
        echo '$a y $e son iguales y del mismo tipo';
    } else {
        echo '$a y $e desiguales, $a  es de tipo ' . gettype($a) . ' y $e es de tipo ' . gettype($e); 
    }

    
    // 
?>