<?php
//              Expresiones 
// son los bloque de construccion mas importantes de PHP
// en PHP casi todo lo que se escribe es una expresion
// la manera mas simple y acertada es definir lo que es una expresion como
//      cualquier cosa que tine un valor



############################# PHP es un lenguaje orientado a EXPRESIONES #############################


// ejemplos basico
$a = 5;     // Ej 1
$b = $a;    // Ej 2

echo $a;

// Ej mas complejo
function num(){         // ej 1
    return 1.2;         // se puede asignar cualquier tipo de dato
}

echo num();

$c = num();             // ej 2
echo $c;


// todos son los mismo y son expresiones 
$z = 8;
$y = ($z =8);
$y = $z = 8;



// otro ejemplo
// el pre- y pos-icremento y decremento

// pre-incremento
$boleto = 43;
if ($boleto == 44){
    echo 'GANASTE';
}else{
    echo 'el siguiente numero es?';
    echo ++$boleto;
}


function contar() {
    static $contador = 0;
    echo ++$contador;
}
contar();   // 1
contar();   // 2

?>