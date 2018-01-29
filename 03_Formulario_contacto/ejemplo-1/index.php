<?php


    // cadena de texto vacía que almacenará los mensajes de error
    $error = '';

    // variable que manejará el estado del envío de los datos, al asignarlo como vacío se está especificando que será igual a 'false', para que así no se muestre el mensaje 'Datos enviados correctamente' al abrir la aplicación
    $envio_msg = "";

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

        // Validación campo 'mensaje'
        if (!empty($mensaje)) {
            // conversión de caracteres especiales a entidades HTML
            $mensaje = htmlspecialchars($mensaje); 
            
            // eliminación de espacios en blanco
            $mensaje = trim($mensaje);

            // eliminación de diagonales invertidas (backslashes)
            $mensaje = stripcslashes($mensaje);
        } else {
            $error .= '* Mensaje requerido';
        }

        // Validación de inexistencia de errores para el envío de información
        if(!$error){

            // variable para almacenar el correo al cual se enviará la información
            $destinatario = "mail@mail.com";

            // variable para almacenar el título del correo
            $asunto = "Envíando datos desde un formulario";

            // variable que almacenará y concatenará los datos a enviar
            $mensage_salida = "De: $nombre\n";
            $mensage_salida .= "Correo: $correo\n";
            $mensage_salida .= "Mensaje: $mensaje";

            // función de PHP para enviar correos electrónicos. Se comenta ya que sólo funcionará si la aplicación se encuentra alojado en un hosting.
            // mail($destinatario, $asunto, $mensage_salida);

            // asignación de valor 'true' a $envio_msg para que se muetre el mensaje de 'Datos enviados correctamente' al no existir algún error
            $envio_msg = true;
        }

    }

    require 'vista.php';

?>