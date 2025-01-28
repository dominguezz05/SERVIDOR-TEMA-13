<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    // Función para filtrar y validar datos y usarla de manera generica
    function filtrarDato($dato)
    {
        return htmlspecialchars(trim($dato), ENT_QUOTES, 'UTF-8');
    }

    // Filtrar y validar cada campo
    $nombre = filtrarDato($_GET['nombre']);
    echo "Nombre filtrado: " . $nombre . "<br>";

    $apellido = filtrarDato($_GET['apellido']);
    echo "Apellido filtrado: " . $apellido . "<br>";

    $dni = $_GET['dni'];
    if (!preg_match('/^\d{7,8}[a-zA-Z]$/', $dni)) {
        echo "DNI no válido.<br>";
    } else {
        echo "DNI válido: " . htmlspecialchars($dni, ENT_QUOTES, 'UTF-8') . "<br>";
    }


    $telefono = filter_var($_GET['telefono'], FILTER_SANITIZE_NUMBER_INT);
    if (!preg_match('/^\d{9}$/', $telefono)) {
        echo "Teléfono no válido.<br>";
    } else {
        echo "Teléfono válido: " . $telefono . "<br>";
    }

    $direccion = filtrarDato($_GET['direccion']);
    echo "Dirección filtrada: " . $direccion . "<br>";

    $correo = filter_var($_GET['correo'], FILTER_VALIDATE_EMAIL);
    if (!$correo) {
        echo "Correo electrónico no válido.<br>";
    } else {
        echo "Correo válido: " . $correo . "<br>";
    }

    $puesto = filtrarDato($_GET['puesto']);
    echo "Puesto filtrado: " . $puesto . "<br>";

    $codigoPostal = filter_var($_GET['codigo-postal'], FILTER_SANITIZE_NUMBER_INT);
    if (!preg_match('/^\d{4,5}$/', $codigoPostal)) {
        echo "Código postal no válido.<br>";
    } else {
        echo "Código postal válido: " . $codigoPostal . "<br>";
    }

    $salario = filter_var($_GET['salario'], FILTER_VALIDATE_FLOAT);
    if ($salario === false || $salario <= 0) {
        echo "Salario no válido.<br>";
    } else {
        echo "Salario válido: " . $salario . "<br>";
    }
}
