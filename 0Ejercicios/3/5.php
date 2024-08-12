<?php

// ----+++      Convertidor de moneda      +++----

// Crea un script que convierta una cantidad de dinero de una moneda a otra.

$canIngresada = 18.83;
$dolar = 18.83;
$euro = 20.56;
echo '<h1> Convertidor de Moneda</h1>' . '<br>';
echo '<h2> A pesos Mexicamos</h2>' . '<br>';
echo '<h2> Tipo de cambio al 09 de agosto 2024</h2>' . '<br>';
echo '<h4> Dolar = ' . $dolar . ' </h4>' . '<br>';
echo '<h4> Euros = ' . $euro . '</h4>' . '<br>';

echo 'Dame un cantidad: ' . $canIngresada . '<br>';

echo ' Esto equivale en dolares: ' . $canIngresada / $dolar . '<br>';
echo ' Esto equivale en euros: ' . $canIngresada / $euro . '<br>';