<?php
//          ---+++++     Operadores para string     +++++---

// contamos con 2 operadores
// Concatenacion ('.')
// Sobre concatenacion ('.=') para cuando no queremos perder la informacion al sobreescribir una variable


$name = " Danielle ";
$lastname = $name . " Lara ";
echo $lastname;         // Danielle Lara

$fullname = " Danielle";
$fullname .= " Lara";    
echo $fullname;         // Danielle Lara
?>