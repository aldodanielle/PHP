<?php
//          ---+++++     Operador de control de Erorres     +++++---

// PHP cuenta con un soporte de operador de errores "el signo de @"
// cuando se antepone a una expresion en PHP , cualquier mensaje de error pueden ser generado por esa expresion sera ignorado

// algunas funciones para errores 
// set_error_handler    -> https://www.php.net/manual/es/function.set-error-handler.php
// error_repoting       -> https://www.php.net/manual/es/function.error-reporting.php
// este ultimo es para u error mas personalizado



// Ej 
// Error intencional de un archivo 
$php_errormsg = __FILE__;
$my_file = @file ('El archivo no existe') or
        die ("La apertura del archivo a fallado: error '$php_errormsg'");

// esta funciona con cualquier expresion, no solo con funciones 
$key = "valor";
$value = @$cahe[$key];
echo $value;
?>