<?php
if (isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['edad'])) {
    $datos = array(
        'nombre' => $_POST['nombre'],
        'apellidos' => $_POST['apellidos'],
        'edad' => $_POST['edad'],
        //COMO SOLO PUSE LA OPCIÓN DE SI, EN CASO DE QUE ISSET DE FALSO ME LO GUARDE
        'Mayor' => (isset($_POST['si']) ? true : false)
    );
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Parte 2 ejercicio 15</title>
</head>

<body>
    <table>
        <tr>
            <td align="center" valign="middle">INFORMACIÓN</td>
            <td align="center" valign="middle">DATO</td>
        </tr>
        <?php
        foreach ($datos as $clave => $dato) {
            echo '<tr>';
            echo '<td align="center" valign="middle">' . $clave . '</td>';
            echo '<td align="center" valign="middle">' . $dato . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
</body>

</html>