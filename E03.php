<?php
/*EJERCICIO ANTERIOR CON DIFERENTE IMPLEMENTACIÓN (CAMBIO EN BUCLE FOR) */
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
    <title>Ejercicio 3</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Tipo de alimento</td>
            <td>Producto</td>
        </tr>
        <!-- OBTENGO LAS CLAVES DEL ARRAY YA QUE ES UN ARRAY ASOCIATIVO 
        Y SUS CLAVES/INDICES NO SON NUMERICOS -->
        <?php
        // Extraigo las claves en otro array que si tiene idices numericos
        $numAl = array_keys($alimentos);
        for ($i = 0; $i < count($numAl); $i++) {
            echo '<tr>';
                echo '<td>' . $numAl[$i] . '</td>';
                echo '<td>' . $alimentos[$numAl[$i]] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>