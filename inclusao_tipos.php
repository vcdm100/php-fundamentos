<?php
// Importação de arquivos - Tipos de inclusão

error_reporting(E_ALL);

echo "inicio do arquivo inclusao.php<br><br>";

require_once "variaveis-1.php"; // É uma instrução em PHP que inclui e executa o conteúdo de um arquivo chamado "variáveis-1.php" no ponto em que essa linha está sem código, ou seja, não existe esse arquivo encontrado, irá parar executar para evitar se continua.
echo "<br>";


//echo "Estou mostrando a variavel nome no arquivo inclusao.php: $nome";
echo "<br><br>";

// ===================================================================

include_once "funcoes/personalizadas.php";
echo "<br>";

echo "Estou mostrando a funcao somar no arquivo inclusao.php: " . somar(10,10);
echo "<br>";

// ===================================================================

echo "<br>fim do arquivo inclusao.php";

/* RESULTADO - SAÍDA

    inicio do arquivo inclusao.php


    Warning: require_once(variaveis-1.php): Failed to open stream: No such file or directory in C:\treinaweb\php-fundamentos\inclusao_tipos.php on line 8

    Fatal error: Uncaught Error: Failed opening required 'variaveis-1.php' (include_path='.;C:\php\pear') in C:\treinaweb\php-fundamentos\inclusao_tipos.php:8 Stack trace: #0 {main} thrown in C:\treinaweb\php-fundamentos\inclusao_tipos.php on line 8
    
*/