<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Estruturas de controle</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Do While</h1>
    Números pares até dez:
    <?php
        $i = 2;
        do{
            echo $i.", ";
            $i = $i + 2;
        } while ($i <= 10);
    ?>
</body>
</html>