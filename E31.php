<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 31</title>
</head>
<body>

    <h2>Selecciona un Color</h2>
    <form method="POST">
        <label for="color">Elige un color:</label>
        <input type="color" name="color">
        <button type="submit">Enviar</button>
    </form>

    <?php
    
    if (isset($_POST['color'])) {
        $colorSeleccionado = $_POST['color'];
        echo "<p style='color: $colorSeleccionado;'>Has seleccionado el color: $colorSeleccionado</p>";
    }
    ?>

</body>
</html>
