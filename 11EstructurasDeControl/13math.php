<?php
//          ---+++++     Match     +++++---

// ramifica la evaluacion basada en un acomprobacion de identidad 
// compara multiples alternativas tiene que se extrictamente igual es decir es sencible a mayusculas 
// y minusculas en caso de string, asi como decimales y caracteres
// similar al switch, este match es muy parecido al ternario
// disponible apartir de php 8.0.0

// Estructura de una expresion math
$return_value = match(subject_expression){
    single_conditional_expression => return_expression,
    conditional_expression1, contidional_expression2 => return_expression,
};

// Ej basico de uso
$comida = 'pastel';
$valorDevuelto = match($comida){
    'manzaba' => 'Este comida es una manzana',
    'barra' => 'esta comida es una barra',
    'pastel' => 'esta comida es un pastel',     // este se imprime
};
var_dump($valorDevuelto);   // string(24) "esta comida es un pastel"


// Ej uso con de match con operadores de compracion 
$age = 20;
$output = match(true){
    $age < 2 => 'Eres un bebe',
    $age < 10 => 'Eres un niño',
    $age < 18 => 'Eres un adolescente',
    $age >= 18 => 'Eres mayor de edad',
    $age < 40 => 'Eres un adulto joven',
    $age >= 40 => 'Eres un adulto viejo',
};
var_dump($output);  // string(18) "Eres mayor de edad"


// solo se llama a la expresion que coincidan
$result = match ($x) {
    foo() => ...,
    $this->bar() => ...,    // bar() no se llama si foo() === $x
    $this->baz => beep(),   // beep() no se llama a menos que $x === $this->baz
    // etc.
};


// tambien tiene el uso como OR Logico
$result = match ($x) {
    // Este brazo de match:
    $a, $b, $c => 5,
    // es equivalente a 
    $a => 5,
    $b => 5,
    $c => 5,
};


// Ej la opcion de default
$valor = '3';
$resultado = match ($valor) {
    1 => 'uno',
    2 => 'dos',
    default => 'Valor desconocido', // este se imprime
};
var_dump($resultado);// string(17) "Valor desconocido"



// Ej Expresion para match no controlada 
$valor = '3';
try{
    $result = match ($valor) {
        '1' => 'uno',
        '2' => 'dos',
    };
}catch(UnhandledMatchError $e){
    var_dump('Error: ' . $e -> getMessage());
}

$condition = 5;
try {
    match ($condition) {
        1, 2 => foo(),
        3, 4 => bar(),
    };
} catch (\UnhandledMatchError $e) {
    var_dump($e);
}


// Ejemplo #5 Uso de expresiones match generalizadas para ramificar en rangos de integers
$age = 23;
$result = match (true) {
    $age >= 65 => 'senior',
    $age >= 25 => 'adult',
    $age >= 18 => 'young adult',    // esta linea de imprime
    default => 'kid',
};
var_dump($result);  // string(11) "young adult"



// Ejemplo #6 Uso de expresiones match generalizadas para ramificar el contenido de strings.
$text = 'Bienvenue chez nous';
$result = match (true) {
    str_contains($text, 'Welcome') || str_contains($text, 'Hello') => 'en',
    str_contains($text, 'Bienvenue') || str_contains($text, 'Bonjour') => 'fr',
    str_contains($text, 'Benvenido') || str_contains($text, 'Hola') => 'es',
    // ...
};
var_dump($result);  // string(2) "fr" -> lo deteta como frances
?>