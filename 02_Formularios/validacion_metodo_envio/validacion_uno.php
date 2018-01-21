<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo 'Datos enviados con GET';
    } else {
        echo 'Datos enviados con POST';
    }

    /**
     * VALIDACIÓN FORMA 1:
     * 
     * Este tipo de validación permite determinar y verificar el tipo de método utilizado en la petición de envío de datos de un formulario, es decir, si es GET o POST.
     * 
     * El método de obtiene con el índice o variable 'REQUEST_METHOD' de la variable global $_SERVER.
     * 
     * Una vez que se sabe el método de envío, a través de una condicional se compara y verifica si el valor de esta es igual al método especificado en la propiedad 'method' del formulario que se está trabajando.
     * 
     * NOTA: Esta forma de validación tiene como inconveniente que solo permite validar un sólo formulario, por tanto, en caso de tener más de un formulario dentro de una página, lo más conveniente será utilizar la forma de validación dos. 
     */
?>