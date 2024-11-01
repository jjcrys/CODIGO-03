<?php
$lego = array(
    'Titanic' => 205,
    'Mercedes AMG 63' => 90,
    'Torre Eiffel' => 425,
    'Homer' => 1,
    'Próximamente' => 0
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 27</title>
</head>
<body>
    <table>
        <tr>
            <th>Modelo de Lego</th>
            <th>Piezas</th>
        </tr>
        <?php
        ksort($lego);
        foreach ($lego as $modelo => $piezas) {
            echo '<tr>';
            echo '<td align="center" valign="middle">'.$modelo.'</td>';
            echo '<td align="center" valign="middle">'.($piezas === 0 ? "Sin piezas" : ($piezas === 1 ? " $piezas pieza": "$piezas piezas")).'</td>';
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>