<?php
//Estrutura de repetição - Laço while

$i = 0;

while ($i < 10) {
    echo "executou $i <br>";

    $i = $i + 1; // é maior cuidado, pois sem isso, irá acontecer infinito!!!
}

/* RESULTADO - SAÍDA

    executou 0
    executou 1
    executou 2
    executou 3
    executou 4
    executou 5
    executou 6
    executou 7
    executou 8
    executou 9

*/