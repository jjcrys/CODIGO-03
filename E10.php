<?php
$monedas = [
    'Euro' => '1.05 USD',
    'Libra' => '1.22 USD',
    'Real' => '0.20 USD',
    'Rupia' => '0.012 USD',
    'Dolar Canadiense' => '0.73 USD',
    'Peso Mexicano' => '0.056 USD'
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 10</title>
</head>
<body>
    <table>
        <tr>
            <td align="center" valign="middle">Moneda</td>
            <td align="center" valign="middle">Valor en USD</td>
        </tr>

        <?php
        foreach ($monedas as $moneda => $valor) {
            echo '<tr>';
                echo "<td align=\"center\" valign=\"middle\">$moneda</td>";
                echo "<td align=\"center\" valign=\"middle\">$valor</td>";
            echo '</tr>'; 
        }
        ?>
    </table>
</body>
</html>