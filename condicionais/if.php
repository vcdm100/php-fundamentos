<?php

$a = 11;
$b = 23;

if ($a > $b) {
    echo "Realmente $a (A) é maior do que $b (B). <br>";
} elseif ($b == 20) {
    echo "B é igual 20";
} elseif ($a == 10) {
    echo "A é igual a 10";
} else {
    echo "Nenhuma condição é verdadeira";
}

/* RESULTADO - SAÍDA

$a = 30;
$b = 20;
Realmente 30 (A) é maior do que 20 (B).

$a = 10;
$b = 20;
B é igual 20

$a = 10;
$b = 23;
A é igual a 10

$a = 11;
$b = 23;
Nenhuma condição é verdadeira

*/