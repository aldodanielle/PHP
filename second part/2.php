<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Just PHP</title>
</head>
<body>
    <p>Esto Escrito por el HTML</p>
    <?php 
    //Comentario
    $salto = '<br>';
    $varCondicion = false;
    $variable = 'interprete desde php';
    echo $variable;
    echo $salto;
    ?>

    <!-- Con condicion -->
    <?php if($varCondicion == true): ?>
        es Verdad
    <?php else: ?>
        es Falso
    <?php endif; ?>
    
    <?php
    #Comentario
    $newVar = 3;
    echo $salto . $newVar*2;
    ?>
</body>
</html>