<?php
/*VECTOR ASOCIATIVO DE 10 ELEMENTOS*/
$vector = array();
$vector[0] = 1;
$vector[3] = 2;
$vector[5] = 5;
$vector[7] = 10;
$vector[10] = 25;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 9</title>
</head>
<body>
    <table>
        <tr>
            <td>indice</td>
            <td>valor</td>
        </tr>

        <?php
        // MAX ME DEVOLVERIA 5 SOLAMENTE
        // SI USO ARRAY KEYS DE AHI ME SACARIA EL INDICE MAS ALTO
            for ($i=0; $i <= max(array_keys($vector)); $i++) { 
                echo '<tr>';
                    echo '<td>'. $i .'</td>';
                    if (isset($vector[$i])) {
                        echo '<td align="center" valign="middle">'. $vector[$i] .'</td>';
                    }else {
                        echo '<td align="center" valign="middle"> - </td>';
                    }
                echo '</tr>';
            }
        ?>
    </table>
    
</body>
</html>