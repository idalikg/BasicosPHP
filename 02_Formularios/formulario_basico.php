<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <h1>Formulario Básico en PHP</h1>
    <br/>
    <form action="recibir.php">
        <input type="text" name="nombre" placeholder="Introducir nombre" />
        
        <br/>
        <br/>

        <label for="femenino">Mujer</label>
        <input type="radio" name="fem" value="mujer" id="femenino">
        
        <label for="masculino">Hombre</label>
        <input type="radio" name="mascu" id="masculino">

        <br/>
        <br/>

        <select name="anio">
            <option value="2010">2010</option>
            <option value="2020">2020</option>
            <option value="2030">2030</option>
        </select>

        <br/>
        <br/>

        <label for="terminos">Aceptar terminos</label>
        <input type="checkbox" name="termino" id="terminos" value="accepted">

        <br/>
        <br/>

        <input type="submit" value="Enviar datos">

    </form>
    
    </body>
</html>