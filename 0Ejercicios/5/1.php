<?php
echo '<pre>';
// ----+++      Area y perimentro del rectangulo      +++----
// 
echo '<h1> Area y perimetro del rectangulo </h1>';

function areaRectangulo($a, $b){
    return $a * $b;
}
function perimetroRectagulo($a, $b){
    return ($a + $b) * 2;
}

$a = 5;
$b = 8;

echo 'Tenemos una base de: "' . $b . '" con una altura de: "' . $a . '" <br>';
echo 'Por lo tanto: <br>';
echo '- su area es: "' . areaRectangulo($a, $b) . '" <br>';
echo '- su perimetro es: "' . perimetroRectagulo($a, $b) . '" <br>';