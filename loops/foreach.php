<?php
//Estrutura de repetição - Laço foreach

$numeros = [2, 3, 5, 7, 9, 10];

foreach ($numeros as $chave => $valor) {
    echo "Chave $chave --- valor : $valor <br>";
}

echo "<br>";

foreach ($numeros as $valor) {
    echo "Valor : {$valor} <br>";
}

/* RESULTADO - SAÍDA

    Chave 0 --- valor : 2
    Chave 1 --- valor : 3
    Chave 2 --- valor : 5
    Chave 3 --- valor : 7
    Chave 4 --- valor : 9
    Chave 5 --- valor : 10

    Valor : 2
    Valor : 3
    Valor : 5
    Valor : 7
    Valor : 9
    Valor : 10

*/