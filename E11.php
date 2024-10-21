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
    <title>Ejercicio 11</title>
</head>

<body>
    <table>
        <tr>
            <td align="center" valign="middle">Moneda</td>
            <td align="center" valign="middle">Valor en USD</td>
        </tr>

        <?php
        for ($i = 0; $i < count($monedas[0]); $i++) {
            echo '<tr>';
            for ($j = 0; $j < count($monedas); $j++) {
                echo "<td>" . $monedas[$j][$i] . "</td>";
            }
            echo '</tr>';
        }
        ?>
    </table>

</body>

</html>