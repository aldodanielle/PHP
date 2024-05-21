<?php
//          Operador bit a bit

// Estos permiten la evaluacion y manipulacion de BIT especificos
// $a & $b  ->  and (y)
// $a | $b  ->  Or (o inclusivo)
// $a ^ $b  ->  Xor (o exclusivo)
// ~ $a     ->  Not(no)
// $a << $b ->  Shift left (desplazamiento a izquierda)
// $a >> $b ->  Shift right (desplazamiento a derecha)

// el uso de () es mejor en estos casos por que primero evalua el bit a bit y luego la equivalencia
// ej
$a = 4;
$b = 4;
echo $a & $b == true;    // primero hace la equivalencia si son iguales y luego el bit a bit
echo ($a & $b) == true;  // primero el bit a bit y luego la equivalencia 



// Ej de AND, OR, XOR 
// ---------------------------------------------------------------------------------
// la siguiente lineas son para que nos de un formato definido
$format = '(%1$2d = %1$04b) = (%2$2d = %2$04b)'
        . ' %3$s (%4$2d = %4$04b)' . "\n";
echo <<<EOH
    ---------     ---------  -- ---------
    resultado     valor      op prueba
    ---------     ---------  -- ---------
EOH;
// ---------------------------------------------------------------------------------


$values = array(1, 2, 3, 4);
$test = 1 + 4;

echo "\n AND bit a bit \n";
foreach($values as $value){
    $result = $value & $test;
    printf($format, $result, $value, '&', $test);
}

echo "\n OR inclusivo bit a bit \n";
foreach($values as $value){
    $result = $value | $test;
    printf($format, $result, $value, '|', $test);
}

echo "\n XOR exclusivo bit a bit \n";
foreach($values as $value){
    $result = $value ^ $test;
    printf($format, $result, $value, '^', $test);
}






// +++++++++++++++++++++     Operacion XOR bit a bit en string     +++++++++++++++++++++
// 00000000
// 12 = 00010010        9 = 00001001
echo 12 ^ 9;    // sale 5

echo "12" ^ "9";        // Sale el caracter de retroceso (ascii 8)
//                         ('1' (ascii 49)) ^ ('9' (ascii 57)) = 8


echo "hallo" ^ "hello"; // sale los valores ascii #0 #4 #0 #0 #0
//                          o lo mismo qie es NULL EOT NULL NULL NULL
//                          'a' ^ '3' = #4

echo 2 ^ "3";   // Resultado = 1
//                  2 ^ ((int)"3") == 1

echo "2" ^ 3;   // Resultado = 1
//                  ((int)"2") ^ 3 == 1

?> 