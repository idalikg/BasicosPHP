<?php
    if(isset($_POST['submit-formulario-uno'])){
        echo 'Formulario 1 enviado';
    } elseif (isset($_POST['submit-formulario-dos'])) {
        echo 'Formulario 2 enviado';
    }

    /**
     * VALIDACIÓN FORMA 2:
     * 
     * Este tipo de validación es más optima cuando se quiere validar el envío de datos de un determinado formulario, simpre y cuando exista más de un de en una págia.
     *  
     * Por ejemplo, si en una página se tiene dos formularios, entonces a cada uno de ellos se le tiene que asignar un 'name' particular en su 'input' de tipo 'submit'. 
     * Para este caso en el index.php hay dos formularios; el primero, en su input lleva como 'name' 'submit-formulario-uno', mientras que el del segundo es 'submit-formulario-dos'.
     * 
     * Ahora bien, con ambos valores se establece una serie de condicionales para verificar el valor de ambos 'name', y dependiendo de que formulario se esté enviando los datos, entonces se resolverá las acciones a tomar. 
     */
?>