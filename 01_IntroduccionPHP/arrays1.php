<?php
    /**
     * FORMAS DE DECLARAR UN ARRAY
     * 
     * Forma 1: $nom_arreglo = array();
     * 
     * Forma 2: $nom_arreglo = [];
     */

    /**
     * TIPOS DE ARRAY
     * 
     * Indexado -> valores toman una posición dentro del arreglo, empezando desde el cero  
     *  $nom_arreglo = array(val1, val2, valN);
     * 
     *  $nom_arreglo[posicion];
     */
    $dias = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
    echo 'Array indexado' . PHP_EOL;
    echo $dias[0].PHP_EOL;
    echo $dias[1].PHP_EOL;
    echo $dias[2].PHP_EOL;
    echo $dias[3].PHP_EOL;
    echo $dias[4].PHP_EOL;
    echo $dias[5].PHP_EOL;
    echo $dias[6].PHP_EOL;



    /** 
     * Asociativo -> a los valores se les asigna un nombre o clave a través de una flecha doble (=>)
     * 
     *  $nom_arreglo = array(clave1 => val1, clave2 => val2, claveN => valN);
     * 
     *  $nom_arreglo['clave'];
     */
    $dias = array('uno' => 1, 'dos' => 2, 'tres' => 3, 'cuatro' => 4, 'cinco' => 5);
    echo PHP_EOL . 'Array asociativo' . PHP_EOL;
    echo $dias['uno'] . PHP_EOL;
    echo $dias['dos'] . PHP_EOL;
    echo $dias['tres'] . PHP_EOL;
    echo $dias['cuatro'] . PHP_EOL;
    echo $dias['cinco'] . PHP_EOL;

    /**
     * Multidimensional -> dentro de un arreglo puede incluirse a la vez, uno o más arrays simples o multidimensionales
     * 
     *  $nom_arreglo = array(
     *                $clave1 => val1
     *                $clave2 => val2,
     *                $clave3 => array($subclave1 => subvalor1, $subclaveN => subvalorN),                 $claveN => valorN
     *              ); 
     * 
     *  $nom_arreglo['clave']['subclave'];
     */
    
    $persona = array('nombre' => 'Luis', 'edad' => 25, 'direccion' => array(
        'calle' => 'Cerrada 1',
        'numero' => 12,
        'cp' => 150
    ));
    echo PHP_EOL . 'Array multidimensional' . PHP_EOL;
    echo $persona['nombre'] . PHP_EOL;
    echo $persona['edad'] . PHP_EOL;
    echo 'Dirección: calle ' . $persona['direccion']['calle'] . ', número ' .$persona['direccion']['numero'] . ', código postal ' . $persona['direccion']['cp'] . PHP_EOL;

?>