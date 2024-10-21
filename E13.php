<?php
$ciudades = array("Madrid", "Barcelona", "Valencia", "Sevilla", "Zaragoza", "Málaga", "Murcia", "Palma", "Bilbao", "Granada");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 13</title>
</head>
<body>
    <table>
        <tr>
            <td>CIUDAD</td>
            </tr>
            <?php
            foreach ($ciudades as $ciudad) {
                echo "<tr>";
                echo "<td> $ciudad </td>";
                echo "</tr>";
            }
            ?>
    </table>
    <br>
    <table>
        <tr>
            <td>CIUDAD A-Z</td>
            </tr>
            <?php
            sort($ciudades);
            foreach ($ciudades as $ciudad) {
                echo "<tr>";
                echo "<td> $ciudad </td>";
                echo "</tr>";
            }
            ?>
    </table>
    <br>
    <table>
        <tr>
            <td>CIUDAD Z-A</td>
            </tr>
            <?php
            rsort($ciudades);
            foreach ($ciudades as $ciudad) {
                echo "<tr>";
                echo "<td> $ciudad </td>";
                echo "</tr>";
            }
            ?>
    </table>
</body>
</html>