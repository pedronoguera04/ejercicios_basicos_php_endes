<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado: El Mayor de Tres Números</title>
</head>
<body>
    <h1>Resultado: El Mayor de Tres Números</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Capturamos los números ingresados por el usuario
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];

        // Calculamos cuál es el mayor de los tres números
        $mayor = max($numero1, $numero2, $numero3);

        // Mostramos el resultado
        echo "<h2>El mayor número es: $mayor</h2>";
    } else {
        echo "<h2>No se recibieron los datos correctamente.</h2>";
    }
    ?>

    <br>
    <a href="formulario_mayor.html">Volver al formulario</a>
</body>
</html>

