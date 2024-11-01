<?php
function sumaVectores($vector1, $vector2){
    $resultado = 0;
    $sumas = array();
    if (count($vector1) == count($vector2)) {
        for ($i = 0; $i < count($vector1); $i++) {
            $sumas[] = $vector1[$i] + $vector2[$i];
        }
        $resultado = $sumas;
    } else {
        $resultado = false;
    }
    return $resultado;
}

$vec1= [1,2,3];
$vec2= [4,5];

if (!(sumaVectores($vec1, $vec2))) {
    echo 'ERROR: Los Vectores no son iguales';
}else{
    print_r(sumaVectores($vec1, $vec2));
}

?>
