<?php
$vector = array();

for ($i=0; $i <= 20; $i++) { 
    $numero = rand(1,20);
    $vector[$i] = $numero;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7</title>
</head>
<body>
    <!-- De manera no ordenada -->
    <table  border="1" cellpadding="5" cellspacing="0">
        <?php
            echo '<tr>';
                echo '<td>indice</td>';
                echo '<td>valor</td>';
            echo '</tr>';

            for ($i=0; $i < count($vector); $i++) { 
               echo '<tr>';
                    echo "<td>$i</td>";
                    echo '<td>' .$vector[$i]. '</td';
               echo '</tr>';
            }
        ?>
    </table>

    <!-- De manera ordenada -->
    <br>
    <table  border="1" cellpadding="5" cellspacing="0">
        <?php
        sort($vector);
            echo '<tr>';
                echo '<td>indice</td>';
                echo '<td>valor</td>';
            echo '</tr>';

            for ($i=0; $i < count($vector); $i++) { 
               echo '<tr>';
                    echo "<td>$i</td>";
                    echo '<td>' .$vector[$i]. '</td';
               echo '</tr>';
            }
        ?>
    </table>
</body>
</html>