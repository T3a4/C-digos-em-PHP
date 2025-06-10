<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Estruturas de controle</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Foreach</h1>
    Números pares até dez:
    <?php
        $n = array(2, 4, 6, 8, 10);
        foreach ($n as $i){
            echo $i.", ";
        }
    ?>
</body>
</html>