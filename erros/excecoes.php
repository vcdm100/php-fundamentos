<?php

error_reporting(E_ALL); // Esta linha define o nível de relatório de erros. 
                        // E_ALL => significa que todos os tipos de erros serão relatados.

$divisor = 5;

try { //Este bloco indica o início do código que pode gerar uma exceção. O PHP irá monitorar este bloco em busca de abordagens.
    if($divisor === 0) {
        throw new Exception("Não é possivel dividir por 0, defina um valor maior que 0", 1); // Esta linha gera uma exceção do tipo Exceptioncom a mensagem "Não é possível dividir por 0, defina um valor maior que 0". O segundo argumento 1 é o código de erro associado a esta exceção.
    }

    $valor = 100 / $divisor;

    echo $valor;

} catch (\Throwable $th) { // Se uma exceção lançada dentro do bloco try, ela será capturada aqui. \Throwable é um tipo de exceção básico em PHP que captura qualquer tipo de exceção. O nome $th é uma variável que representa uma exceção capturada.
    echo $th -> getMessage(); //Dentro do bloco catch, estamos exibindo uma mensagem de exceção usando $th->getMessage(). Isso imprimirá a mensagem que definimos quando lançamos a exceção.
}

/* RESULTADO - SAÍDA

$divisor = 0;
    Não é possivel dividir por 0, defina um valor maior que 0

$divisor = 1;
    100

$divisor = 5;
    20
    
*/