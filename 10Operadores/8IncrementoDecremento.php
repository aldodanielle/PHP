<?php
//          ---+++++     Operador de Incremento/Decremento     +++++---

// estes timpo de operador solo afecta a numeros y string
// a los demas operadores no

++$a;       // Pre-incremento   -> Incrementa $a a uno, y luego retorna $a
$a++;       // Post-incremento  -> Retorna $a, y luego incrementa $a a uno
--$b;       // Pre-Decremento   -> Decrementa $b a uno, y luego retorna $b
$b--;       // Post-Decremento  -> Retorna $b, y luego decrementa $b a uno


// Ej
// 
echo "<h3>Post-incremento</h3>";
$a = 5;
echo "Debe ser 5: " . $a++ . "<br /> \n";
echo "Debe ser 6: " . $a . "<br /> \n";


// pimero lo incrementa y conserva el valor que incremneta
echo "<h3>Pre-incremento</h3>";
$b = 5;
echo "Debe ser 6: " . ++$b . "<br /> \n";
echo "Debe ser 6: " . $b . "<br /> \n";


// 
echo "<h3>Post-decremento</h3>";
$c = 5;
echo "Debe ser 5: " . $c-- . "<br /> \n";
echo "Debe ser 4: " . $c . "<br /> \n";


//primero decrementa el valor y conserva el valor que se decrementa
echo "<h3>Post-decremento</h3>";
$d = 5;
echo "Debe ser 4: " . --$d . "<br /> \n";
echo "Debe ser 4: " . $d . "<br /> \n";



//          ---+++++     Sobre variables de caracteres     +++++---
echo '==LETRAS==' . PHP_EOL;
// imprime la secuenaci es decir X, Y, Z, AA, AB, AC... y lo mismo con las palabras solo cambia la ultima letra eje hola, holb, holc, hold,...
$s = 'W';
for ($n = 0; $n < 6; $n++){
    echo ++$s . PHP_EOL;
}

// comportamiento diferente con digito 
echo '==Digitos==' . PHP_EOL;
// solo admite un digito numerico por consecuencia al llegar a A9 pasara a B0 y lo mismo hasta llegar a B9, C0
$d = 'A8';
for($n = 0; $n < 6; $n++){
    echo ++$d . PHP_EOL;
}

// admite 2 digitos numericos por lo que imprimira A09, A10, A11...
$d = 'A08';
for($n = 0; $n < 6; $n++){
    echo ++$d . PHP_EOL;
}
?>