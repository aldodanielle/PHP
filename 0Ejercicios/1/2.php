<from method = "post" actio = "?id=5">
    <p>
        <label>Numero uno:</label>
        <input type = "text" name = "numero_uno" value = "<?php echo $_REQUEST["numero_uno"] ?? null ?>">
    </p>
    <p>
        <label>Numero dos:</label>
        <input type = "text" name = "numero_dos" value = "<?php echo $_REQUEST["numero_dos"] ?? null ?>">
    </p>
    <p>
        <code>
            <?php
                function sumar(int $a, int $b)
                {
                    return $a + $b;
                }
                //if($_REQUEST)
                if($_POST && $_GET)
                {
                    $numero_uno = $_REQUEST["numero_uno"];
                    $numero_dos = $_REQUEST["numero_dos"];
                    echo sumar($numero_uno, $numero_dos);
                    print_r (sumar($numero_uno, $numero_dos));
                }
            ?>
        </code>
        <input type = "submit" value = "Sumar">
    </p>

</from>