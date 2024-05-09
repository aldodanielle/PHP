<?php 
// Objeto clasico 
// simbolo -> lo utilizamo para  referirse a un metodo o objeto
// 
class frutas{

    function apple(){
        echo 'I am apple';
    }
}

$nuevaFruta = new frutas;
$nuevaFruta -> apple();


// otra ejemplo 
// el simbolo "->" hace refrencia a un objeto
class auto{
    function encender(){
        echo 'Auto encendido' . "\n";
    }
    function apagar(){
        echo 'Auto apagado' . "\n";
    }
}

$objetoAuto = new auto;
$objetoAuto -> encender();
$objetoAuto -> apagar();
?>