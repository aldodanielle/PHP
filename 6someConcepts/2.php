<h1>Never</h1>
    <p>
        Es un tipo de solo retorno que indica que la funcion no termina
        Es to Significa que llama a exit(), lanza una excepcion o es un buble infinito 
        Por lo tanto no puede ser parte de una declaracion de tipo union.
        Disponible apartir de PHP 8.1.0
        
        Never is, in type theory parlance (never es, en lenguaje de teoría de tipos, el tipo inferior.).
        Esto significa que es el subtipo de cualquier 
        otro tipo y puede reemplazar cualquier otro tipo de retorno duarnte la herenci
    </p>
    <?php
    function sayHello(string $name): never
    {
        echo "Hello, $name";
        exit(); // if we comment this line, php throws fatal error
    }
    sayHello("Danielle"); // result: "Hello, Danielle"
    ?>