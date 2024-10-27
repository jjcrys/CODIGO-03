<?php
function cadenaCaractEspecial($longitud, $caracter = '')
{
    $base = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $cadena = '';

    for ($i = 0; $i < $longitud; $i++) {
        $cadena .= $base[rand(0, strlen($base) - 1)];
    }

    if (!($caracter == '')) {
        //En lugar de remplazar solo lo concatene
        $cadena.= $caracter;
    }

    return $cadena;
}

echo cadenaCaractEspecial(10, '~');
?>