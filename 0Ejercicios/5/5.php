<?php
echo '<pre>';
// ----+++      la palabras mas larga      +++----
// Crea un programa que encuentre la palabra más larga en una cadena de texto. 
// El programa debe pedir al usuario una cadena de texto y luego imprimir la palabra más larg
echo '<h1> the biggest word </h1>';

function palabrasMasLarga($cadena) {
    $frase = explode(" ", $cadena); // Dividir la cadena en palabras

    // Inicializar la palabra más larga y su longitud
    $palabraMasLarga = "";
    $longitudMasLarga = 0;

    // Recorrer cada palabra en la cadena
    foreach ($frase as $palabra) {
        $palabra = trim($palabra, ".,!?;:");
        
        if (strlen($palabra) > $longitudMasLarga) {
            $palabraMasLarga = $palabra;
            $longitudMasLarga = strlen($palabra);
        }
    }
    return $palabraMasLarga;
}


$frase = 'there is nothing in this world that can hurt you';
echo $frase;
echo '<br>';
echo 'la palabras mas larga es: ' . palabrasMasLarga($frase);