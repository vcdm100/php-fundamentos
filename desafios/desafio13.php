<?php
// Erros

$divisor = 5;
$dividendo = false;


try {

    if (is_numeric($dividendo) == false) {
        throw new Exception('Erro: Valores inválidos');
    }
    
    if (is_numeric($divisor) == false) {
        throw new Exception('Erro: Valores inválidos');
    }
    
    if ($divisor == 0) {
        throw new Exception('Erro: Divisão por zero não permitida');
    }
    
    echo $dividendo / $divisor;

} catch (\Throwable $n) {
    
    echo $n -> getMessage();

}

/* RESULTADO - SAÍDA

$divisor = 0;
$dividendo = 10;
    Erro: Divisão por zero não permitida

$divisor = 5;
$dividendo = 10;
    2

$divisor = true;
$dividendo = 10;
    Erro: Valores inválidos

$divisor = 5;
$dividendo = false;
    Erro: Valores inválidos

*/