<?php
//Operadores de comparação

$a = 10;
$b = 20;

var_dump($a == $b);
echo "<br>";
var_dump($a != $b);
echo "<br>";
var_dump($a <> $b);
echo "<br>";
var_dump($a >= $b);
echo "<br>";
var_dump($a <= $b);
echo "<br>";
var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
echo "<br>";

$c = 10;
$d = "10";

echo "<br>";
var_dump($c == $d); // (2 =) Verificando o valor 10 é ao valor 10 no dentro, então ele retorna verdadeiro.

echo "<br>";
var_dump($c === $d); // (3 =) Verificando os valores são iguais, mas os tipos são diferentes, então ele retorna falso.

echo "<br>";
var_dump($c !== $d); // (1 ! e 2 =) Verificando se o valor é diferente inclusive se o tipo deles é diferentes, então ele retorna verdadeiro.

/* RESULTADO - SAÍDA

    bool(false)
    bool(true)
    bool(true)
    bool(false)
    bool(true)
    bool(false)
    bool(true)

    bool(true)
    bool(false)
    bool(true)

*/