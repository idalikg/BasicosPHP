<?php


    // cadena de texto vacía que almacenará los mensajes de error
    $error = '';

    $envio = "";

    // condicional para validar el campo 'nombre'
    if (isset($_POST['submit-form'])) {
        // echo 'datos enviados';
        
        $nombre = $_POST['name'];
        $correo = $_POST['mail'];
        $mensaje = $_POST['message'];
        
        // Validación campo 'nombre'
        if (!empty($nombre)) {
            
            // eliminación de espacios al inicio y fin
            $nombre = trim($nombre); 
            
            // filtro para eliminar etiquetas 
            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING); 
            
        } else {
            $error .= '* Nombre requerido <br/>';
        }

        // Validación campo 'correo'
        if (!empty($correo)) {
            
            // filtro para eliminar caracteres especiales
            $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

            // condicional para validar si es una dirección de correo válido
            if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                $error .= 'Ingresa un correo válido <br/>';
            }
        } else {
            $error .= '* Correo requerido <br/>';
        }

    }

    require 'vista.php';

?>