<?php
// Constantes Magicas
// estas constates en realidad NO SON CONSTANTES por que cambian su valor 

// EXISTEN 9 constantes que cambian dependiendo de donde se utilizan
// no distigen entre mayusculas y minusculas
// https://www.php.net/manual/en/language.constants.magic.php


// en general estas constantes cambian dependiendo del lugar en donde se ocupa 
// ej __LINE__
echo 'Esto es la línea ' . __LINE__ . ' de mi script.';     // ... 12 de mi script
echo "\n";
echo 'Esto es la línea ' . __LINE__ . ' de mi script.';     // ... 14 de mi script


// Otros ejemplos
echo 'Este script se encuentra en el archivo: ' . __FILE__;         // C:\laragon\www\PHP\8Constants\tempCodeRunnerFile.php
echo "\n";
echo 'Este script se encuentra en el directorio: ' . __DIR__;       // C:\laragon\www\PHP\8Constants




// EJ usand todos algunas constantes
namespace MiEspacioDeNombres {
    class MiClase {
        use MiTrait;

        public function miMetodo() {
            echo 'Nombre de la función: ' . __FUNCTION__ . "\n";
            echo 'Nombre de la clase: ' . __CLASS__ . "\n";
            echo 'Nombre del método de la clase: ' . __METHOD__ . "\n";
            echo 'Nombre del espacio de nombres: ' . __NAMESPACE__ . "\n";
        }
    }

    trait MiTrait {
        public function miMetodoEnTrait() {
            echo 'Estoy dentro del trait: ' . __TRAIT__ . "\n";
        }
    }

    $obj = new MiClase();
    $obj->miMetodo();
    $obj->miMetodoEnTrait();
}
// En este ejemplo:

// __FUNCTION__ devuelve el nombre de la función en la que se usa. “miMetodo”.
// __CLASS__ devuelve el nombre de la clase en la que se usa. imprimirá.“MiClase”.
// __METHOD__ devuelve el nombre del método de la clase en la que se usa.“MiClase::miMetodo”.
// __NAMESPACE__ devuelve el nombre del espacio de nombres en el que se usa.“MiEspacioDeNombres”.
// __TRAIT__ devuelve el nombre del trait en el que se usa.“MiEspacioDeNombres\MiTrait”.

?>