<?php

/* Soma Simples

Leia dois valores inteiros, no caso para variáveis A e B. 
A seguir, calcule a soma entre elas e atribua à variável SOMA. 
A seguir escrever o valor desta variável.

*/

#resolução:

    $a = fgets(STDIN);
    $b = fgets(STDIN);
    
    $soma = $a + $b;
    
    echo "SOMA = $soma\n";
?>