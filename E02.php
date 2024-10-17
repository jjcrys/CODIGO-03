<?php
/*VECTOR ASOCIATIVO DE 10 ELEMENTOS*/
$alimentos = [
    'alimento1' => 'pez',
    'alimento2' => 'ternera',
    'alimento3' => 'pollo',
    'alimento4' => 'brocoli',
    'alimento5' => 'zanahoria',
    'alimento6' => 'lechuga',
    'alimento7' => 'arroz',
    'alimento8' => 'avena',
    'alimento9' => 'pan',
    'alimento10' => 'galletas'
];
?>

<html>
<head>
    <title>Ejercicio 2</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Tipo de alimento</td>
            <td>Producto</td>
        </tr>
        <?php
        foreach ($alimentos as $alimento => $producto) {
            echo '<tr>';
            echo '<td>' . $alimento . '</td>';
            echo '<td>' . $producto . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>