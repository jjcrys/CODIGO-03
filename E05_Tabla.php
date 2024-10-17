<?php
if (isset($_GET['numero'])) {
    $numero = $_GET['numero'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tabla de multiplicar</title>
</head>

<body>
    <table border="1" cellpadding="5" cellspacing="0">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo '<tr>';
            echo "<td>$numero</td>";
            echo "<td>  *   </td>";
            echo "<td>$i</td>";
            echo "<td>  =   </td>";
            echo '<td>' . $numero * $i . '</td>';
            echo '</tr>';
        }
        ?>
    </table>

</body>

</html>