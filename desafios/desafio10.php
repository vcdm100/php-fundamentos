<?php
//Estrutura de repeitção

$palavras = [
    "PHP",
    "Java",
    "C#",
    "Python",
    "Javascript"
];

foreach($palavras as $palavra) {
    echo $palavra . "<br>";
    echo PHP_EOL;
}

/* RESULTADO - SAÍDA

    PHP
    Java
    C#
    Python
    Javascript

*/