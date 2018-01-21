<?php
    // condicional para verificar que se estén enviando los datos por POST
    if($_POST){

        // impresión en la misma página el valor enviado como nombre
        echo $_POST['name'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Envío de datos internamente</title>
</head>
<body>
    <h1>Envíando datos a la misma página</h1>
    <br/><br/>
    
    <!-- 
        $_SERVER es un array que proporciona PHP y que da acceso a cabeceras, rutas y ubicaciones de scripts que se estén ejecutando en el servidor.

        'PHP_SELF' es uníndice o parámetro del array $_SERVER que almacena el nombre del script php que se está ejecutando. Para el caso de este ejemplo se utilizará para reenviar los datos hacia la misma página.

        htmlspecialchars es una función de PHP que convierte caracteres especiales en entidades HTML. En este caso se le pasa lo que se obtiene del array $_SERVER para salvaguardar la información y evitar la inyeción de código.
     -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    
        <label for="nombre">Nombre:</label>
        <input type="text" name="name">

        <br/><br/>

        <label for="femenino">Mujer</label>
        <input type="radio" name="gender" id="femenino">
        <label for="masculino">Hombre</label>
        <input type="radio" name="gender" id="masculino">
        
        <br/><br/>

        <select name="year">
            <option value="2010">2010</option>
            <option value="2020">2020</option>
            <option value="2030">2030</option>
        </select>

        <br/><br/>

        <input type="checkbox" name="term" value="1">

        <br/><br/>
        
        <input type="submit" value="Enviar datos aquí mismo">
    </form>
</body>
</html>