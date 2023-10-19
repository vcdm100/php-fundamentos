<?php

$escola = "Treinaweb";
$curso = "PHP";

$frase = "Faça o curso de " . $curso . " na escola " . $escola . "!";

echo $frase;
echo "<br>";

// ===================================================================

$string1 = "Faça o curso de $curso na escola $escola!"; // Aspas duplas
$string2 = 'Faça o curso de $curso na escola $escola!'; // Aspas simples

echo $string1;
echo "<br>";
echo $string2;

// ===================================================================

$cursos = ["PHP", "C#", "Java"];

$string3 = "Faça o curso de {$cursos[1]} na escola {$escola}!"; // {}

echo "<br>";
echo $string3;


/* RESULTADO - SAÍDA

    Faça o curso de PHP na escola Treinaweb!
    Faça o curso de PHP na escola Treinaweb!
    Faça o curso de $curso na escola $escola!
    Faça o curso de C# na escola Treinaweb!

*/