<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Contacto</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

    <div class="contenedor">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        
            <input type="text" name="name"  placeholder="Nombre" class="form-control" value="<?php if(!$envio_msg && isset($nombre)) echo $nombre ?>">

            <input type="email" name="mail"  placeholder="Correo" class="form-control" value="<?php if(!$envio_msg && isset($correo)) echo $correo ?>">

            <textarea placeholder="mensaje" class="form-control" name="message"><?php if(!$envio_msg && isset($mensaje)) echo $mensaje ?></textarea>

            <!-- <?php if(!$envio_msg && isset($nombre)) echo $nombre ?> 
            Condicionales que permitirán validar dos cuestiones: primero que el valor de $envio_msg sea 'false', y segundo, que también existan información dentro de los campos nombre, correo y mensaje. 
            Lo anterior se realiza con la intención de que si hay algo escrito dentro de los tres campos, no se borren al intentar enviar los datos cuando se presione en el botón de envío.
            -->

            <!-- <div class="msj error">
                Lorem ipsum dolor sit amet consectetur.
            </div>

            <div class="msj success">
                Lorem ipsum dolor sit amet consectetur. 
            </div> -->
            
            <!-- condicional para comprobar que la variable $error no está vacía -->
            <?php if(!empty($error)): ?>
                <div class="msj error">
                    <?php echo $error; ?>
                </div>
            <?php elseif($envio_msg): ?>
                <div class="msj success">
                    <p>Datos enviados correctamente</p>
                </div>
            <?php endif ?>

            <input type="submit" value="Enviar mensaje" class="btnEnviar" name="submit-form">
            
        </form>
    </div>
</body>
</html>