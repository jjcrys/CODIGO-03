<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 32</title>
</head>
<body>

    <h2>¿Cuál es el país más grande del mundo?</h2>
    <form method="POST">
        <label>
            <input type="radio" name="respuesta" value="China"> China
        </label><br>
        <label>
            <input type="radio" name="respuesta" value="Rusia"> Rusia
        </label><br>
        <label>
            <input type="radio" name="respuesta" value="EE.UU."> EE.UU.
        </label><br>
        <label>
            <input type="radio" name="respuesta" value="Canadá"> Canadá
        </label><br>
        
        <input type="hidden" name="intentos" value="<?php echo isset($_POST['intentos']) ? $_POST['intentos'] + 1 : 1; ?>">
        
        <button type="submit">Enviar</button>
    </form>

    <?php
    $respuestaCorrecta = "Rusia";

    if (isset($_POST['respuesta'])) {
        $respuesta = $_POST['respuesta'];
        $intentos = $_POST['intentos'];

        if ($respuesta === $respuestaCorrecta) {
            echo "<p>¡Respuesta correcta! Has necesitado $intentos intentos.</p>";
        } else {
            echo "<p>Respuesta incorrecta. Llevas $intentos intentos. Inténtalo de nuevo.</p>";
        }
    }
    ?>

</body>
</html>
