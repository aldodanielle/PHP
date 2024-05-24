<?php 
//          ---+++++     Operador de control de Ejecucion     +++++---
// ``
// no son mas que las comillas invertidas
$output = `ls -al`;
echo "<pre>$output</pre>";


$credito = '20k';
$saldo = '10k';
echo `tu credito es {$credito} y tienes de saldo {$saldo}`;


$host = 'www.google.com';
echo `ping -n 3 {$host}`;
?>