<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 26</title>
</head>
<body>
    <form action="" method="post">
        <label for="productos">ELIJA DE LA LISTA PRODUCTOS</label>
        <br>
        <select name="productos[]" id="productos" multiple="true">
            <option value="" disabled selected>Productos...</option>
            <option value="Laptop">Laptop</option>
            <option value="Smartphone">Smartphone</option>
            <option value="Tablet">Tablet</option>
            <option value="Auriculares">Auriculares</option>
            <option value="Teclado">Teclado</option>
            <option value="Mouse">Mouse</option>
            <option value="Monitor">Monitor</option>
            <option value="Impresora">Impresora</option>
            <option value="Cámara">Cámara</option>
            <option value="Altavoces">Altavoces</option>
        </select>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php
if (isset($_POST['productos'])) {
    $p= $_POST['productos'];

    sort($p);
    echo '<br>';
    echo '<p>Productos seleccionados:</p>';
    echo '<ul>';
    foreach ($p as $producto) {
        echo "<li>$producto</li>";
    }
    echo '</ul>';

    echo count($p) > 0 ? 'Ha seleccionado: '.count($p): ""; 
}else{
    echo "No ha seleccionado nada";
}
?>