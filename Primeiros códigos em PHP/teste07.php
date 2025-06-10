<html>
<head>
    <title>Funções</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Funções</h1>
    <?php
        function soma($i, $j){
            $k = $i + $j;
            return $k;
        }
        $res = soma(4,5);
        echo "O resultado é".$res;
    ?>
</body>
</html>