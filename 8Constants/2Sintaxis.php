<?php
// contamos con 2 formas de usarla:
    // 1 parabra clave -> const
    // 2 con la funcion -> define

// Ej 1 -> definicion de constantes
define('CONSTANT', 'Hello world');
echo CONSTANT;      // Hello world
echo constant;      // Emite error



// Ej 2 -> usando la palabra clave const
// Simple scalar value
const CONSTANT = 'Hello world';
echo CONSTANT;          // Hello world

// Scalar expression
const AOTHER_COSNT = CONSTANT . ' Goodbye world';
echo AOTHER_COSNT;      // Hello world Goodbye world

const Animals = array('dog', 'cat', 'bird');
echo Animals[2];        // bird


// Const array 
define( 'ANIMALS', array(
    'dog',
    'cat',
    'bird',
));
echo ANIMALS[2];    // bird
?>