<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validación de envío</title>
</head>
<body>
    <h1>Validación y comprobación de envío de datos </h1>
    <br/><br/>
    <!-- validación forma 1-->
    <!-- <form action="validacion_uno.php" method="POST"> 
        <input type="text" name="nombre" placeholder="Insertar nombre">
        <br/><br/>
        <input type="text" name="correo" placeholder="Insertar correo">
        <br/><br/>
        <input type="submit" value="Validar envío">
    </form> -->

    <!-- validación forma 2 -->
    <h1>Formulario 1</h1>
    <form action="validacion_dos.php" method="POST"> 
        <input type="text" name="nombre" placeholder="Insertar nombre">
        <br/><br/>
        <input type="text" name="correo" placeholder="Insertar correo">
        <br/><br/>
        <input type="submit" value="Validar envío" name="submit-formulario-uno">
    </form>

    <br/><br/>
    
    <h1>Formulario 2</h1>
    <form action="validacion_dos.php" method="POST"> 
        <input type="text" name="nombre" placeholder="Insertar nombre">
        <br/><br/>
        <input type="text" name="correo" placeholder="Insertar correo">
        <br/><br/>
        <input type="submit" value="Validar envío" name="submit-formulario-dos">
    </form>
</body>
</html>