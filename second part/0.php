<?php
echo "Notas de aprendizaje"
?>


<html>
    <h1>POO</h1>
        <p>
        utiliza objetos y sus interacciones para diseñar aplicaciones y programas de software.
        nos ayuda en la mejora del mismo

        Los datos se llaman -> Atributos
        Las funcionalidades se llaman -> Metodos
        </p>

    <h1>Abstraccion</h1>
        <p>
            aislar un elemento de su contexto o del resto de elementos que lo rodean (acompañana)
            quitar cuanquier elmeneto o atributos de un sistema paara asi poder enforcarnos a 
            elemento mas importantes

            hacer del problema algo mas pequeño para consentrase solo en ese problema de ese momento
            para despues con la resolucion del problema menor resolver el problema mayor

            ej: esto se divide por capas las de abstracion las cuales se van haciendo de una capa mas
                grande o mayor otras mas pequeña, la cual solo tendra informacion y/o reolucion de un
                problema en especifico

                cada capa que esta arriba de otra depende de ella para funcionar, es decir la cpa de arriba
                pedende de las de abajo
                exepto el problema de demaciadas capas de abstraccion, es decir con tantas capas(10) la 
                capa 2 nos podria resolver el problema de la decima capa

                Cuidado de tener demaciadas capas de abstraccion, pero si tener que tener las necesarias 
                para resolver el problema 


            ej: cuando tenemos dos variables con el mismo nombre pero en diferentes contexto esto 
                quiere decir que cada uno vive en su contexto au que tengan el mismo nombre
        </p>

    <h1>Recurividad</h1>
        <p>Es cuando una funcion se llama asi misma de menara
            Directa: -> cuando se llama desde la misma funcion desde el mismo codigo
                        ej: ele ejercicio de factorial y fibonacci
            Indirecta -> cuando se llama desde otra funcion, pero a ella misma
                        ej: tenga una funcion que llama a otra funcion y esta a su vez llama
                        a la primera funcion 
                        POCO COMUN PERO PUEDE PASAR
        </p>

        <h1>Polimorfismo</h1>
            <p>
                Cuando tenemos una calse padre y una clase hija donde esta clase hija hereda todo
                los atributos de la la clase padre pero en su mentodo cambia y nos regresa otro dato
                y/o resultado diferentes pero con los mismo atributos 

                ej -> los cubos de Minecraft todos comparten la misma clase padre, todos tiene un tamaño
                    forma, textura, color, etc. pero en su clase hija este modifica el metodo en cada uno 
                    es los cubos que se rompen y lo que te regresan carbo, hierro, oro, diamnate, etc, y 
                    estometodo que cambia en cada clase hija se llama Polimorfismo
            </p>

        <h1>Herencia</h1>
            <p>
                EL arte de reutizar codigo

                Lo que un Padre le hereda a su hija
                ej -> con un mismo plano puedes crear varios diseños como los diferetes picos de 
                    Minecraft que con el mismo plano se crear los diferentes pichos de madera, piedra
                    hierro, oro, diamnate, nederita.
            </p>
        
        
        <h1>Encapsulamiento</h1>
            <p>
            Aislar las variables al acceso de las demas clases o permitirlo segun sea el caso

                public      -> todas las clases tienen acceso incluso las clases fuera del paquete
                protected   -> sola las clases de paquete tienen acceso
                private     -> solo la clase tiene acceso

                Setters -> utilizados para intruducir (se agrega una variable)
                    Estos son nuevos metodos que principalmnete van en la clase padre con la
                    cual despues nos ayudaran a ingresar el dato que deceemos en  clase hija 
                Getters -> utilizados para obtener (devulve la variable "return")
                    Para mostrar el atributo en otra clase
                    
                    <p>Ejemplo</p>
                    <?php
                        class Persona1{
                            private $name;

                            // Metodo Set
                            public function setName($name){
                                $this -> name = $name;
                            }
                            //Metdod Get
                            public function getName(){
                                return $this -> name;
                            }
                        }


                        // creamos un nuevo objeto de la clase padre
                        $persona = new Persona1;
                        // usamos el set para establecer nombre
                        $persona -> setName("Danielle");
                        // usamos el get para obtener el nombre (imprimir)
                        echo $persona->getName();
                    ?>
            </p>


        <h2>Resumen</h2>
            <p>
                Abstarccion     -> separar los datos de un objeto para crear un "molde" (clases)
                Encapsulamiento -> encapsula metodos o propiedades para que no se puedan alterar o sean
                                    inalcanbles
                Herencia        -> permite crear clase apartir de otras
                Polimorfismo    -> Se utiliza para crear metodos con el mismo nombre pero diferente 
                                    funcionalidad o compartimientos
            </p>
</html>
