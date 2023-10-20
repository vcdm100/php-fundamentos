<?php
// Importação de arquivos - Separaçâo de arquivo por tipo

error_reporting(E_ALL);

echo "inicio do arquivo inclusao.php<br><br>";

require_once "variaveis2.php";


echo "Estou mostrando a variavel nome no arquivo inclusao.php: $nome";
echo "<br><br>";

// ===================================================================

include_once "funcoes/personalizadas2.php";

echo "Estou mostrando a funcao somar no arquivo inclusao.php: " . somar(10,10);
echo "<br>";

// ===================================================================

echo "<br>fim do arquivo inclusao.php";

/* RESULTADO - SAÍDA

    inicio do arquivo inclusao.php

    Estou mostrando a variavel nome no arquivo inclusao.php: Victor Cláudio

    Estou mostrando a funcao somar no arquivo inclusao.php: 20

    fim do arquivo inclusao.php
    
*/