<?php

//Declarando Arrays

$linguagens = ["PHP", "C#", "Java"];

echo $linguagens[0];
echo "<br>";

// ou

$linguagens2 = array("PHP", "C#", "Java");

echo "<br>";
echo $linguagens2[2];
echo "<br>";

//===========================================================
// Inserção de novos itens em arrays

$linguagens[] = "Python";

echo "<br>";
var_dump($linguagens);
echo "<br>";

//===========================================================
// Arrays Associativos

$curso = ["Curso de PHP Fundamentos", 8.2, 40, true];

echo "<br>";
echo $curso[1];
echo "<br>";

// ou

$curso = [
    "nome_curso" => "Curso de PHP Fundamentos",
    "versao_ferramenta" => 8.2,
    "carga_horaria" => 40,
    "status" => true
];

echo "<br>";
echo $curso["nome_curso"];
echo "<br>";
echo $curso["versao_ferramenta"];
echo "<br>";
echo $curso["carga_horaria"];
echo "<br>";
echo $curso["status"];
echo "<br>";

//===========================================================
// Inserção de novos itens em arrays

$curso["pre-requisito"] = "logica de programacao";

echo "<br>";
var_dump($curso);
echo "<br>";

//===========================================================
// Arrays Multidimensionais

$numeros = [
    [1,2,3,4],
    [5,6,7,8,9],
    [10,11]
];

echo"<br>";
echo $numeros[2][1]; //---> [linha]*[coluna]
echo"<br>";
echo $numeros[0][0];
echo"<br>";
echo $numeros[1][3];
echo"<br>";

//===========================================================
// Arrays Multidimensionais

$cursos = [
    "php" => [
        "nome_curso" => "Curso de PHP Fundamentos",
        "versao_ferramenta" => 8.2,
        "carga_horaria" => 40,
        "status" => true
    ],
    "java" => [
        "nome_curso" => "Curso de JAVA Fundamentos",
        "versao_ferramenta" => 17.0,
        "carga_horaria" => 30,
        "status" => false
    ],
];

echo"<br>";
echo $cursos["java"]["nome_curso"];
echo"<br>";

//===========================================================
// Inserção de novos itens em arrays

$cursos["php"]["pre-requisito"] = "logica de programacao";

echo"<br>";
echo $cursos["php"]["pre-requisito"];



/* RESULTADO - SAÍDA

    PHP

    Java

    array(4) { [0]=> string(3) "PHP" [1]=> string(2) "C#" [2]=> string(4) "Java" [3]=> string(6) "Python" }

    8.2

    Curso de PHP Fundamentos
    8.2
    40
    1

    array(5) { ["nome_curso"]=> string(24) "Curso de PHP Fundamentos" ["versao_ferramenta"]=> float(8.2) ["carga_horaria"]=> int(40) ["status"]=> bool(true) ["pre-requisito"]=> string(21) "logica de programacao" }

    11
    1
    8

    Curso de JAVA Fundamentos

    logica de programacao

*/
