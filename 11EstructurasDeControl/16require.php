<?php
//          ---+++++     require     +++++---

// es identico a include excepto que en caso de fallo producira un error fatl de nivel E_COMPILE_ERROR
// en otras palabras este detiene el scrip 
// mientrasque include solo emite una advertencia E_WARNING lo cual permite continuar con el scrip

require('somefile.php');
require 'login.php';
// una forma mas
try {
    require(__DIR__ . '/something_that_does_not_exist');
} catch (\Throwable $e) {
    echo "This was caught: " . $e->getMessage();
}
echo " End of script.";
?>