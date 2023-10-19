<?php
// Funções

function somar($valor1, $valor2) {

    // echo "Antes do retorno";

    return $valor1 + $valor2;

    // echo "Depois do retorno, nunca será chamado!";

}

$soma = somar(12,10);
$soma2 = somar(120,100);
$soma3 = somar(45,63);

echo $soma . "<br>";
echo $soma2 . "<br>";
echo $soma3 . "<br>";

/* RESULTADO - SAÍDA

    22
    220
    108

*/