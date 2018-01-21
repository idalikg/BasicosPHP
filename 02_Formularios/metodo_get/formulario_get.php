<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Método  GET</title>
</head>
<body>
    <h1>Formulario Básico en PHP y GET</h1>

    <br/><br/>

    <form action="recibir_get.php" method="GET">
        <label for="nombre">Nombre:</label>
        <input type="text" name="name" id="nombre">

        <br/><br/>

        <label for="femenino">Mujer</label>
        <input type="radio" name="gender" id="femenino" value="mujer">
        <br/>
        <label for="masculino">Hombre</label>
        <input type="radio" name="gender" id="masculino" value="hombre">

        <br/><br/>

        <select name="year">
            <option value="2010">2010</option>
            <option value="2020">2020</option>
            <option value="2030">2030</option>
        </select>

        <br/><br/>

        <label for="termino">Aceptar términos??</label>
        <input type="checkbox" name="term" id="termino" value="1">

        <br/><br/>

        <input type="submit" value="Enviar datos">
    </form>
    <br/><br/>
</body>
</html>