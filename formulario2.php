<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario-2</title>
</head>

<body>
    <h1>Formulario de Registro</h1>
    <form action="validar2.php" method="get" onsubmit="return validarFormulario()">

        <label for="nombre"></label>
        <input type="text" id="nombre" name="nombre" required placeholder="Ingrese su nombre">

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required placeholder="Ingrese su apellido">

        <button type="submit">Enviar</button>
    </form>
</body>

</html>