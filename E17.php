<?php
//EN EL TEMA APARACE func_get_args() Y ES QUE QUE VOY A USAR, PERO BUSCANDO EN LA WEB HE 
//ENCONTRADO QUE TAMBIEN SE PUEDE USAR ... SPLAT 

function sumaElementos (){
    $argumentos = func_get_args();
    $suma = 0;

    foreach ($argumentos as $argumento) {
        if(is_array($argumento)){
            foreach ($argumento as $valorVec) {
                $suma+= $valorVec;
            }
        }else{
            $suma+= $argumento;
        }
    }
    return $suma;
}
?>