<?php
$p = array("Patatas", "Arroz", "Caldo de pollo", "Lentejas", "Alubias", "Ternera", "Pollo", "Queso", "Leche", "Jamón");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 30</title>
</head>

<body>
    <form action="" method="post">
        <label>Productos</label><br><br>

        <?php
        foreach ($p as $producto) {
            echo "<label>$producto</label>";
            echo '<input type="checkbox" name="productos[]" value=' . $producto . '>';
            echo '<br>';
        }
        ?>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>

<?php
if ((isset($_POST['productos']))) {
    sort($p);
    echo '<table border= "1">';
    echo '<tr>';
    echo '<td>Producto</td>';
    echo '<td>Selección</td>';
    echo '</tr>';
    foreach ($p as $producto) {
        echo '<tr>';
        echo "<td>$producto</td>";
        /*Compruebo si el valor del array esta en el que me pasaron en el formulario */
        if (in_array($producto, $_POST['productos'])) {
            echo '<td>Marcado</td>';
        } else {
            echo '<td> </td>';
        }
        echo '</tr>';
    }
    echo '</table>';
} 
?>