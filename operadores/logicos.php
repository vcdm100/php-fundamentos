<?php

$a = true;
$b = false;

$c = true;
$d = true;

$e = false;
$f = false;

$g = false;
$h = true;

// && ou and (E lógico) O operador && retorna verdadeiro (true) se ambas as expressões condicionais à esquerda e à direita são verdadeiras (true).
var_dump($a && $b);
echo "<br>";
var_dump($a and $b);
echo "<br>";
var_dump($c && $d);
echo "<br>";
var_dump($e && $f);
echo "<br>";
var_dump($g && $h);
echo "<br>";

// || ou or (OU lógico) O operador || retorna verdadeiro (true) se pelo menos uma das expressões condicionais à esquerda ou à direita para verdadeiro (true).
echo "<br>";
var_dump($a || $b);
echo "<br>";
var_dump($a or $b);
echo "<br>";
var_dump($c or $d);
echo "<br>";
var_dump($e or $f);
echo "<br>";
var_dump($g or $h);
echo "<br>";

// xor (OU exclusivo) O operador xor retorna verdadeiro (true) se exatamente uma das expressões condicionais à esquerda ou à direita para verdadeiro (true), mas não ambas.
echo "<br>";
var_dump($a xor $b);
echo "<br>";
var_dump($c xor $d);
echo "<br>";
var_dump($e xor $f);
echo "<br>";
var_dump($g xor $h);
echo "<br>";

// ! (Negação) O operador ! inverte o valor da expressão. Ou seja, se a expressão é verdadeira (true), a negação !a falsa (false) e vice-versa.
echo "<br>";
var_dump(!$a);
echo "<br>";
var_dump(!$b);

/* RESULTADO - SAÍDA

    bool(false)
    bool(false)
    bool(true)
    bool(false)
    bool(false)

    bool(true)
    bool(true)
    bool(true)
    bool(false)
    bool(true)

    bool(true)
    bool(false)
    bool(false)
    bool(true)

    bool(false)
    bool(true)

*/