<?php 

// CONSTANTES
    
    define('PI', 3.1416);

    define('GRAVITY', 9.81);

// VARIABLES
    
    // string
    $saludo = 'Hola mundo';

    // numérico
    $num1 = 3;
    $num2 = 5;

    // booleano
    $verdad = true;
    $falso = false;

    echo '<h3>'. $saludo .'</h3>';
    
    echo '<h3>'. $num1 .' + '. $num2 .' = '. ($num1 + $num2) .'</h3>';

    // constantes
    echo '<h3>El valor de PI es igual a '. PI . '<br/>';

    echo '<h3>La fuerza de gravedad en la tierra es igual a '. GRAVITY . ' m/s<sup>2</sup><br/>';

?>