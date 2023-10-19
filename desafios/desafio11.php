<?php

//Funções

$numero = 5;

function fatorial ($numero) {

    if ($numero == 0) {
        return "1";
    }

    $fatorial = $numero;
    while($numero > 1) {
        $numero--;
        $fatorial = $fatorial * $numero;
    }

    return $fatorial;

}

print(fatorial($numero));

/* RESULTADO - SAÍDA

    5! = 5 x 4 x 3 x 2 x 1 = 120

    n! = n x (n - 1) x (n - 2) x (n - 3) .... 

*/