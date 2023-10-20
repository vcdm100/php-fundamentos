<?php
// Importação de arquivos - Inclusão de arquivos

echo "inicio do arquivo inclusao.php<br><br>";

include "variaveis.php";
echo "<br><br>";

echo "Estou mostrando a variavel nome no arquivo inclusao.php: $nome";
echo "<br><br>";

// ===================================================================

include "funcoes/personalizadas.php";
echo "<br>";

echo "Estou mostrando a funcao somar no arquivo inclusao.php: " . somar(10,10);
echo "<br>";

// ===================================================================

echo "<br>fim do arquivo inclusao.php";

/* RESULTADO - SAÍDA

    inicio do arquivo inclusao.php

    victor.moura.webart@gmail.com
    vcdm100@gmail.com
    100
    Victor Cláudio
    Elton 28 Fonseca
    Elton Fonseca
    28

    Estou mostrando a variavel nome no arquivo inclusao.php: Elton

    22
    220
    108

    Estou mostrando a funcao somar no arquivo inclusao.php: 20

    fim do arquivo inclusao.php
    
*/