<?php

$numero = 28;

if ($numero % 2 == 1 /*ímpar == 1*/) {
    echo "Estranho1";
} else {
    if ($numero < 10) {
        echo "Não é estranho1";
    } elseif ($numero >= 10 && $numero <= 20) {
        echo "Estranho2";
    } else {
        echo "Não é estanho2";
    }
}

/* RESULTADO - SAÍDA

$numero = 1;
    Estranho1

$numero = 4;
    Não é estranho1

$numero = 10;
    Estranho2

$numero = 11;
    Estranho1

$numero = 12;
    Estranho2

$numero = 25;
    Estranho1
    
$numero = 28;
    Não é estanho2
    
*/