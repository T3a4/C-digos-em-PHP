<?php

    // Declaração de variável
    $nome = "Maria";

    // Concatenação e saída de dados
    echo "Olá," . $nome . "!<br>";
    echo "Bem-vindo à aula de PHP!<br><br>";

    print("Esse é um exemplo de saída usando print.<br><br>");

    // Condicional if
    $idade = 20;
    if ($idade >= 18) {
        echo "Você é maior de idade.<br>";
    } else {
        echo "Você é menor de idade.<br>";
    }

    // Laço for
    echo "<br>Contagem com for:<br>";
    for ($i = 1; $i <= 5; $i++) {
        echo "Número: $i<br>";
    }

    // Laço while
    echo "<br>Contagem com while:<br>";
    $x = 1;
    while ($x <= 3) {
        echo "Valor de x: $x<br>";
        $x++;
    }

    // Array
    $cores = array("vermelho", "azul"; "verde");
    echo "<br>Cores favoritas:<br>";
    foreach ($cores as $cor) {
        echo $cor . "<br>";
    }

    // Função
    function saudacao() {
        echo "<br>Olá! Essa é uma função em PHP.<br>";
    }

    // Chamada da função
    saudacao();
?>