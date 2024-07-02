<!DOCTYPE html>
<html>
<head>
    <title>Tablas de multiplicar</title>
</head>
<body>
    <?php
    if(!isset($_REQUEST["numero"])){
        echo "<from action = 'index.php' method = 'get'>
        Introduce un numero:
        <input type='text' name = 'numero'>
        <br>
        <input type='submit'>
        </form>";
    }else{
        $n = $_REQUEST["numero"];
        echo "<table border = '1'>";
        echo "<tr><td colspan = '5'> Tabla de multiplicar del numero $n</td><tr>";
        echo "<tr>";
        for ($i = 1; $i <= 25; $i++){
            if(($i-1) % 5 ==  0) echo "</tr><tr>";
            echo "<td>$n x $i = " . $n * $i . "</td>"; 
        }
        echo "<tr>";
        echo "</table>";
    }
    ?> 
</body>
</html>