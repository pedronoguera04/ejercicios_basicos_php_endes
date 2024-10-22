<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Tiempo de Viaje</title>
</head>
<body>
    <h1>Resultado del Tiempo de Viaje</h1>

    <?php
    // Verificamos si los datos vienen del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Capturamos los datos del formulario
        $distancia = $_POST['distancia'];
        $velocidad = $_POST['velocidad'];

        // Verificamos que la velocidad no sea cero para evitar una división por cero
        if ($velocidad > 0) {
            // Calculamos el tiempo de viaje (tiempo = distancia / velocidad)
            $tiempo = $distancia / $velocidad;

            // Mostramos el resultado
            echo "<h2>El tiempo estimado de viaje es de " . number_format($tiempo, 2) . " horas.</h2>";
        } else {
            echo "<h2>La velocidad no puede ser 0. Por favor ingrese un valor válido.</h2>";
        }
    } else {
        echo "<h2>No se recibieron datos del formulario.</h2>";
    }
    ?>

    <br>
    <a href="formulario.html">Volver al formulario</a>
</body>
</html>
