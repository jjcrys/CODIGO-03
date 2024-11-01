<?php
$coches = array(
    '911 Turbo S' => 'Porsche',
    'Huracán EVO' => 'Lamborghini',
    'AMG GT R' => 'Mercedes-Benz',
    'F8 Tributo' => 'Ferrari',
    'R8 V10 Performance' => 'Audi'
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 23</title>
</head>

<body>
    <form action="" method="post">
        <label for="coches">ELIJA UN MODELO DE COCHE: </label>
        <select name="coches" id="coches">
            <option value="" disabled selected>Escoja el modelo...</option>
            <?php
            foreach ($coches as $modelo => $marca) {
                echo "<option value='$modelo'>$modelo</option>";
            }
            ?>
        </select>
        <input type="submit" value="Mostrar marca">
    </form>
</body>

</html>

<?php
if (isset($_POST['coches'])) {
    $modelo = $_POST['coches'];

    $marca = match ($modelo) {
        '911 Turbo S' => 'Porsche',
        'Huracán EVO' => 'Lamborghini',
        'AMG GT R' => 'Mercedes-Benz',
        'F8 Tributo' => 'Ferrari',
        'R8 V10 Performance' => 'Audi',
        default => 'Modelo de coche no encotrado'
    };

    echo '<br>';
    echo '<p>La marca del modelo '.$modelo.' es: '.$marca.'</p>';
}
?>