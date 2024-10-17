<html>

<head>
    <meta charset='utf-8'>
    <title>Ejercicio 1 unidad 03</title>
</head>

<body>
    <form action="" method="get" target="_blank">
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre"><br>
        <label for="apellidos">Apellidos: </label><br>
        <input type="text" name="apellidos"><br><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
    // Comprobamos que los valores esten enviados para que no marque warning ya que todo el cógido
    // esta en el mismo fichero
    if (isset($_GET['nombre']) && isset($_GET['apellidos'])) {
        echo 'DATOS RECOGIDOS: </br>';
        echo 'Nombre: ' . $_GET['nombre'] . '</br>';
        echo 'Apellidos: ' . $_GET['apellidos'] . '</br>';
    }
    ?>
</body>
</html>