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

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" required placeholder="Ingrese su nombre"
            pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+" title="El nombre solo puede contener letras y espacios."><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required placeholder="Ingrese su apellido"
            pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+" title="El apellido solo puede contener letras y espacios."><br>

        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" required placeholder="Ingrese su DNI"
            pattern="\d{7,8}[a-zA-Z]" title="El DNI debe contener entre 7 y 8 dígitos seguidos de una letra."><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required placeholder="Ingrese su teléfono"
            pattern="\d{9}" title="El teléfono debe contener 9   dígitos."><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required placeholder="Ingrese su dirección"
            pattern="[\w\s\.,#-]+" title="La dirección puede incluir letras, números y caracteres como punto, coma o guión."><br>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required placeholder="Ingrese su correo"><br>

        <label for="puesto">Puesto:</label>
        <input type="text" id="puesto" name="puesto" required placeholder="Ingrese su puesto de trabajo"
            pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+" title="El puesto solo puede contener letras y espacios."><br>

        <label for="codigo-postal">Código Postal:</label>
        <input type="text" id="codigo-postal" name="codigo-postal" required placeholder="Ingrese su código postal"
            pattern="\d{4,5}" title="El código postal debe contener entre 4 y 5 dígitos."><br>

        <label for="salario">Salario:</label>
        <input type="number" id="salario" name="salario" required placeholder="Ingrese su salario"
            min="1" step="0.01" title="El salario debe ser un número positivo con hasta dos decimales."><br>


        <button type="submit">Enviar</button>
    </form>
</body>

</html>