<?php

//Funções

$ano = 2023;

function anoBissexto($ano) {
    
    if ($ano % 400 == 0) {
        return true;
    } elseif ($ano % 100 == 0) {
        return false;
    } elseif ($ano % 4 == 0) {
        return true;
    } else {
        return false;
    }
}

if (anoBissexto($ano) == true) {
    echo "Ano bissexto";
} else {
    echo "Não é ano bissexto";
}

/* RESULTADO - SAÍDA

    Não é ano bissexto

============================================================================

1. `<?php` - Esta é a abertura de uma tag PHP. Indica ao interpretador que o código PHP começa aqui.

2. `$ano = 2023;` - Isso cria uma variável chamada `$ano` e atribui a ela o valor `2023`.

3. `function anoBissexto($ano) { ... }` - Aqui é definida uma função chamada `anoBissexto` que aceita um parâmetro chamado `$ano`.

4. Dentro da função `anoBissexto`, há uma série de condicionais (`if`, `elseif` e `else`) que verificam se o ano é bissexto ou não.

   - `if ($ano % 400 == 0) { return true; }` - Se o ano for divisível por 400, ele é bissexto e a função retorna `true`.
   - `elseif ($ano % 100 == 0) { return false; }` - Se não for divisível por 400 mas for divisível por 100, não é bissexto, então a função retorna `false`.
   - `elseif ($ano % 4 == 0) { return true; }` - Se não for divisível por 100 mas for divisível por 4, é bissexto, então a função retorna `true`.
   - `else { return false; }` - Se não atender a nenhum dos casos acima, não é bissexto e a função retorna `false`.

5. Fora da função, há um bloco condicional que chama a função `anoBissexto` com o ano fornecido (`anoBissexto($ano)`). Dependendo do valor retornado pela função, imprime se é ou não um ano bissexto.

   - `if (anoBissexto($ano) == true) { echo "Ano bissexto"; } else { echo "Não é ano bissexto"; }` - Aqui, o resultado da função `anoBissexto` é comparado com `true`. Se for verdadeiro, imprime "Ano bissexto", caso contrário, imprime "Não é ano bissexto".

6. `}` - Fecha o bloco condicional.

7. `}` - Fecha a função `anoBissexto`.

8. `}` - Fecha o bloco PHP.

Esse código verifica se o ano fornecido é bissexto e imprime uma mensagem correspondente. Lembrando que o ano bissexto é aquele que é divisível por 4, a menos que seja divisível por 100 mas não por 400.
    
*/