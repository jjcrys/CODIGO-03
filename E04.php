<?php
/*EJERCICIO ANTERIOR CON DIFERENTE IMPLEMENTACIÓN (BUCLE WHILE) */
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
    <title>Ejercicio 4</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Tipo de alimento</td>
            <td>Producto</td>
        </tr>
        <?php
        $numAl = array_keys($alimentos);
        $i=0;
        while ($i < count($numAl)) {
            echo '<tr>';
            echo '<td>' . $numAl[$i] . '</td>';
            echo '<td>' . $alimentos[$numAl[$i]] . '</td>';
            echo '</tr>';  
            $i++;
        }
        ?>
    </table>
</body>
</html>

