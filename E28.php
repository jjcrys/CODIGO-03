<?php
$a= 3;
$cantidad = $a;
echo ($a == 0 ? 'No hay prductos en la cesta': ($a == 1 ? 'Hay un producto en la cesta': 'Hay '.$cantidad.' productos en la cesta'));
?>