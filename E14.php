<?php
$c = array("Madrid", "Barcelona", "Valencia", "Sevilla", "Zaragoza", "Málaga", "Murcia", "Palma", "Bilbao", "Granada");

function ciudadesA_Z ($ciudades){
    $elementos = count($ciudades);

    for ($i=0; $i < $elementos; $i++) {
        // -$i -1 para que no se salga del array y para que no cuente el ultimo elemento que ya esta ordenado
        for ($j=0; $j < $elementos - $i - 1; $j++) { 
            if ($ciudades[$j] > $ciudades [$j + 1]) {
                //INTERCAMBIO
                $aux = $ciudades[$j];
                $ciudades[$j] = $ciudades[$j+1];
                $ciudades[$j+1] = $aux;
            }
        }
    }
    return $ciudades;
}

function ciudadesZ_A ($ciudades){
    $elementos = count($ciudades);

    for ($i=0; $i < $elementos; $i++) {
        // -$i -1 para que no se salga del array y para que no cuente el ultimo elemento que ya esta ordenado
        for ($j=0; $j < $elementos - $i - 1; $j++) { 
            if ($ciudades[$j] < $ciudades [$j + 1]) {
                //INTERCAMBIO
                $aux = $ciudades[$j];
                $ciudades[$j] = $ciudades[$j+1];
                $ciudades[$j+1] = $aux;
            }
        }
    }
    return $ciudades;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 14</title>
</head>
<body>
    <table>
        <tr>
            <th>CIUDADES A - Z</th>
        </tr>

        <?php
        $cA_Z= ciudadesA_Z($c);
        foreach ($cA_Z as $ciudad) {
            echo '<tr>';
            echo "<td>$ciudad</td>";  
            echo '</tr>';
        }
        ?>
    </table>
    <br>
    <table>
        <tr>
            <th>CIUDADES A - Z</th>
        </tr>

        <?php
        $cZ_A= ciudadesZ_A($c);
        foreach ($cZ_A as $ciudad) {
            echo '<tr>';
            echo "<td>$ciudad</td>";  
            echo '</tr>';
        }
        ?>
    </table>
    
</body>
</html>