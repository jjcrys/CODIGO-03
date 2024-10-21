<?php
$monedas = [
    ['Euro', 'Libra', 'Real', 'Rupia', 'Dolar Canadiense', 'Peso Mexicano'],
    ['1.05 USD', '1.22 USD', '0.20 USD', '0.012 USD', '0.73 USD', '0.056 USD']
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 12</title>
</head>

<body>
    <table>
        <tr>
            <td align="center" valign="middle">Moneda</td>
            <td align="center" valign="middle">Valor en USD</td>
        </tr>

        <?php
        $contI=0;
        $total_monedas= count($monedas[0]);
        do {
            echo '<tr>';
                echo "<td>". $monedas[0][$contI]."</td>";
                echo "<td>". $monedas[1][$contI]."</td>";
            echo '</tr>';
        $contI++;
        } while ($contI < $total_monedas);
        ?>
    </table>

</body>

</html>