<?php
// Llamadas de retorno o Callbacks 

// Es simplemente una funcion que pasa como argumento a otra funcion
// luego se invoca dentro de la funcion externa para completar 
// algun tipo de rutina o accion


// --------------------------------------------Ejemplo de Funciones en Llamada de retorno
// ejemplo de una funcion de callbacks
function llamadaRetorno(){
    echo 'Soy una llamada de Retorno' . "\n";
}
// ejemplo de metodo de callback
class miClase{
    static function metodoDeLlamadaDeRetorno(){
        echo 'Soy un Metodo de Llamada de retorno' . "\n";
    }
}


// Tipo 1: Llamada de retorno simple
call_user_func('llamadaRetorno');

// Tipo 2: Llamada a un método de clase estático
call_user_func(array('miClase', 'metodoDeLlamadaDeRetorno'));

// Tipo 3: Llamada al método de un objeto
$objeto = new miClase();
call_user_func(array($objeto, 'metodoDeLlamadaDeRetorno'));

// Tipo 4: Llamada a un método de clase estático (A partir de PHP 5.2.3)
call_user_func('miClase::metodoDeLlamadaDeRetorno');

// Tipo 5: Llamada a un método de clase estático relativo (A partir de PHP 5.3.0)
class A{
    public static function llama(){
        echo "Me llama a mi A\n";
    }
}
class B extends A{
    public static function llama(){
        echo "Me llama a mi B";
    }
}

call_user_func(array('B', 'parent::llama'));    // Me llama a mi A



// Tipe 6: Los objetos que implementan __invoke se pueden emplear como retrollamadas (desde PHP 5.3)
class C{
    public function __invoke($nombre){
        echo "Hola $nombre \n";
    }
}

$obj = new C();
call_user_func($obj, 'Danielle');   // Hola Danielle


?>