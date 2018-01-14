<?php

    /**
     * echo 
     *  Permite mostrar una o varias cadenas.
     * 
     *  Los saltos de línea que se apliquen a las cadaenas serán respetadas, es decir, se mostrarán al ser impresas.
     * 
     *  Para escapar (es decir, omitir una cadena o ciertos caracteres determinados) un string o ciertos caracteres es necesario insertarlos entre dos diagonales invertidas con la siguiente sintaxis:
     *                  \"string\" -> EX. \"Mensaje\"
     */

     echo "Hola mundo con echo";

     echo "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus ipsam ullam
     quam laudantium, odit mollitia et debitis pariatur distinctio cumque necessitatibus
      blanditiis rerum aspernatur vel voluptatum. Veniam dolorum atque nam.";

      echo "\nEjemplo de escape de caracteres de un string \"PHP\" es un lenguaje de programación.";

    // ---------------------------------------------
    
    /**
     * print 
     *  Es similar a echo, con l diferencia de que permite mostrar una cadena.
     *  También respeta saltos de línea y permite además, escapar caracteres
     */
    print "\nHola mundo con print";
    
    print "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus ipsam ullam
    quam laudantium, odit mollitia et debitis pariatur distinctio cumque necessitatibus
    blanditiis rerum aspernatur vel voluptatum. Veniam dolorum atque nam.";
    
    print "\nEjemplo de escape de caracteres de un string \"JavaScript\" es un lenguaje de programación.\n";
    
    // ---------------------------------------------

    /**
     * printf
     *  Permite imprimir una cadena con un determinado formato, es decir, da la posibilidad de especificar que una cadena de texto se muestre como string, entero, flotante, binario, hexadecimal, ASCII, lowercase, uppercase, etc.  
     * 
     *  Sintaxis:
     *          printf("%format", $variable);
     * 
     * URL tabla de formatos:
     * https://www.w3schools.com/php/func_string_printf.asp
     */

    $number = 50;

    // Imprimirá el valo de 50 en decimal
    printf("%d \n", $number); 
    
    // Imprimirá el valo de 50 como flotante
    printf("%f \n", $number); 

    // Imprimirá el valor de 50 como binario
    printf("%b \n", $number);
    
    // Imprimirá el valor de 50 en hexadecimal
    printf("%x \n", $number);
?>