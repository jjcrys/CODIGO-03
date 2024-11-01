<?php
if ($num == 0) {
    echo 'Tengo todos los objetos';
}else{
    echo 'Me falta';

    if ($num == 1) {
        echo 'un objeto';
    }else{
        echo 'n ';

        if ($num == 2) {
            echo 'un par de ';
        }else{
            if ($num > 2 && $num < 10) {
                echo $num. ' ';
            } else {
                echo 'muchos';
            }
            
        }
        echo 'objetos ';
    }
    echo 'para completar la misión.';
}
?>