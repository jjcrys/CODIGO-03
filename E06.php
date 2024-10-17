<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6</title>
</head>
<body>
    <table border="1" cellpadding="5" cellspacing="0">
        <?php
        echo '<tr>';
        echo '<td> X </td>';
        for ($i = 0; $i <= 10; $i++) {
            echo "<td>$i</td>";
        }
        echo '<tr>';

        for ($i = 0; $i <= 10; $i++) {
            echo '<tr>';
            echo "<td>$i</td>";

            for ($j = 0; $j <= 10 ; $j++) {
                echo '<td>' . ($i * $j) . '</td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>