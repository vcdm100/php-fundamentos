<?php

$a = 5;

switch ($a) {
    case 0:
        echo "Tenho o valor 0";
        break;
    case 1:
        echo "Tenho o valor 1";
        break;
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Tenho um valor de 2 a 5";
        break;
    default:
        echo "Tenho outro valor";
        break;
}

echo "<br>"; 

$curso = 'PHP';

switch ($curso) {
    case 'PHP':
        echo "Curso de php";
        break;
    case 'Java':
        echo "Curso de java";
    default:
        echo "Outro curso";
        break;
}

/* RESULTADO - SAÍDA

$a = 0;
Tenho o valor 0

$a = 3;
Tenho um valor de 2 a 5

$a = 25;
Tenho outro valor

$curso = 'PHP';
Curso de php

$curso = 'C#';
Outro curso

*/