<?php
//EN EL TEMA APARACE func_get_args() Y ES QUE QUE VOY A USAR, PERO BUSCANDO EN LA WEB HE 
//ENCONTRADO QUE TAMBIEN SE PUEDE USAR ... SPLAT 

function sumaElementos (){
    $argumentos = func_get_args();
    $suma = 0;

    //ME falto comprobar si eran enteros y tambien poner que haya un argumento por lo menos 
    foreach ($argumentos as $argumento) {
        if(is_array($argumento)){
            foreach ($argumento as $valorVec) {
                if (is_int($valorVec)) {
                    $suma+= $valorVec;
                }
            }
        }else if(is_int($argumento)){
            $suma+= $argumento;
        }
    }
    return $suma;
}
?>