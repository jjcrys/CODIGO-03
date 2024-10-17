<?php
$letras = array();
$clasificacion= array(
    'M' => 0,
    'F' => 0
);

for ($i=0; $i < 100; $i++) { 
    $letras[$i]= rand(0,1) ? 'M' : 'F';
}

for ($i=0; $i < count($letras); $i++) {
    $letras[$i] == 'M' ? $clasificacion['M'] += 1 : $clasificacion['F'] += 1;
}

print_r($clasificacion);
?>