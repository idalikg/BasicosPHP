<?php

    $error = ''; // variable que guarda una cadena de texto vacía para imprimir en ella un mensaje de error

    if (isset($_POST['formulario_uno'])) {
        // echo 'se enviarion datos correctamente';
        $nombre = $_POST['name'];
        $correo = $_POST['mail'];

        // echo $nombre . '<br/>'. $correo;
        

        // condicional para validar que el campo 'nombre' no se encuentre vació y contenga información
        if (!empty($nombre)) { // si el campo nombre no está vacío

            // eliminación de etiquetas
            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
            
            echo 'Tú nombre es: ' . $nombre; 
        } else {
            $error.= '* Se requiere de un nombre';
        }
        

        // condicional para validar que el campo 'correo' no se encuentre vació, contenga información y que sea válida
        if (!empty($correo)) {

            // eliminación de etiquetas
            $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

            // condicional para aplicar el filtro de validación de correo electrónico 
            if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) { // si es una dirección de correo válido
                $error.= 'Intoduce un correo válido';
            } else {
                echo 'Tú correo es: ' . $correo;
            }
        } else {
            $error.= '* Se requiere de un correo';
        }


    }


    /**
     * 
     * empty -> es una función de PHP que permite determinar si una variable está vacía.
     * 
     * filter_var -> es una función de PHP que permite asignar filtros específicos a una variable
     *  
     *          filter_var($variable, filtro_a_aplicar);
     * 
     * 
     * FILTER_SANITIZE_STRING y FILTER_SANITIZE_EMAIL son filtros de saneamiento que en el caso del primero, permite eliminar etiquetas o codifica caracteres especiales; y el segundo, da la posibilidad de eliminar caracteres menos letras, dígitos y !#$%&'*+-=?^_`{|}~@.[].
     * 
     * En lo particular, FILTER_SANITIZE_STRING es un filtro que puede ser de ayuda para evitar que se inyecte código HTML dentro del script PHP.
     * 
     * FILTER_VALIDATE_EMAIL -> es un filtro de validación que permite determinar si una dirección de correo eléctronico es válido
     * 
     */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validación PHP</title>
</head>
<body>
    <h1>Validación básica con PHP</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="name" placeholder="Introducir nombre">
        <br/><br/>
        <label for="correo">Correo</label>
        <input type="email" name="mail" placeholder="Introducir correo">
        <br/><br/>

        <!-- condicional que permite determinar si la variable '$error' contiene alguno de los mensajes de error especificados previamente -->
        <?php if(!empty($error)):?>
            <div class="error"> <?php echo $error; ?> </div>
        <?php endif;?>

        <input type="submit" value="ENVIAR DATOS" name="formulario_uno">
    </form>
</body>
</html>