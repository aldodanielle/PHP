<?php
//          Operador bit a bit

// Estos permiten la evaluacion y manipulacion de BIT especificos denro de un integer
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




// +++++++++++++++++++++     Desplazamiento de bits sobre integers     +++++++++++++++++++++
/*
 * Aquí están los ejemplos.
 */

echo "\n--- DESPLAZAMIENTO DE BITS A LA DERECHA SOBRE ENTEROS POSITIVOS ---\n";

$val = 4;
$places = 1;
$res = $val >> $places;
p($res, $val, '>>', $places, 'copia del bit de signo desplazado hacia el lado izquierdo');

$val = 4;
$places = 2;
$res = $val >> $places;
p($res, $val, '>>', $places);

$val = 4;
$places = 3;
$res = $val >> $places;
p($res, $val, '>>', $places, 'bits desplazados fuera del lado derecho');

$val = 4;
$places = 4;
$res = $val >> $places;
p($res, $val, '>>', $places, 'mismo resultado que arriba; no se puede desplazar más allá del 0');


echo "\n--- DESPLAZAMIENTO DE BITS A LA DERECHA SOBRE ENTEROS NEGATIVOS ---\n";

$val = -4;
$places = 1;
$res = $val >> $places;
p($res, $val, '>>', $places, 'copia del bit de signo desplazado al lado izquierdo');

$val = -4;
$places = 2;
$res = $val >> $places;
p($res, $val, '>>', $places, 'bits desplazados fuera del lado derecho');

$val = -4;
$places = 3;
$res = $val >> $places;
p($res, $val, '>>', $places, 'mismo resultado que arriba; no se puede desplazar más allá del -1');


echo "\n--- DESPLAZAMIENTO DE BITS A LA IZQUIERDA SOBRE ENTEROS POSITIVOS ---\n";

$val = 4;
$places = 1;
$res = $val << $places;
p($res, $val, '<<', $places, 'ceros rellenan en el lado derecho');

$val = 4;
$places = (PHP_INT_SIZE * 8) - 4;
$res = $val << $places;
p($res, $val, '<<', $places);

$val = 4;
$places = (PHP_INT_SIZE * 8) - 3;
$res = $val << $places;
p($res, $val, '<<', $places, 'bit de signo resulta desplazado fuera');

$val = 4;
$places = (PHP_INT_SIZE * 8) - 2;
$res = $val << $places;
p($res, $val, '<<', $places, 'bit de signo desplazado fuera del lado izquierdo');


echo "\n--- DESPLAZAMIENTO DE BITS A LA IZQUIERDA SOBRE ENTEROS NEGATIVOS ---\n";

$val = -4;
$places = 1;
$res = $val << $places;
p($res, $val, '<<', $places, 'ceros rellenan en el lado derecho');

$val = -4;
$places = (PHP_INT_SIZE * 8) - 3;
$res = $val << $places;
p($res, $val, '<<', $places);

$val = -4;
$places = (PHP_INT_SIZE * 8) - 2;
$res = $val << $places;
p($res, $val, '<<', $places, 'bits desplazados fuera del lado izquierdo, incluyendo el bit de signo');


/*
 * Ignore this bottom section,
 * it is just formatting to make output clearer.
 */

function p($res, $val, $op, $places, $note = '') {
    $format = '%0' . (PHP_INT_SIZE * 8) . "b\n";

    printf("Expression: %d = %d %s %d\n", $res, $val, $op, $places);

    echo " Decimal:\n";
    printf("  val=%d\n", $val);
    printf("  res=%d\n", $res);

    echo " Binary:\n";
    printf('  val=' . $format, $val);
    printf('  res=' . $format, $res);

    if ($note) {
        echo " NOTE: $note\n";
    }

    echo "\n";
}
?> 