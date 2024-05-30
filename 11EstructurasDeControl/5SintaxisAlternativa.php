<html>
<p>
    ---+++++     Sintaxis Alternativa de Estruras de Control     +++++---
</p>
<p>
    Nota:
        En estas tipos de estructuras se cambia las llaves de apetura por ":" para los casos de 
        if, while, for, foreach y switch                asi mismo la llave de cierre se cambia por 
        endif, endwhile, endfor, endforeach y endswitch respectivamnete
</p>
<!--
esta es usada en archivo con extension de .php pero con informacion y/o contenido de html 
en el front como oir ejemplo:
-->

<?php $a = true ?>
<?php if ($a = true): ?>
    Pedido Realizado
<?php endif ?> 




<!--        Mismo caso en la sentencias de     elseif/else if     -->

<?php
echo "Ya ordeno? \n";
$a = '5';
if ($a == true):
    echo " Si ya ordene \n";
    echo " -> espere un momento para recibir su orden";
elseif ($a == false):
    echo " NO todavia no \n";
    echo " -> que va a llevar";
else:
    echo "Espere un momento todavia no decido";
endif;
?>


<!--        Los espacios en blanco par SWITCH los marca error     -->
<?php switch ($yes): ?>
<?php case 1: ?>
    ...
<?php endswitch?>   <!--    error -->
</html>