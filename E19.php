<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ejercicio 19</title>
</head>
<body align="center">
    <h1>Introduzca sus credenciales:</h1>
    
    <form action="" method="post">
        <label for="usuario">USUARIO: &nbsp;</label>
        <input type="text" name="usuario">
        <br>
        <br>
        <label for="passw">CONTRASEÑA: &nbsp;</label>
        <input type="password" name="passw">
        <br>
        <br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>

<?php
$usuario = 'juanjo';
$password = '123456';
if (isset($_POST['usuario']) && isset($_POST['passw'])) {
    if ($usuario == $_POST['usuario'] && $password == $_POST['passw']) {
        echo '<br> BIENVENIDO :)';
    }else {
        echo '<br> Error: Intentelo de nuevo';
    }
}
?>