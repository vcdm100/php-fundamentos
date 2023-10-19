<?php
//Estrutura de repetição - Laço foreach 2

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
    "C#" => [
        "nome_curso" => "Curso de C# Fundamentos",
        "versao_ferramenta" => 5,
        "carga_horaria" => 60,
        "status" => true
    ],
    "Javascript" => [
        "nome_curso" => "Curso de Javascript Fundamentos",
        "versao_ferramenta" => 11.4,
        "carga_horaria" => 30,
        "status" => false
    ],
];

foreach ($cursos as $curso) {

    echo $curso['nome_curso'];
    echo "<br>";
    echo "Versão da ferramenta: " . $curso['versao_ferramenta'];
    echo "<br>";
    echo "Carga horaria: " . $curso['carga_horaria'];
    echo "<br>";
    echo "Status: " . $curso['status'];
    echo "<br><br>";
}

// =============================================================

foreach ($cursos as $curso) {

    if ($curso['status'] == false) {
        continue;
    }

    echo $curso['nome_curso'];
    echo "<br>";
    echo "Versão da ferramenta: " . $curso['versao_ferramenta'];
    echo "<br>";
    echo "Carga horaria: " . $curso['carga_horaria'];
    echo "<br>";
    echo "Status: " . $curso['status'];
    echo "<br><br>";
}

// =============================================================

foreach ($cursos as $curso) {

    if ($curso['status'] == false) {
        break;
    }

    echo $curso['nome_curso'];
    echo "<br>";
    echo "Versão da ferramenta: " . $curso['versao_ferramenta'];
    echo "<br>";
    echo "Carga horaria: " . $curso['carga_horaria'];
    echo "<br>";
    echo "Status: " . $curso['status'];
    echo "<br><br>";
}

/* RESULTADO - SAÍDA

Curso de PHP Fundamentos
Versão da ferramenta: 8.2
Carga horaria: 40
Status: 1

Curso de JAVA Fundamentos
Versão da ferramenta: 17
Carga horaria: 30
Status:

Curso de C# Fundamentos
Versão da ferramenta: 5
Carga horaria: 60
Status: 1

Curso de Javascript Fundamentos
Versão da ferramenta: 11.4
Carga horaria: 30
Status:

// =============================================================

Curso de PHP Fundamentos
Versão da ferramenta: 8.2
Carga horaria: 40
Status: 1

Curso de C# Fundamentos
Versão da ferramenta: 5
Carga horaria: 60
Status: 1

// =============================================================

Curso de PHP Fundamentos
Versão da ferramenta: 8.2
Carga horaria: 40
Status: 1 

*/
